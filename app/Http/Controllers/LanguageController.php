<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LanguageController extends Controller
{
    public function languageSwitch(Request $request)
    {
        $language = $request->input('language');

        session(['language' => $language]);
        
        // Log::info("Locale set to: " . $language . " (Selected language: " . $language . ")");
        return redirect()->back()->with(['language_switched' => $language]);
    }
}
