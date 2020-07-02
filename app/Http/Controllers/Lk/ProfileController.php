<?php

namespace App\Http\Controllers\Lk;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        if ($request->session()->has('passwordChanged')) {
            $passwordChanged = session('passwordChanged');
        } else {
            $passwordChanged = false;
        }
        return view('lk.profile', ['user' => $user, 'passwordChanged' => $passwordChanged]);
    }

    public function showEditDataForm(Request $request)
    {
        $user = Auth::user();
        return view('lk.edit-data', ['user' => $user]);
    }

    protected function editDataValidator(array $data)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'max' => 'Поле :attribute должно содержать не более :max символов',
        ];
        $names = [
            'name' => 'имя',
            'surname' => 'фамилия',
        ];
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
        ], $messages, $names);
    }

    public function editData(Request $request)
    {
        $this->editDataValidator($request->all())->validate();
        $user = Auth::user();
        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->save();
        return redirect('lk_profile');
    }

    public function showChangeEmailForm(Request $request)
    {
        $user = Auth::user();
        return view('lk.change-email', ['user' => $user]);
    }

    public function changeEmail(Request $request)
    {
        $this->changeEmailValidator($request->all())->validate();
        $user = Auth::user();
        $user->email = $request->input('email');
        $user->save();
        return redirect('lk_profile');
    }

    protected function changeEmailValidator(array $data)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'max' => 'Поле :attribute должно содержать не более :max символов',
            'unique:users' => 'Этот e-mail уже занят'
        ];
        $names = [
            'email' => 'e-mail',
            'password' => 'пароль',
        ];
        return Validator::make($data, [
            'email' => ['required', 'string', 'email', 'unique:users', 'max:255'],
            'password' => ['required', 'string', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    return $fail('Неверный пароль');
                }
            }],
        ], $messages, $names);
    }

    public function showChangePasswordForm(Request $request)
    {
        $user = Auth::user();
        return view('lk.change-password', ['user' => $user]);
    }

    public function changePassword(Request $request)
    {
        $this->changePasswordValidator($request->all())->validate();
        $user = Auth::user();
        $user->password = Hash::make($request->input('newPassword'));
        $user->save();
        $request->session()->flash('passwordChanged', true);
        return redirect('lk_profile');
    }

    protected function changePasswordValidator(array $data)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'min' => 'Поле :attribute должно содержать не менее :min символов',
            'max' => 'Поле :attribute должно содержать не более :max символов',
            'same:newPassword' => 'Пароли не совпадают',
        ];
        $names = [
            'email' => 'e-mail',
            'password' => 'пароль',
        ];
        return Validator::make($data, [
            'password' => ['required', 'string', function ($attribute, $value, $fail) {
                if (!Hash::check($value, Auth::user()->password)) {
                    return $fail('Неверный пароль');
                }
            }],
            'newPassword' => ['required', 'string', 'min:8'],
            'newPasswordConfirmation' => ['required', 'same:newPassword'],
        ], $messages, $names);
    }
}
