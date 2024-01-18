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
                            <!-- Input field for product name -->
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
                                    <!-- Input field for product price -->
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
                                    <!-- Dropdown for selecting subcategory -->
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
                            <!-- Textarea for product description -->
                            <textarea name="description" id="description" cols="30" rows="10"
                                class="form-textarea mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('description') }}</textarea>
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
                                        class="hidden image-upload-input" id="file-input" onchange="previewImage(this)">
                                </div>
                            </div>
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

    <!-- JavaScript for handling dynamic image fields and image preview -->
    <script>
        function uuidv4() {
            return 'xxxxxxxx-xxxx-4xxx-yxxx-xxxxxxxxxxxx'.replace(/[xy]/g, function(c) {
                var r = Math.random() * 16 | 0,
                    v = c === 'x' ? r : (r & 0x3 | 0x8);
                return v.toString(16);
            });
        }

        function addImageField() {
            var uniqueId = uuidv4();
            var container = document.getElementById('image-upload-container');

            // Buat elemen kontainer untuk input file, image preview, dan tombol remove
            var div = document.createElement('div');
            div.className = 'flex items-center space-x-4 mb-2';

            // Buat elemen baru untuk input file
            var fileInput = document.createElement('input');
            fileInput.type = 'file';
            fileInput.name = 'images[]';
            fileInput.id = uniqueId;
            fileInput.accept = 'image/*';
            fileInput.className = 'hidden image-upload-input';
            fileInput.onchange = function() {
                previewImage(this);
            };

            // Buat elemen baru untuk label
            var label = document.createElement('label');
            label.htmlFor = uniqueId;
            label.className =
                'cursor-pointer inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50';
            label.innerHTML = '<i class="fas fa-cloud-upload-alt mr-2"></i> Pilih File';

            // Buat elemen baru untuk image preview
            var preview = document.createElement('img');
            preview.id = uniqueId + '-preview';
            preview.className = 'h-12 w-12 object-cover rounded-md';

            // Buat elemen baru untuk delete button
            var button = document.createElement('button');
            button.type = 'button';
            button.className = 'bg-red-500 text-white py-2 px-4 rounded-md';
            button.innerHTML = '-';
            button.onclick = function() {
                removeImageField(fileInput, preview, button);
            };

            // Masukkan elemen baru ke dalam container
            container.appendChild(div);
            div.appendChild(label);
            div.appendChild(preview);
            div.appendChild(button);
            div.appendChild(fileInput);
        }

        function previewImage(input) {
            if (input.id == 'file-input') {
                var preview = document.getElementById('main-preview');
            } else {
                var uniqueId = input.id;
                var preview = document.getElementById(uniqueId + '-preview');
            }

            var file = input.files[0];
            var reader = new FileReader();

            reader.onloadend = function() {
                preview.src = reader.result;
            }

            if (file) {
                reader.readAsDataURL(file);
            } else {
                preview.src = "";
            }
        }


        function removeImageField(input, imagePreview, button) {
            // Remove the div containing the input field, image preview, and remove button
            var container = document.getElementById('image-upload-container');
            container.removeChild(input.parentElement);

            // If there is only one input field left, disable the remove button
            var inputFields = container.getElementsByClassName('image-upload-input');
            if (inputFields.length === 1) {
                inputFields[0].nextElementSibling.nextElementSibling.disabled = true;
            }
        }
    </script>
</x-app-layout>
