<?php

namespace App\Http\Controllers;

use App\Delivery;
use Illuminate\Http\Request;

class AboutController extends Controller
{3
    public function index()
    {
        $deliveries = Delivery::all();
        return view('pages.about', ['deliveries' => $deliveries]);
    }
}
