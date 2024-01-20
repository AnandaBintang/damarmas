<div class="flex flex-col md:flex-row md:space-x-4">
    @foreach ($testimonials as $testimonial)
        <div class="flex-grow mx-3">
            <div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 w-full">
                <form action="{{ route('testimonial.update', $testimonial->id) }}" method="POST" class="space-y-4"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div>
                        <div class="my-3">
                            <div class="mb-4 flex items-center justify-between">
                                <div class="w-1/5 rounded-full bg-gray-100 dark:bg-gray-700 p-2">
                                    @if ($testimonial->image)
                                        <img src="{{ url('storage/upload/testimonial' . '/' . $testimonial->image) }}"
                                            alt="Gambar Klien" class="w-16 h-16 object-cover rounded-full">
                                    @else
                                        <i class="fas fa-user-circle text-4xl"></i>
                                    @endif
                                </div>
                                <div class="w-4/5 ml-4">
                                    <label for="image" class="block text-gray-700 text-sm font-semibold mb-2">
                                        <i class="fas fa-pencil-alt"></i> Edit Profile Picture
                                    </label>
                                    <label for="image-{{ $testimonial->id }}"
                                        class="block text-gray-500 border rounded-lg px-4 py-2 cursor-pointer hover:bg-gray-200 hover:text-gray-700 dark:hover:bg-gray-700 dark:hover:text-gray-200">
                                        <span id="file-label-{{ $testimonial->id }}">Choose Profile Picture File</span>
                                    </label>
                                    <input type="file" name="image" id="image-{{ $testimonial->id }}"
                                        accept="image/*" class="hidden"
                                        onchange="displayFileName({{ $testimonial->id }})">
                                </div>
                            </div>
                            <div class="my-3">
                                <label for="name"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama
                                    Klien</label>
                                <input type="text" name="name" id="name" placeholder="Masukkan nama klien"
                                    value="{{ old('name') ?? $testimonial->name }}"
                                    class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                                @error('name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="my-3">
                                <label for="testimonial"
                                    class="block text-sm font-medium text-gray-700 dark:text-gray-300">Testimonial</label>
                                <textarea name="content" id="content" cols="10" rows="3"
                                    class="form-textarea mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('testimonial') ?? $testimonial->testimonial }}</textarea>
                                @error('content')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div>
                                <div class="flex items-center gap-4">
                                    <x-primary-button
                                        onclick="showToast('{{ session('status') }}')">Ubah</x-primary-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
</div>

<script>
    function displayFileName(id) {
        const fileInput = document.getElementById(`image-${id}`);
        const fileLabel = document.getElementById(`file-label-${id}`);

        if (fileInput.files.length > 0) {
            fileLabel.textContent = fileInput.files[0].name;
        } else {
            fileLabel.textContent = 'Choose Profile Picture File';
        }
    }
</script>
