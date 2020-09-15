<?php

namespace App\Http\Controllers;

use App\Delivery;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $deliveries = Delivery::all();
        return view('pages.about', ['deliveries' => $deliveries]);
    }
}
