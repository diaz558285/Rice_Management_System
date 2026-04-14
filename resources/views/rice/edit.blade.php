<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-pink-600">Edit Rice</h2>
    </x-slot>

    <div class="w-1/2 bg-pink-300 mx-auto flex justify-center py-6 mt-8 rounded-lg shadow">
    <div class="py-6 max-w-lg mx-auto mt-3 bg-pink-100 p-6 shadow rounded-lg">
        <label>Rice:</label>
        <input type="text" value="Kohaku" class="w-full mb-3 border p-2 rounded">
        <label>Price:</label>
        <input type="number" value="54" class="w-full mb-3 border p-2 rounded">
        <label>Stock:</label>
        <input type="number" value="50" class="w-full mb-3 border p-2 rounded">
        <label>Description:</label> 
        <textarea class="w-full mb-3 border p-2 rounded">Premium rice description...</textarea>

        <div class="items-center mx-auto flex justify-center mt-4">
        <button type="button"
            onclick="alert('Updated! (UI only)')"
            class="bg-pink-600 text-white px-4 py-2 rounded hover:bg-pink-700">
            Update
        </button>

        <a href="{{ route('rice.index') }}" class="ml-4 bg-gray-300 text-black-600 px-4 py-2 rounded hover:bg-gray-400">
            Back
        </a>
        </div>
</div>
    </div>
</x-app-layout>