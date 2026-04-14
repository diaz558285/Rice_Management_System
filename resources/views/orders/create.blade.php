<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-green-600">Create Order</h2>
    </x-slot>

    <div class="w-1/2 bg-green-300 mx-auto flex justify-center py-6 mt-8 rounded-lg shadow">
    <div class="py-6 max-w-lg mx-auto bg-white p-6 shadow rounded">

        <label>Rice:</label>
        <select class="w-full mb-3 border p-2 rounded">
            <option>Kohaku - ₱54</option>
            <option>Jasmine - ₱45</option>
            <option>Premium - ₱54</option>
        </select>

        <label>Quantity:</label>
        <input type="number" placeholder="Quantity" class="w-full mb-3 border p-2 rounded">

        <label>Price:</label>
        <input type="number" placeholder="Price" class="w-full mb-3 border p-2 rounded">

        <label>Total Amount:</label>
        <input type="number" placeholder="Total Amount" class="w-full mb-3 border p-2 rounded">

        <div class="items-center mx-auto flex justify-center mt-4">
        <button type="button"
            onclick="alert('Order placed (UI only)')"
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Save
        </button>

        <a href="{{ route('orders.index') }}" class="ml-4 bg-gray-300 text-black-600 px-4 py-2 rounded hover:bg-gray-400">
            Back
        </a>
</div>
</div>
    </div>
</x-app-layout>