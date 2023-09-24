<?php

use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\CourierController as AdminCourierController;
use App\Http\Controllers\Admin\LogController as AdminLogController;
use App\Http\Controllers\Admin\MainController as AdminMainController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\Admin\OrderItemController as AdminOrderItemController;
use App\Http\Controllers\Admin\OrderStoreController as AdminOrderStoreController;
use App\Http\Controllers\Admin\PartnerController as AdminPartnerController;
use App\Http\Controllers\Admin\ProductAttributeController as AdminProductAttributeController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

use App\Http\Controllers\Lk\MainController as LkMainController;
use App\Http\Controllers\Lk\ProfileController as LkProfileController;

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FavoriteListController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ProductController;

use App\Http\Controllers\OrderController;
use App\Http\Controllers\StaticPageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [MainController::class, 'index'])->name('main');

Route::prefix('admin')->namespace('Admin')->middleware(['can:accessAdminPanel'])->group(function () {
    Route::get('/', [AdminMainController::class, 'index'])->name('admin_main');

    Route::get('/api/attributes/search', [AdminProductAttributeController::class, 'search'])->name('admin_product_attributes_search');
    Route::post('/api/products', [AdminProductController::class, 'indexApi'])->name('admin_products_api');
    Route::post('/api/product/{id}/attribute/add', [AdminProductAttributeController::class, 'search'])->name('admin_product_attributes_add');
    Route::get('/api/category/{id}/breadcrumbs', [AdminCategoryController::class, 'breadcrumbs'])->name('admin_category_breadcrumbs');

    Route::get('/products', [AdminProductController::class, 'index'])->name('admin_products');
    Route::get('/product/log', [AdminLogController::class, 'index'])->name('admin_products_log');
    Route::get('/product/create', [AdminProductController::class, 'showCreatePage'])->name('admin_create_product_page');
    Route::post('/product/create', [AdminProductController::class, 'createOrUpdate'])->name('admin_create_product');
    Route::get('/product/{id}', [AdminProductController::class, 'show'])->name('admin_product');
    Route::post('/product/update/{id}', [AdminProductController::class, 'createOrUpdate'])->name('admin_product_update');

    Route::get('/users', [AdminUserController::class, 'index'])->name('admin_users');
    Route::get('/user/log', [AdminLogController::class, 'index'])->name('admin_users_log');
    Route::get('/user/{id}', [AdminUserController::class, 'show'])->name('admin_user');

    Route::get('/orders', [AdminOrderController::class, 'index'])->name('admin_orders');
    Route::get('/order/log', [AdminLogController::class, 'index'])->name('admin_orders_log');
    Route::post('/order/item/quantity/update/{id}', [AdminOrderItemController::class, 'updateQuantity'])->name('admin_order_item_update_quantity');
    Route::post('/order/item/status/update/{id}', [AdminOrderItemController::class, 'updateStatus'])->name('admin_order_item_update_status');
    Route::post('/order/store/status/update/{id}', [AdminOrderStoreController::class, 'updateStatus'])->name('admin_order_store_update_status');
    Route::post('/order/store/order/update/{id}', [AdminOrderStoreController::class, 'updateStoreOrderId'])->name('admin_order_store_update_order_id');
    Route::post('/order/comment/update/{id}', [AdminOrderController::class, 'updateComment'])->name('admin_order_update_comment');
    Route::post('/order/courier/update/{id}', [AdminOrderController::class, 'updateCourier'])->name('admin_order_update_courier');
    Route::get('/order/{id}', [AdminOrderController::class, 'show'])->name('admin_order');
    Route::post('/order/{id}', [AdminOrderController::class, 'changeOrderStatus'])->name('admin_change_order');
    Route::post('/order/{id}', [AdminOrderController::class, 'changeOrder'])->name('admin_change_order');

    Route::get('/couriers', [AdminCourierController::class, 'index'])->name('admin_couriers');
    Route::get('/courier/log', [AdminLogController::class, 'index'])->name('admin_couriers_log');
    Route::get('/courier/create', [AdminCourierController::class, 'showCreatePage'])->name('admin_create_courier_page');
    Route::post('/courier/create', [AdminCourierController::class, 'create'])->name('admin_create_courier');
    Route::get('/courier/update/{id}', [AdminCourierController::class, 'showUpdatePage'])->name('admin_update_courier_page');
    Route::post('/courier/update/{id}', [AdminCourierController::class, 'update'])->name('admin_update_courier');
    Route::get('/courier/{id}', [AdminCourierController::class, 'show'])->name('admin_courier');

    Route::get('/categories', [AdminCategoryController::class, 'index'])->name('admin_categories');
    Route::get('/categories/unsorted', [AdminCategoryController::class, 'unsortedIndex'])->name('admin_unsorted_categories');
    Route::get('/category/create', [AdminCategoryController::class, 'showCreatePage'])->name('admin_create_category_page');
    Route::post('/category/create', [AdminCategoryController::class, 'create'])->name('admin_create_category');
    Route::post('/category/unsorted/move/{id}', [AdminCategoryController::class, 'moveCategory'])->name('admin_category_move_unsorted');
    Route::post('/category/update/parent/{id}', [CategoryController::class, 'setParent'])->name('admin_category_update_parent');
    Route::post('/category/update/{id}', [AdminCategoryController::class, 'update'])->name('admin_category_edit_data');
    Route::post('/category/delete/{id}', [AdminCategoryController::class, 'delete'])->name('admin_category_delete');
    Route::get('/category/{id}', [AdminCategoryController::class, 'showEditPage'])->name('admin_edit_category_page');

    Route::get('/partners', [AdminPartnerController::class, 'index'])->name('admin_partners');
    Route::get('/partner/log', [AdminLogController::class, 'index'])->name('admin_partners_log');
    Route::get('/partner/{id}', [AdminPartnerController::class, 'show'])->name('admin_partner');
});

