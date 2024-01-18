<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Produk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-3">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 w-full">
                    <label class="block text-sm font-medium text-gray-300 dark:text-gray-400 my-3">Gambar-gambar
                        Produk</label>
                    @if ($productImages->count() > 0)
                        <div class="grid grid-cols-3 gap-4">
                            @foreach ($productImages as $image)
                                <div class="relative">
                                    <img src="{{ url('storage/upload/product/' . $image->image) }}" alt="Product Image"
                                        class="h-24 w-full object-cover rounded-md mb-2">
                                    <form action="{{ route('product.removeImage', $image->id) }}" method="POST"
                                        class="absolute top-0 right-0">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="bg-red-500 text-white py-1 px-2 rounded-md">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p>Tidak ada gambar untuk produk ini.</p>
                    @endif
                    <hr>
                    <form action="{{ route('product.update', $product->id) }}" method="POST" class="space-y-4"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <div class="my-3">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-300 dark:text-gray-400">Nama
                                    Produk</label>
                                <input type="text" name="name" id="name"
                                    class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                    placeholder="Masukkan nama produk" value="{{ old('name') ?? $product->name }}">
                                @error('name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="flex flex-col md:flex-row md:space-x-4">
                                <div class="flex-grow">
                                    <div class="my-3">
                                        <label for="price"
                                            class="block text-sm font-medium text-gray-300 dark:text-gray-400">Harga
                                            Produk</label>
                                        <input type="number" name="price" id="price"
                                            placeholder="Masukkan harga produk"
                                            value="{{ old('price') ?? $product->price }}"
                                            class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        @error('price')
                                            <div class="text-red-500 mt-2 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="flex-grow">
                                    <div class="my-3">
                                        <label for="subcategory"
                                            class="block text-sm font-medium text-gray-300 dark:text-gray-400">Termasuk
                                            Sub
                                            Kategori</label>
                                        <select name="subcategory" id="subcategory"
                                            class="form-select mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            <option selected disabled>Pilih Kategori</option>
                                            @foreach ($subcategories as $subcategory)
                                                <option value="{{ $subcategory->id }}"
                                                    {{ old('subcategory') == $subcategory->id ? 'selected' : '' }}
                                                    {{ $product->subcategory_id == $subcategory->id ? 'selected' : '' }}>
                                                    {{ $subcategory->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('subcategory')
                                            <div class="text-red-500 mt-2 text-sm">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="my-3">
                                <label for="description"
                                    class="block text-sm font-medium text-gray-300 dark:text-gray-400">Deskripsi
                                    Produk</label>

                                <textarea name="description" id="description" cols="30" rows="10"
                                    class="form-textarea mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('description') ?? $product->description }}</textarea>
                                @error('description')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label for="images"
                                    class="block text-sm font-medium text-gray-300 dark:text-gray-400">Gambar
                                    Produk</label>
                                <div id="image-upload-container">
                                    <div class="flex items-center space-x-4 mb-2">
                                        <label for="file-input"
                                            class="cursor-pointer inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                            <i class="fas fa-cloud-upload-alt mr-2"></i> Pilih File
                                        </label>
                                        <img id="main-preview" class="h-12 w-12 object-cover rounded-md">
                                        <button type="button" class="bg-indigo-500 text-white py-2 px-4 rounded-md"
                                            onclick="addImageField()">+</button>
                                        <input type="file" name="images[]" accept="image/*"
                                            class="hidden image-upload-input" id="file-input"
                                            onchange="previewImage(this)">
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div>
                            <div class="flex items-center gap-4">
                                <x-primary-button
                                    onclick="showToast('{{ session('status') }}')">Ubah</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
