<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\OrderStoreStatus;
use Illuminate\Http\Request;

class OrderStoreController extends Controller
{
    public function updateStatus(Request $request, $id)
    {
        $possibleStatuses = [
            OrderStoreStatus::CREATED,
            OrderStoreStatus::ORDERED,
            OrderStoreStatus::READY_FOR_DELIVERY,
            OrderStoreStatus::PAID,
            OrderStoreStatus::CANCELED,
        ];
        $status = $request->input('status');
        if (!in_array($status, $possibleStatuses)) {
            response('Неизвестный статус', 404);
        }
        $store = OrderStore::findOrFail($id);
        $store->status = $status;
        $store->save();
        response('', 200);
    }

    protected function storeOrderIdValidator(array $data)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'min' => 'Поле :attribute должно быть не менее :min',
            'max' => 'Поле :attribute должно быть не более :max',
        ];

        $names = [
            'storeOrderId' => 'ID',
        ];

        return Validator::make($data, [
            'storeOrderId' => ['required', 'string', 'min:0', 'max:255'],
        ], $messages, $names);
    }

    public function updateStoreOrderId(Request $request, $id)
    {
        $this->storeOrderIdValidator($request->all())->validate();
        $store = OrderStore::findOrFail($id);
        $store->store_order_id = $request->input('storeOrderId');
        $store->save();
        response('', 200);
    }
}
