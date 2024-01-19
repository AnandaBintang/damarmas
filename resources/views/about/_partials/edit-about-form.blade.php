<div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 w-full">
    <form action="{{ route('about.update', $about->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        <div>
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-grow">
                    <div class="my-3">
                        <label for="phone" class="block text-sm font-medium text-gray-300 dark:text-gray-400">Nomor
                            Telepon</label>
                        <input type="text" name="phone" id="phone" placeholder="Masukkan harga produk"
                            value="{{ old('phone') ?? $about->phone }}"
                            class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('phone')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="my-3">
                        <label for="email"
                            class="block text-sm font-medium text-gray-300 dark:text-gray-400">Email</label>
                        <input type="email" name="email" id="email" placeholder="Masukkan harga produk"
                            value="{{ old('email') ?? $about->email }}"
                            class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('email')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="my-3">
                <label for="address" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Alamat
                    Perusahaan</label>
                <textarea name="address" id="address" cols="10" rows="3"
                    class="form-textarea mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('address') ?? $about->address }}</textarea>
                @error('address')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="flex flex-col md:flex-row md:space-x-4">
                <div class="flex-grow">
                    <div class="my-3">
                        <label for="facebook"
                            class="block text-sm font-medium text-gray-300 dark:text-gray-400">Facebook</label>
                        <input type="text" name="facebook" id="facebook" placeholder="Masukkan harga produk"
                            value="{{ old('facebook') ?? $about->facebook }}"
                            class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('facebook')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="my-3">
                        <label for="instagram"
                            class="block text-sm font-medium text-gray-300 dark:text-gray-400">Instagram</label>
                        <input type="text" name="instagram" id="instagram" placeholder="Masukkan harga produk"
                            value="{{ old('instagram') ?? $about->instagram }}"
                            class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('instagram')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
                <div class="flex-grow">
                    <div class="my-3">
                        <label for="whatsapp"
                            class="block text-sm font-medium text-gray-300 dark:text-gray-400">Whatsapp</label>
                        <input type="text" name="whatsapp" id="whatsapp" placeholder="Masukkan harga produk"
                            value="{{ old('whatsapp') ?? $about->whatsapp }}"
                            class="form-input mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        @error('whatsapp')
                            <div class="text-red-500 mt-2 text-sm">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="my-3">
                <label for="description"
                    class="mb-5 block text-sm font-medium text-gray-700 dark:text-gray-300">Deskripsi
                    Perusahaan</label>
                <textarea name="description" id="description" cols="30" rows="8"
                    class="form-textarea mt-1 block w-full rounded-md border-gray-600 dark:border-gray-400 bg-gray-700 dark:bg-gray-800 text-gray-300 dark:text-gray-100 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ old('description') ?? $about->description }}</textarea>
                @error('description')
                    <div class="text-red-500 mt-2 text-sm">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>
        <div>
            <div class="flex items-center gap-4">
                <x-primary-button onclick="showToast('{{ session('status') }}')">Ubah</x-primary-button>
            </div>
        </div>
    </form>
</div>
