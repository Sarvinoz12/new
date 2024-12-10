<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full border-collapse border border-gray-300 dark:border-gray-700">
                        <thead>
                        <tr>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left">
                                {{ __('ID') }}
                            </th>
                            <th class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-left">
                                {{ __('Name') }}
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">
                                    {{ $category->id }}
                                </td>
                                <td class="border border-gray-300 dark:border-gray-700 px-4 py-2">
                                    {{ $category->name }}
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2" class="border border-gray-300 dark:border-gray-700 px-4 py-2 text-center">
                                    {{ __('No categories found.') }}
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
