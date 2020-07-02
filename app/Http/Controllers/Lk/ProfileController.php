<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        return view('pages.lk.profile', ['user' => $user]);
    }

    public function showEditDataForm(Request $request)
    {
        $user = Auth::user();
        return view('pages.lk.edit-data', ['user' => $user]);
    }

    public function editData(Request $request)
    {
        return redirect('lk_profile');
    }

    public function showChangeEmailForm(Request $request)
    {
        $user = Auth::user();
        return view('pages.lk.change-email', ['user' => $user]);
    }

    public function changeEmail(Request $request)
    {
        return redirect('lk_profile');
    }

    public function showChangePasswordForm(Request $request)
    {
        $user = Auth::user();
        return view('pages.lk.change-email', ['user' => $user]);
    }

    public function changePassword(Request $request)
    {
        return redirect('lk_profile');
    }
}
