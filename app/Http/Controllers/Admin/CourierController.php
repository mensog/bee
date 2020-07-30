<?php

namespace App\Http\Controllers\Admin;

use App\Courier;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourierController extends Controller
{
    public function index()
    {
        $couriers = Courier::all();
        return view('pages.admin.couriers', ['couriers' => $couriers]);
    }

    public function show($id)
    {
        $courier = Courier::with('orders')->where('id', $id)->firstOrFail();
        return view('pages.admin.courier', ['courier' => $courier]);
    }
}
