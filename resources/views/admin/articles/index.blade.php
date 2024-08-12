<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Artikel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col">
                <a href="{{ route('admin.articles.create') }}"
                    class="w-fit py-4 px-10 text-white font-bold bg-indigo-950 rounded-full">
                    Add New Articles
                </a>
                <hr class="my-10">
                <div class="flex flex-col gap-y-5 my-4">

                        <div class="item-project flex flex-row items-center justify-between">
                            <div class="flex flex-row items-center gap-x-5">
                                <img src="" alt=""
                                    class="object-cover w-[120px] h-[90px] rounded-2xl">

                                <div class="flex flex-col gap-y-1">
                                    <h3 class="font-bold text-xl">
                                        
                                    </h3>
                                </div>
                            </div>

                            <div class="flex flex-row items-center gap-x-2">
                                <a href=""
                                    class="py-4 px-10 rounded-full bg-indigo-950 text-white">
                                    Add Photos
                                </a>
                            </div>

                            <div class="flex flex-row items-center gap-x-2">
                                <a href=""
                                    class="py-4 px-10 rounded-full bg-indigo-600 text-white">
                                    Edit
                                </a>
                                <form action="" onsubmit="return confirm('Yakin akan hapus data?')"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-4 px-10 rounded-full bg-red-500 text-white" id="delete">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>