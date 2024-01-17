<div class="overflow-x-auto p-5">
    <table id="table" class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
        <thead>
            <tr>
                <th
                    class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-200 uppercase tracking-wider w-1/12">
                    No.
                </th>
                <th
                    class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                    Nama Sub Kategori
                </th>
                <th
                    class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                    Thumbnail Kategori
                </th>
                <th
                    class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                    Termasuk Kategori
                </th>
                <th
                    class="px-6 py-3 border-b border-gray-200 dark:border-gray-700 text-left text-xs font-semibold text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                    Aksi
                </th>
            </tr>
        </thead>
        <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
            @foreach ($subcategories as $subcategory)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                        {{ $loop->iteration }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                        {{ $subcategory->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                        <img src="{{ url('/storage/upload/subcategory/' . $subcategory->image) }}"
                            alt="{{ $subcategory->name }}" class="w-20 h-20 object-cover">
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                        {{ $subcategory->category->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                        <a href="{{ route('subcategory.edit', $subcategory->id) }}"
                            class="text-indigo-600 hover:text-indigo-900">
                            <i class="fas fa-edit mr-2"></i>
                        </a>
                        <form id="deleteForm" action="{{ route('subcategory.destroy', $subcategory->id) }}"
                            method="POST" class="inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="text-red-600 hover:text-red-900" onclick="deleteData()">
                                <i class="fas fa-trash-alt mr-2"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $subcategories->links() }}
</div>
