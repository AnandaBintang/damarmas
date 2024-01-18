<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Produk') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 my-3">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                @include('product._partials.table')
            </div>
        </div>
        <div class="max-w-xl mx-auto sm:px-6 lg:px-8 my-3">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <a href="{{ route('product.create') }}"
                    class="bg-blue-300 hover:bg-blue-400 text-gray-800 font-bold py-2 px-4 rounded block text-center">
                    <i class="fa-solid fa-plus"></i>
                    <span>Tambah Produk</span>
                </a>
            </div>
        </div>
    </div>
</x-app-layout>
