<x-app-layout>
    {{-- <x-slot name="header">
    </x-slot> --}}

    <div class="py-12">
        <div class="max-w-5xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li class="py-5 bg-red-700 text-white font-bold">{{ $error }}</li>
                        @endforeach
                    </div>
                @endif

                <form action="{{ route('admin.documentation_photos.store', $documentation) }}" enctype="multipart/form-data"
                    method="POST">
                    @csrf
                    <div class="flex flex-col gap-y-5">
                        <h1 class="text-3xl text-indigo-950 font-bold">Add Photos</h1>

                        <div class="flex flex-row items-center gap-x-5">
                            <img src="{{ Storage::url($documentation->cover) }}" alt=""
                                class="object-cover w-[120px] h-[90px] rounded-2xl">
                            <div class="flex flex-col gap-y-1">
                                <h3 class="font-bold text-xl">
                                    {{ $documentation->judul }}
                                </h3>
                            </div>
                        </div>

                        <div class="flex flex-col gap-y-2 mb-4">
                            <h3>
                                Photos
                            </h3>
                            <input type="file" name="photo" id="photo">
                        </div>

                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">Add
                            Photos</button>
                    </div>
                </form>

                <hr class="my-10">

                <h3 class="text-xl text-indigo-950 font-bold">
                    Existing Photos
                </h3>
                <div class="flex flex-col gap-y-5">

                    @forelse ($documentation->photos as $photo)
                        {{-- melakukan foreach data dari table --}}
                        <div class="item-tool flex flex-row items-center justify-between">

                            <div class="flex flex-row items-center gap-x-5">
                                <img src="{{ Storage::url($photo->photo) }}" alt=""
                                    class="object-cover w-[120px] h-[90px] rounded-2xl">
                            </div>

                            <div class="flex flex-row items-center gap-x-2">

                                <form action="{{ route('admin.documentation_photos.destroy', $photo->id) }}"
                                    method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="py-3 px-5 rounded-full bg-red-500 text-white">
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </div>
                    @empty
                        <p>
                            Data Belum Tersedia
                        </p>
                    @endforelse

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
