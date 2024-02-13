@extends('layout.admin')

@section('title', isset($photo) ? "Редактировать фото id {$photo->id}" : 'Добавить новое фото')

@section('content')

    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($photo) ? "Редактировать фото id {$photo->id}" : 'Добавить новое фото' }}</h3>

        <div class="mt-8">
            <a href="{{ route('admin.photos.index') }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Назад') }}</a>
        </div>

        <div class="mt-8">
            <form action="{{ isset($photo) ? route('admin.photos.update', $photo->id) : route('admin.photos.store') }}" method="post" class="space-y-5 mt-5" enctype="multipart/form-data">

                @csrf

                @if(isset($photo))
                    @method('PUT')
                @endif

                <input name="name" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('name') border-red-800 @enderror" placeholder="Название" value="{{ $photo->name ?? '' }}" />

                @error('name')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                @if(isset($photo) && $photo->image)
                    <div>
                        <img class="h-64 w-64" src="/storage/photos{{ $photo->image }}">
                    </div>
                @endif

                <input name="image" type="file" class="w-full h-12" placeholder="Обложка" />

                @error('image')
                    <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection




