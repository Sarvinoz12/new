<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Managers') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('managers.create') }}" class="bg-blue-500 text-white px-4 py-2 rounded">Add Manager</a>

                    <table class="table-auto w-full mt-4">
                        <thead>
                        <tr>
                            <th class="border px-4 py-2">ID</th>
                            <th class="border px-4 py-2">Name</th>
                            <th class="border px-4 py-2">phone</th>
                            <th class="border px-4 py-2">Actions</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($managers as $manager)
                            <tr>
                                <td class="border px-4 py-2">{{ $manager->id }}</td>
                                <td class="border px-4 py-2">{{ $manager->name }}</td>
                                <td class="border px-4 py-2">{{ $manager->phone }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('managers.edit', $manager) }}" class="bg-yellow-500 text-white px-4 py-2 rounded">Edit</a>
                                    <form action="{{ route('managers.delete', $manager) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded"
                                                onclick="return confirm('Are you sure?')">Delete</button>
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
</x-app-layout>
