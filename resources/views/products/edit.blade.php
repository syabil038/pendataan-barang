<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-gray-800">Edit Barang</h2>
    </x-slot>

    <div class="py-8 bg-gray-100 min-h-screen">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-lg rounded-xl p-6 border border-gray-200">

                <form action="{{ route('products.update', $product) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label class="block mb-2 font-semibold text-gray-700">Nama Barang</label>
                        <input type="text" name="name" value="{{ old('name', $product->name) }}"
                               class="w-full border-gray-300 rounded-lg shadow-sm">
                        @error('name')
                            <p class="text-red-600 mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 font-semibold text-gray-700">Kategori</label>
                        <select name="category_id" class="w-full border-gray-300 rounded-lg shadow-sm">
                            <option value="">-- Pilih Kategori --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <p class="text-red-600 mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 font-semibold text-gray-700">Harga</label>
                        <input type="number" name="price" value="{{ old('price', $product->price) }}"
                               class="w-full border-gray-300 rounded-lg shadow-sm">
                        @error('price')
                            <p class="text-red-600 mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4">
                        <label class="block mb-2 font-semibold text-gray-700">Stok</label>
                        <input type="number" name="stock" value="{{ old('stock', $product->stock) }}"
                               class="w-full border-gray-300 rounded-lg shadow-sm">
                        @error('stock')
                            <p class="text-red-600 mt-2 text-sm">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mt-6 flex gap-2">
                        <button class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded-lg shadow">
                            Update
                        </button>

                        <a href="{{ route('products.index') }}"
                           class="bg-gray-600 hover:bg-gray-700 text-white font-semibold px-4 py-2 rounded-lg shadow">
                            Kembali
                        </a>
                    </div>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
