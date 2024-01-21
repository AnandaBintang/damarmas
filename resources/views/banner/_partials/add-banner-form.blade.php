<div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 w-full">
    <form action="{{ route('banner.store') }}" method="POST" class="space-y-4" enctype="multipart/form-data">
        @csrf
        <div>
            <div class="my-3">
                <label for="title" class="block text-sm font-medium text-gray-300 dark:text-gray-400">Judul
                    Banner</label>
                <input type="text"
                    class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    id="title" name="title" placeholder="Masukkan judul banner" value="{{ old('title') }}">
                @error('title')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-3">
                <label for="category" class="block text-sm font-medium text-gray-300 dark:text-gray-400">Menuju ke
                    link</label>
                <input type="text"
                    class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                    id="link" name="link"
                    placeholder="Masukkan direct link banner (isi dengan # jika tidak ada)" value="#">
                @error('link')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="my-3">
                <label for="image" class="block text-sm font-medium text-gray-300 dark:text-gray-400 mb-2">Gambar
                    Banner</label>
                <div class="relative rounded-md shadow-sm">
                    <input type="file" id="image" name="image" accept="image/*" class="sr-only"
                        onchange="displayImage(this)">
                    <label for="image"
                        class="cursor-pointer inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        <i class="fas fa-cloud-upload-alt mr-2"></i> Pilih File
                    </label>
                    <img id="imagePreview" class="hidden mt-2 rounded-md" alt="Preview"
                        style="max-width: 100%; max-height: 150px;">
                </div>
                @error('image')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <div>
            <div class="flex items-center gap-4">
                <x-primary-button onclick="showToast('{{ session('status') }}')">Tambah</x-primary-button>
            </div>
        </div>
    </form>
</div>

<script>
    function displayImage(input) {
        const preview = document.getElementById('imagePreview');
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
