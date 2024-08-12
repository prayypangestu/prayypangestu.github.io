<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dokumentasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10 flex flex-col">
                <a href="{{ route('admin.documentations.create') }}"
                    class="w-fit py-4 px-10 text-white font-bold bg-indigo-950 rounded-full">
                    Add New Documentations
                </a>
                <hr class="my-10">
                {{ $documentations->links() }}
                <div class="flex flex-col gap-y-5 my-4">

                    @forelse ($documentations as $documentation)
                        <div class="item-project flex flex-row items-center justify-between">
                            <div class="flex flex-row items-center gap-x-5">
                                <img src="{{ Storage::url($documentation->cover) }}" alt=""
                                    class="object-cover w-[120px] h-[90px] rounded-2xl">

                                <div class="flex flex-col gap-y-1">
                                    <h3 class="font-bold text-xl">
                                        {{ $documentation->judul }}
                                    </h3>
                                </div>
                            </div>

                            <div class="flex flex-row items-center gap-x-2">
                                <a href="{{ route('admin.documentation_photos.create', $documentation) }}"
                                    class="py-4 px-10 rounded-full bg-indigo-950 text-white">
                                    Add Photos
                                </a>
                            </div>

                            <div class="flex flex-row items-center gap-x-2">
                                <a href="{{ route('admin.documentations.edit', $documentation) }}"
                                    class="py-4 px-10 rounded-full bg-indigo-600 text-white">
                                    Edit
                                </a>
                                <form action="{{ route('admin.documentations.destroy', $documentation) }}" onsubmit="return confirm('Yakin akan hapus data?')"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-4 px-10 rounded-full bg-red-500 text-white" id="delete">
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