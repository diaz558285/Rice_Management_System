<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-orange-600">Add Rice</h2>
    </x-slot>

    <div class="w-1/2 bg-orange-300 mx-auto flex justify-center py-6 mt-8 rounded-lg shadow">
    <div class="py-6 max-w-lg mx-auto mt-3 bg-white p-6 shadow rounded-lg bg-orange-100">

        <label>Rice:</label>
        <input type="text" placeholder="Enter Rice Name" class="w-full mb-3 border p-2 rounded">
        <label>Price:</label>
        <input type="number" placeholder="Price" class="w-full mb-3 border p-2 rounded">
        <label>Stock:</label>
        <input type="number" placeholder="Stock" class="w-full mb-3 border p-2 rounded">
        <label>Description:</label>
        <textarea placeholder="Description" class="w-full mb-3 border p-2 rounded"></textarea>

        <div class="items-center mx-auto flex justify-center mt-4">
        <button type="button"
            onclick="alert('Saved (UI only)')"
            class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700">
            Save
        </button>

        <a href="{{ route('rice.index') }}" class="ml-4 text-black-600 bg-gray-300 px-4 py-2 rounded hover:bg-gray-400">
            Back
        </a>
        </div>
    </div>
    </div>
</x-app-layout>