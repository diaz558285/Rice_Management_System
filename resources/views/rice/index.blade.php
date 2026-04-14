<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-violet-900">Rice Products</h2>
    </x-slot>

    <div class="container py-6 bg-light rounded-lg shadow bg-violet-200 jusify-center mx-auto mt-10">

    <div class="flex justify-center gap-4 max-w-lg mx-auto">
    <a href="{{ route('rice.create') }}"
       class="bg-violet-500 text-white px-10 py-2 rounded hover:bg-violet-600">
        + Add Rice
    </a>
    </div>

        <table class="w-1/2 mt-4 bg-white shadow rounded-lg mx-auto border text-center justify-center">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border-5 p-2">Rice Name</th>
                    <th>Price/kg</th>
                    <th>Stock</th>
                    <th>Description</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                <tr class="border-t">
                    <td class="p-2">Kohaku</td>
                    <td>₱54</td>
                    <td>50</td>
                    <td>Premium soft rice with clean taste.</td>
                    <td>
                        <a href="{{ route('rice.edit') }}" class="text-blue-500">Edit</a>
                        <button onclick="alert('Are you sure you want to delete this rice?')" class="text-red-500 ml-2">Delete</button>
                    </td>
                </tr>

                <tr class="border-t">
                    <td class="p-2">Jasmine</td>
                    <td>₱45</td>
                    <td>25</td>
                    <td>Fragrant fluffy rice.</td>
                    <td>
                        <a href="{{ route('rice.edit') }}" class="text-blue-500">Edit</a>
                        <button onclick="alert('Are you sure you want to delete this rice?')" class="text-red-500 ml-2">Delete</button>
                    </td>
                </tr>

                <tr class="border-t">
                    <td class="p-2">Premium</td>
                    <td>₱54</td>
                    <td>50</td>
                    <td>High quality rice for special meals.</td>
                    <td>
                        <a href="{{ route('rice.edit') }}" class="text-blue-500">Edit</a>
                        <button onclick="alert('Are you sure you want to delete this rice?')" class="text-red-500 ml-2">Delete</button>
                    </td>
                </tr>

            </tbody>
        </table>

    </div>
</x-app-layout>