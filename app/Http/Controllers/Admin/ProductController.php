<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Partner;
use App\Product;
use App\ProductAttribute;
use App\ProductAttributeValue;
use App\View\Components\Admin\Product\Attribute;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    const MAX_ATTRIBUTE_VALUE_LENGTH = 255;
    public function index()
    {
        $products = Product::limit(5000)->get(); // TODO ЛИМИТ ВРЕМЕННО, ПОКА НЕ СДЕЛАЕМ AJAX
        return view('pages.admin.product.index', ['products' => $products]);
    }


    /**
     * Handle the incoming request.
     *
     * @param $name
     * @return Application|Factory|View
     */
    public function show(Request $request, $id)
    {
        $product = Product::with('category')->with('productAttributeValues')->with('productAttributeValues.productAttribute')->with('store')->findOrFail($id);
        $attributes = [];
        foreach ($product->productAttributeValues as $attributeValue) {
            $attributes[] = [
                'id' => $attributeValue->productAttribute->id,
                'name' => $attributeValue->productAttribute->name,
                'value' => $attributeValue->value,
            ];
        }
        $categories = Category::all();
        $storeLink = $product->getStoreProductLink();
        $partners = Partner::all();
        $categoryBreadcrumbs = implode(' / ', $product->category->getBreadcrumbs());
        return view('pages.admin.product.show', ['product' => $product, 'attributes' => $attributes, 'storeLink' => $storeLink, 'partners' => $partners, 'categoryBreadcrumbs' => $categoryBreadcrumbs, 'categories' => $categories]);
    }

    /**
     * Change product data
     *
     * @param Request $request
     * @param $name
     * @return RedirectResponse
     */
    public function changeProduct(Request $request, $id)
    {
        $product = Product::with('category')->with('productAttributeValues')->with('productAttributeValues.productAttribute')->findOrFail($id);
        $attributes = [];

        $product->name = (string)($request)->input('name');
        $product->description = (string)($request)->input('description');
        $product->price = (float)($request)->input('price') * 100;
        $product->save();

        return redirect()->route('admin_product', $id);
    }

    public function showCreatePage()
    {
        $categories = Category::all();
        $partners = Partner::all();
        return view('pages.admin.product.create', ['categories' => $categories, 'partners' => $partners]);
    }

    public function addAttribute(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $attribute = ProductAttribute::findOrFail($request->input('attributeId'));
        $productAttributeValue = $product->productAttributeValues()->create([
            'attribute_id' => $attribute->id,
            'value' => $request->input('value'),
        ]);
    }

    protected function productCreateValidator(array $data, $currentProductId)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'min' => 'Поле :attribute должно быть не менее :min',
            'max' => 'Поле :attribute должно быть не более :max',
            'unique' => 'Такое значение :attribute уже занято, должно быть уникальным',
            'friendlyUrlName.regex' => 'ЧПУ может содержать только английские буквы, цифры и знак дефиса',
        ];

        $names = [
            'name' => 'название',
            'friendlyUrlName' => 'ЧПУ',
            'visible' => 'видимость',
            'categoryId' => 'категория',
            'price' => 'цена',
            'description' => 'описание',
        ];

        return Validator::make($data, [
            'partnerId' => ['required', 'exists:partners,id', 'integer', 'min:1'],
            'moderation' => ['sometimes', 'required', 'string', 'min:1', 'max:255'],
            'name' => ['required', 'string', 'min:1', 'max:255'],
            'friendlyUrlName' => ['required', 'regex:/^[a-z0-9-]+$/i', 'string', \Illuminate\Validation\Rule::unique('products','friendly_url_name')->ignore($currentProductId), 'min:1', 'max:255'],
            'visible' => ['sometimes', 'required', 'string', 'min:0', 'max:10'],
            'categoryId' => ['required', 'integer', 'exists:categories,id', 'min:1'],
            'price' => ['required', 'integer', 'min:0', 'max:999999'],
            'description' => ['string', 'min:1', 'max:4000'],
            'sku' => ['sometimes', 'string', 'min:0', 'max:255'],
        ], $messages, $names);
    }

    public function createOrUpdate(Request $request, $id = 0)
    {
        if ($id != 0) {
            $product = Product::findOrFail($id);
        } else {
            $product = new Product();
        }
        $this->productCreateValidator($request->all(), $id)->validate();
        $product->store_id = $request->input('partnerId');
        $product->moderation = $request->input('moderation');
        $product->name = $request->input('name');
        if ($request->has('sku')) {
            $product->sku = $request->input('sku');
        } else {
            $product->sku = '';
        }
        if ($request->has('visible') && $request->input('visible') == 'on') {
            $product->visible = 1;
        } else {
            $product->visible = 0;
        }
        $product->friendly_url_name = mb_strtolower($request->input('friendlyUrlName'));
        $product->category_id = $request->input('categoryId');
        $product->price = $request->input('price') * 100;
        if ($request->has('description')) {
            $product->description = $request->input('description');
        }
        $product->save();
        if ($request->has('attr') && is_array($request->input('attr'))) {
            foreach ($request->input('attr') as $attributeId => $value) {
                if (ProductAttribute::where('id', $attributeId)->exists() && !empty($value) && mb_strlen($value) <= self::MAX_ATTRIBUTE_VALUE_LENGTH) {
                    $attribute = $product->productAttributeValues()->where('product_attribute_id', $attributeId)->first();
                    if ($attribute) {
                        $attribute->value = $value;
                    } else {
                        $attribute = new ProductAttributeValue();
                        $attribute->product_id = $id;
                        $attribute->product_attribute_id = $attributeId;
                        $attribute->value = $value;
                    }
                    $attribute->save();
                }
            }
            $product->productAttributeValues()->whereNotIn('product_attribute_id', array_keys($request->input('attr')))->delete();
        }
        return redirect(route('admin_product', $product->id));
    }
}
