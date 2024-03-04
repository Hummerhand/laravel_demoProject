@extends('layout.admin')

@section('title', 'О Нас')

@section('content')

    <div class="container mx-auto px-6 py-8">
        <h3 class="text-gray-700 text-3xl font-medium">{{ __('О Нас') }}</h3>

        <div class="mt-8">
            <a href="{{ route('admin.about.create') }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Добавить') }}</a>
        </div>

        <div class="flex flex-col mt-8">
            <div class="-my-2 py-2 overflow-x-auto sm:-mx-6 sm:px-6 lg:-mx-8 lg:px-8">
                <div
                    class="align-middle inline-block min-w-full shadow overflow-hidden sm:rounded-lg border-b border-gray-200">
                    <table class="min-w-full">
                        <thead>
                        <tr>
                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Название компании') }}</th>


                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-left text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Дата публикации') }}</th>


                            <th class="px-6 py-3 border-b border-gray-200 bg-gray-50 text-right text-xs leading-4 font-medium text-gray-500 uppercase tracking-wider">
                                {{ __('Действие') }}</th>
                        </tr>
                        </thead>

                        <tbody class="bg-white">

                        @foreach($abouts as $about)
                            <tr>
                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <a href="{{ route('admin.about.show', $about->id) }}" class="text-sm leading-5 text-gray-900">{{ $about->title }}</a>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-200">
                                    <div class="text-sm leading-5 text-gray-900">{{ $about->created_at }}</div>
                                </td>

                                <td class="px-6 py-4 whitespace-no-wrap text-right border-b border-gray-200 text-sm leading-5 font-medium">

                                    <a href="{{ route('admin.about.edit', $about->id) }}" class="text-indigo-600 hover:text-indigo-900">{{ __('Редактировать') }}</a>

                                    <form action="{{ route('admin.about.delete', $about->id) }}" method="post">
                                        @csrf

                                        @method('DELETE')

                                        <button type="submit" class="text-red-600 hover:text-red-900">{{ __('Удалить') }}</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection


