<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Damarmas') }}</title>

    <!--- Favicon --->
    <link rel="shortcut icon" href="{{ url('favicon.ico') }}" type="image/x-icon">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
        @include('layouts.navigation')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.tailwindcss.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.tiny.cloud/1/8b9z038wsom8bg2ec7zn4u1t34k2etuh9xcau4ykdqkcwjy8/tinymce/6/tinymce.min.js"
        referrerpolicy="origin"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"
        integrity="sha512-GWzVrcGlo0TxTRvz9ttioyYJ+Wwk9Ck0G81D+eO63BaqHaJ3YZX9wuqjwgfcV/MrB2PhaVX9DkYVhbFpStnqpQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        new DataTable('#table', {
            info: false,
            paging: false,
        });

        tinymce.init({
            selector: '#description',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>

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

        function deleteData(id) {
            Swal.fire({
                title: "Anda yakin ingin menghapus data?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#f52222", // Warna merah
                confirmButtonText: "Hapus",
                denyButtonText: "Jangan Hapus!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById(`deleteForm-${id}`).submit();
                }
            });
        }
    </script>

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
</body>

</html>