Route::prefix('lk')->namespace('Lk')->middleware(['auth'])->group(function () {
    Route::get('/', [LkMainController::class, 'index'])->name('lk');
    Route::get('/orders', [LkMainController::class, 'orders'])->name('lk_orders');
    Route::get('/profile', [LkProfileController::class, 'index'])->name('lk_profile');
    Route::get('/profile/editdata', [LkProfileController::class, 'showEditDataForm'])->name('lk_profile_edit_data_form');
    Route::post('/profile/editdata', [LkProfileController::class, 'editData'])->name('lk_profile_edit_data');
    Route::get('/profile/changeemail', [LkProfileController::class, 'showChangeEmailForm'])->name('lk_profile_change_email_form');
    Route::post('/profile/changeemail', [LkProfileController::class, 'changeEmail'])->name('lk_profile_change_email');
    Route::get('/profile/changepass', [LkProfileController::class, 'showChangePasswordForm'])->name('lk_profile_change_password_form');
    Route::post('/profile/changepass', [LkProfileController::class, 'changePassword'])->name('lk_profile_change_password');
});

Route::get('/catalog', [CategoryController::class, 'index'])->name('catalog');
Route::get('/category/{name}', [CategoryController::class, 'show'])->name('category');
Route::get('/product/{name}', [ProductController::class, 'show'])->name('product');
Route::get('/cart', [CartController::class, 'show'])->name('cart');
Route::get('/addtocart', [CartController::class, 'addProduct'])->name('add_to_cart');
Route::get('/removefromcart', [CartController::class, 'removeProduct'])->name('remove_from_cart');
Route::get('/checkout', [CartController::class, 'showCheckout'])->middleware('auth')->name('checkout_page');
Route::post('/order', [OrderController::class, 'create'])->middleware('auth')->name('place_order');
Route::get('/favorites', [FavoriteListController::class, 'show'])->name('favorites');

Route::post('/api/cart', [CartController::class, 'api'])->name('api_cart');
Route::post('/api/favorites', [FavoriteListController::class, 'api'])->name('api_favorites');

Auth::routes();
Route::get('/personal-data-agreement', [StaticPageController::class, 'personalDataAgreement'])->name('personal-data-agreement');
Route::get('/personal-data-policy', [StaticPageController::class, 'personalDataPolicy'])->name('personal-data-policy');
Route::get('/sale-regulations', [StaticPageController::class, 'saleRegulations'])->name('sale-regulations');
