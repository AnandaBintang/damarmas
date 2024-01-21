<div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 w-full">
    <form action="{{ route('banner.update', $banner->id) }}" method="POST" class="space-y-4" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div>
            <div class="flex flex-col md:flex-row">
                <div class="w-full md:w-1/3 md:pr-4 mb-4 md:mb-0">
                    <div class="my-3">
                        <label for="thumbnail" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            Gambar Banner
                        </label>
                        <div class="flex items-center">
                            <div class="relative">
                                <img id="thumbnail-preview" src="{{ url('/storage/upload/banner/' . $banner->image) }}"
                                    alt="{{ $banner->title }}" accept="image/*"
                                    class="object-cover object-center rounded-xl w-auto h-auto">
                                <label for="thumbnail"
                                    class="absolute top-0 right-0 p-2 bg-gray-600 rounded-full cursor-pointer">
                                    <i class="fas fa-pencil-alt text-white"></i>
                                    <input type="file" class="hidden" id="thumbnail" name="image"
                                        value="{{ old('image') ?? $banner->image }}">
                                </label>
                            </div>
                        </div>
                        @error('image')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="w-full grid md:w-2/3 items-center">
                    <div>
                        <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Judul
                            Banner</label>
                        <input type="text" class="form-input mt-1 block w-full" id="title" name="title"
                            placeholder="Masukkan judul banner" value="{{ old('title') ?? $banner->title }}">
                        @error('title')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div>
                        <label for="link"
                            class="block text-sm font-medium text-gray-700 dark:text-gray-300">Termasuk Kategori</label>
                        <input type="text" class="form-input mt-1 block w-full" id="link" name="link"
                            placeholder="Masukkan direct link banner (isi dengan # jika tidak ada)"
                            value="{{ old('link') ?? $banner->link }}">
                        @error('link')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class="flex items-center gap-4">
                <x-primary-button onclick="showToast('{{ session('status') }}')">Ubah</x-primary-button>
            </div>
        </div>
    </form>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var thumbnailInput = document.getElementById('thumbnail');
        var thumbnailPreview = document.getElementById('thumbnail-preview');

        thumbnailInput.addEventListener('change', function() {
            var input = this;

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    thumbnailPreview.src = e.target.result;
                };

                reader.readAsDataURL(input.files[0]);
            }
        });
    });
</script>
