<div class="p-6 bg-white dark:bg-gray-800 border-b border-gray-200 dark:border-gray-700 w-full">
    <form action="{{ route('category.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama Kategori</label>
            <input type="text" class="form-input mt-1 block w-full" id="name" name="name"
                placeholder="Masukkan nama kategori" value="{{ old('name') }}">
            @error('name')
                <div class="text-red-500 mt-2 text-sm">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div>
            <div class="flex items-center gap-4">
                <x-primary-button onclick="showToast('{{ session('status') }}')">Tambah</x-primary-button>

                @if (session('status'))
                    <script>
                        function showToast(message) {
                            Swal.fire({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 2000,
                                icon: 'success',
                                title: message
                            });
                        }

                        document.addEventListener('DOMContentLoaded', function() {
                            showToast('{{ session('status') }}');
                        });
                    </script>
                @endif
            </div>
        </div>
    </form>
</div>
