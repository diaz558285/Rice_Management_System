<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-blue-900 leading-tight">
            Orders
        </h2>
    </x-slot>

    <div class="container py-6 bg-light rounded-lg shadow bg-blue-200 jusify-center mx-auto mt-10">

        <div class="flex justify-center gap-4 max-w-lg mx-auto">
        <a href="{{ route('orders.create') }}" 
        class="bg-blue-500 text-white px-10 py-2 rounded hover:bg-blue-600">
            + New Order
        </a>
        </div>

        <table class="w-1/2 mt-4 bg-white shadow rounded-lg mx-auto border text-center justify-center">
            <thead class="bg-gray-200">
                <tr>
                    <th>Rice</th>
                    <th>Quantity</th>
                    <th>Total</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Jasmine</td>
                    <td>2</td>
                    <td>₱90</td>
                </tr>
            </tbody>
        </table>

    </div>
</x-app-layout>