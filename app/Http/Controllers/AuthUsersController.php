<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthUsersLoginRequest;
use App\Http\Requests\AuthUsersRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthUsersController extends Controller
{
    public function ShowLoginForm()
    {
        return view('Auth.login');
    }

    public function login(AuthUsersLoginRequest $request)
    {
        $data = $request->validated();

        if (auth('web')->attempt($data)) {
            return redirect(route('home'));
        }

        return redirect(route('login'))->withErrors(['email' => 'Пользователь не найден, либо данные введены не верно!']);
    }

    public function logout()
    {
        auth('web')->logout();

        return redirect(route('home'));
    }

    public function ShowRegisterForm()
    {
        return view('Auth.register');
    }

    public function register(AuthUsersRegisterRequest $request)
    {
        $data = $request->validated();

        $user = User::query()->create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        if ($user) {
            auth('web')->login($user);
        }

        return redirect(route('home'));
    }


}
