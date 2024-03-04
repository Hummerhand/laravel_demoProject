@extends('layout.admin')

@section('title', isset($about) ? "Редактировать О Нас id {$about->id}" : 'Добавить О Нас')

@section('content')

    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($about) ? "Редактировать О Нас id {$about->id}" : 'Добавить О Нас' }}</h3>

        <div class="mt-8">
            <a href="{{ route('admin.about.index') }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Назад') }}</a>
        </div>

        <div class="mt-8">
            <form action="{{ isset($about) ? route('admin.about.update', $about->id) : route('admin.about.store') }}" method="post" class="space-y-5 mt-5" enctype="multipart/form-data">

                @csrf

                @if(isset($about))
                    @method('PUT')
                @endif

                <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-800 @enderror" placeholder="Заголовок" value="{{ $about->title ?? '' }}" />

                @error('title')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="preview" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('preview') border-red-800 @enderror" placeholder="Краткое описание" value="{{ $about->preview ?? '' }}" />
                @error('preview')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="description" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-800 @enderror" placeholder="Полное описание" value="{{ $about->description ?? '' }}" />
                @error('description')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                @if(isset($about) && $about->thumbnail)
                    <div>
                        <img class="h-64 w-64" src="/storage/abouts{{ $about->thumbnail }}">
                    </div>
                @endif

                <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />

                @error('thumbnail')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="phoneNumber" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('phoneNumber') border-red-800 @enderror" placeholder="Телефонный номер" value="{{ $about->phoneNumber ?? '' }}" />

                @error('phoneNumber')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="location" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('location') border-red-800 @enderror" placeholder="Локация" value="{{ $about->location ?? '' }}" />
                @error('location')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="email" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-800 @enderror" placeholder="Почтвый адрес" value="{{ $about->email ?? '' }}" />

                @error('email')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">{{ __('Сохранить') }}</button>
            </form>
        </div>
    </div>
@endsection




