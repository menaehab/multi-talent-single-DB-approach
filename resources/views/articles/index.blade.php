<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Articles') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between mb-4">
                <div></div>
                <a href="{{ route('articles.create') }}" class="inline-flex items-center px-4 py-2 text-white bg-indigo-600 rounded-md">{{ __('New Article') }}</a>
            </div>

            @if(session('success'))
                <div class="mb-4 text-green-600">{{ session('success') }}</div>
            @endif

            <div class="p-6 overflow-hidden bg-white shadow-sm sm:rounded-lg">
                @if($articles->count())
                    <table class="w-full text-left border border-gray-200 rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th class="px-4 py-2">#</th>
                                <th class="px-4 py-2">{{ __('Title') }}</th>
                                <th class="px-4 py-2">{{ __('Created') }}</th>
                                <th class="px-4 py-2">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($articles as $article)
                                <tr class="border-t">
                                    <td class="px-4 py-3">{{ $article->id }}</td>
                                    <td class="px-4 py-3"><a href="{{ route('articles.show', $article) }}" class="text-indigo-600">{{ $article->title ?? '—' }}</a></td>
                                    <td class="px-4 py-3">{{ $article->created_at->diffForHumans() }}</td>
                                    <td class="px-4 py-3">
                                        <a href="{{ route('articles.edit', $article) }}" class="text-sm text-indigo-600">{{ __('Edit') }}</a>

                                        <form action="{{ route('articles.destroy', $article) }}" method="POST" class="inline-block" onsubmit="return confirm('Delete this article?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class="text-sm text-red-600 ms-3">{{ __('Delete') }}</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <div class="mt-4">{{ $articles->links() }}</div>
                @else
                    <p class="text-gray-500">No articles found.</p>
                @endif
            </div>
        </div>
    </div>
</x-app-layout>
