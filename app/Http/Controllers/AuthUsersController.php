<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthUsersLoginRequest;
use App\Http\Requests\AuthUsersRegisterRequest;
use App\Http\Requests\ForgotRequest;
use App\Mail\ForgotPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function ShowForgotForm()
    {
        return view('Auth.forgot');
    }

    public function forgot(ForgotRequest $request)
    {
        $data = $request->validated();

        $user = User::where(['email' => $data['email']])->first();

        $password = uniqid();

        $user->password = bcrypt($password);

        $user->save();

        Mail::to($user)->send(new ForgotPassword($password));

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
