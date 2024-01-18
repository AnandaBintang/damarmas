<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Produk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-3">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 w-full">
                    <form action="{{ route('product.store') }}" method="POST" class="space-y-4"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="my-3">
                            <label for="name"
                                class="block text-sm font-medium text-gray-300 dark:text-gray-400">Nama
                                Produk</label>
                            <input type="text"
                                class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                id="name" name="name" placeholder="Masukkan nama sub kategori"
                                value="{{ old('name') }}">
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
                                    <input type="number"
                                        class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        id="price" name="price" placeholder="Masukkan harga produk"
                                        value="{{ old('price') }}">
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
                                        class="block text-sm font-medium text-gray-300 dark:text-gray-400">Termasuk Sub
                                        Kategori</label>
                                    <select name="subcategory" id="subcategory"
                                        class="form-select mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                        <option selected disabled>Pilih Kategori</option>
                                        @foreach ($subcategories as $subcategory)
                                            <option value="{{ $subcategory->id }}"
                                                {{ old('subcategory') == $subcategory->id ? 'selected' : '' }}>
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
                                class="form-textarea mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('description') }}</textarea>
                            @error('description')
                                <div class="text-red-500 mt-2 text-sm">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div>
                            <div class="flex items-center gap-4">
                                <x-primary-button
                                    onclick="showToast('{{ session('status') }}')">Tambah</x-primary-button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

    <script>
        function displayImage(input) {
            const preview = document.getElementById('thumbnailPreview');
            const file = input.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.classList.remove('hidden');
                };

                reader.readAsDataURL(file);
            } else {
                preview.src = '';
                preview.classList.add('hidden');
            }
        }
    </script>
</x-app-layout>
