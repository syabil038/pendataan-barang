<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800">
            Dashboard
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-100 min-h-screen">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

                <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200">
                    <p class="text-gray-500 font-semibold">Jumlah Barang</p>
                    <h3 class="text-4xl font-bold text-blue-600 mt-2">
                        {{ $totalProducts }}
                    </h3>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200">
                    <p class="text-gray-500 font-semibold">Jumlah Kategori</p>
                    <h3 class="text-4xl font-bold text-green-600 mt-2">
                        {{ $totalCategories }}
                    </h3>
                </div>

                <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200">
                    <p class="text-gray-500 font-semibold">Total Stok Barang</p>
                    <h3 class="text-4xl font-bold text-purple-600 mt-2">
                        {{ $totalStock }}
                    </h3>
                </div>

            </div>

            <div class="mt-8 bg-white shadow-lg rounded-xl p-6 border border-gray-200">
                <h3 class="text-xl font-bold text-gray-800 mb-4">
                    Menu Cepat
                </h3>

                <div class="flex flex-wrap gap-3">
                    <a href="{{ route('categories.index') }}"
                       class="bg-gray-800 hover:bg-gray-900 text-white px-4 py-2 rounded-lg shadow">
                        Kelola Kategori
                    </a>

                    <a href="{{ route('products.index') }}"
                       class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
                        Kelola Barang
                    </a>
                </div>
            </div>

        </div>
    </div>
</x-app-layout>
