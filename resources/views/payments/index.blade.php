<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-yellow-600 leading-tight">
            Payments
        </h2>
    </x-slot>

    <div class="container py-6 bg-light rounded-lg shadow bg-yellow-100 justify-center mx-auto mt-10">
            <div class="py-6 w-1/2 mx-auto mt-3 bg-white p-6 shadow rounded-lg bg-yellow-300">

        <h3 class="text-center font-semibold text-xl text-black leading-tight">
            Payment Records
        </h3>

        <table class="w-1/2 mt-4 bg-white shadow rounded-lg mx-auto border text-center justify-center">
            <thead class="bg-gray-200">
                <tr>
                    <th>Order</th>
                    <th>Amount</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>#1</td>
                    <td>₱90</td>
                    <td class="text-green-600">Paid</td>
                </tr>
            </tbody>
        </table>
</div>
    </div>
</x-app-layout>