<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ auth()->user()->tenant->name ?? __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 overflow-x-auto">
                    <table class="w-full text-left border border-gray-200 rounded-lg">
                        <thead class="bg-gray-100">
                            <tr>
                                <th scope="col"
                                    class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">
                                    #
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">
                                    Name
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 text-sm font-semibold text-left text-gray-700 border-b">
                                    Email
                                </th>
                            </tr>
                        </thead>

                        <tbody class="bg-white divide-y divide-gray-200">
                            @forelse ($users as $user)
                                <tr class="transition odd:bg-white even:bg-gray-50 hover:bg-gray-100">
                                    <td class="px-6 py-4 text-sm text-left text-gray-600">
                                        {{ $user->id }}
                                    </td>
                                    <td class="px-6 py-4 text-sm font-semibold text-left text-gray-800">
                                        {{ $user->name }}
                                    </td>
                                    <td class="px-6 py-4 text-sm text-left text-gray-600">
                                        {{ $user->email }}
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="3" class="px-6 py-8 text-center text-gray-500">
                                        No users found
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
