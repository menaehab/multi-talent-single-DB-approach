<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Create Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <form method="POST" action="{{ route('articles.store') }}">
                    @csrf

                    @include('articles.form')

                    <div class="mt-4">
                        <button class="inline-flex items-center px-4 py-2 text-white bg-indigo-600 rounded-md">{{ __('Save') }}</button>
                        <a href="{{ route('articles.index') }}" class="text-sm text-gray-600 ms-3">{{ __('Cancel') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
