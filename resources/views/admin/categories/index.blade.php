<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Kategori Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col">
                <a href="{{ route('admin.categories.create') }}"
                    class="w-fit py-4 px-10 text-white font-bold bg-indigo-950 rounded-full">
                    Add New Categories
                </a>
                <hr class="my-10">
                <div class="flex flex-col gap-y-5 my-4">

                    @forelse ($categories as $category)
                        <div class="item-project flex flex-row items-center justify-between">
                            <div class="flex flex-row items-center gap-x-5">

                                <div class="flex flex-col gap-y-1">
                                    <h3 class="font-bold text-xl">
                                        {{ $category->nama }}
                                    </h3>
                                </div>
                            </div>

                            <div class="flex flex-row items-center gap-x-2">
                                <form action="{{ route('admin.categories.destroy', $category) }}" onsubmit="return confirm('Yakin akan hapus data?')" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-4 px-10 rounded-full bg-red-500 text-white"
                                        id="delete">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>
                            Data Belum Tersedia!
                        </p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
