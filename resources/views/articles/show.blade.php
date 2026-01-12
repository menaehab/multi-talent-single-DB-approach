<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ $article->title ?? __('Article') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="prose max-w-none">
                    {!! nl2br(e($article->content)) !!}
                </div>

                <div class="mt-6">
                    <a href="{{ route('articles.edit', $article) }}" class="inline-flex items-center px-4 py-2 text-white bg-indigo-600 rounded-md">{{ __('Edit') }}</a>
                    <a href="{{ route('articles.index') }}" class="text-sm text-gray-600 ms-3">{{ __('Back to list') }}</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
