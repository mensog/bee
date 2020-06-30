<?php

namespace App\Http\Controllers;

use App\StaticPage;
use Illuminate\Http\Request;

class StaticPageController extends Controller
{
    public function personalDataAgreement()
    {
        $dbPageName = 'personal data agreement';
        $pageName = 'Согласие на обработку персональных данных';
        $page = StaticPage::where('name', $dbPageName)->first();
        return view('pages.static', ['page' => $page, 'pageName' => $pageName, 'dbPageName' => $dbPageName]);
    }
}
