<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\PrivateAccount;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $messages = [
            'required' => 'Поле :attribute обязательно для заполнения.',
            'password.min' => 'Пароль должен содержать как минимум :min имволов',
            'email.unique' => 'Пользователь с таким e-mail уже существует',
            'max' => 'Поле :attribute должно содержать не более :max символов',
            'password.confirmed' => 'Пароли не совпадают',
            'personal-data-agree.accepted' => 'Необходимо согласиться на обработку персональных данных',
        ];

        $names = [
            'name' => 'имя',
            'surname' => 'фамилия',
            'email' => 'e-mail',
            'password' => 'пароль',
            'personal-data-agree' => 'согласие на обработку персональных данных',
        ];

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'surname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'personal-data-agree' => ['required', 'accepted'],
        ], $messages, $names);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'surname' => $data['surname'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
        $account = new PrivateAccount();
        $account->user_id = $user->id;
        $account->save();
        return $user;
    }
}
