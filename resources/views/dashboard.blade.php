<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rice Management Dashboard
        </h2>
    </x-slot>

    <div class="container py-6 bg-light rounded-lg shadow bg-gray-400 justify-center mx-auto mt-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <a href="{{ route('rice.index') }}" class="block bg-gradient-to-r from-orange-300 to-pink-300 p-6 shadow rounded-lg hover:bg-gradient-to-r hover:from-orange-400 hover:to-pink-400">
                    <h3 class="text-lg font-bold text-white-400">Rice Products</h3>
                </a>

                <a href="{{ route('orders.index') }}" class="block bg-gradient-to-r from-blue-300 to-green-300 p-6 shadow rounded-lg hover:bg-gradient-to-r hover:from-blue-400 hover:to-green-400">
                    <h3 class="text-lg font-bold text-white-400">Orders</h3>
                </a>

                <a href="{{ route('payments.index') }}" class="block bg-gradient-to-r from-yellow-300 to-orange-300 p-6 shadow rounded-lg hover:bg-gradient-to-r hover:from-yellow-400 hover:to-orange-400">
                    <h3 class="text-lg font-bold text-white-400">Payments</h3>
                </a>

            </div>
        </div>
    </div>
</x-app-layout>