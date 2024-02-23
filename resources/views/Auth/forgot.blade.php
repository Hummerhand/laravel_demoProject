@extends('layout.app2')

@section('title', 'Восстановление пароля')

@section('content')

    <div class="h-screen bg-white flex flex-col space-y-10 justify-center items-center">
        <div class="bg-white w-96 shadow-xl rounded p-5">
            <h1 class="text-3xl font-medium">{{ __('Восстановление пароля') }}</h1>

            <form action="{{ route('forgot_process') }}" method="post" class="space-y-5 mt-5">

                @csrf

                <input name="email" type="text" class="w-full h-12 border border-blue-400 rounded px-3 @error('email') border-red-800 @enderror" placeholder="Email" />

                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <div>
                    <a href="{{ route('login') }}" class="font-medium text-blue-900 hover:bg-blue-300 rounded-md p-2">{{ __('Вспомнил пароль') }}</a>
                </div>

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">{{ __('Восстановить') }}</button>
            </form>

        </div>
    </div>

@endsection
