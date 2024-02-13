@extends('layout.admin')

@section('title', isset($service) ? "Редактировать сервис id {$service->id}" : 'Добавить новый сервис')

@section('content')

    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ isset($service) ? "Редактировать сервис id {$service->id}" : 'Добавить новый сервис' }}</h3>

        <div class="mt-8">
            <a href="{{ route('admin.services.index') }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Назад') }}</a>
        </div>

        <div class="mt-8">
            <form action="{{ isset($service) ? route('admin.services.update', $service->id) : route('admin.services.store') }}" method="post" class="space-y-5 mt-5" enctype="multipart/form-data">

                @csrf

                @if(isset($service))
                    @method('PUT')
                @endif

                <input name="title" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('title') border-red-800 @enderror" placeholder="Название" value="{{ $service->title ?? '' }}" />
                @error('title')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="preview" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('preview') border-red-800 @enderror" placeholder="Краткое описание" value="{{ $service->preview ?? '' }}" />
                @error('preview')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <input name="description" type="text" class="w-full h-12 border border-gray-800 rounded px-3 @error('description') border-red-800 @enderror" placeholder="Полное описание" value="{{ $service->description ?? '' }}" />
                @error('description')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                @if(isset($service) && $service->thumbnail)
                    <div>
                        <img class="h-64 w-64" src="/storage/services{{ $service->thumbnail }}">
                    </div>
                @endif

                <input name="thumbnail" type="file" class="w-full h-12" placeholder="Обложка" />
                @error('thumbnail')
                <p class="text-red-500">{{ $message }}</p>
                @enderror

                <button type="submit" class="text-center w-full bg-blue-900 rounded-md text-white py-3 font-medium">Сохранить</button>
            </form>
        </div>
    </div>
@endsection


