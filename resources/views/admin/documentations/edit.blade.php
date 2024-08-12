<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Documentations') }}
        </h2>
    </x-slot>

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

                <form action="{{ route('admin.documentations.update', $documentation) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="flex flex-col gap-y-5 mb-2">
                        <h1 class="text-3xl text-slate-800 font-bold">
                            Add New Documentations
                        </h1>
                        <div class="flex flex-col gap-y-2 mb-2">
                            <h3>Judul</h3>
                            <input value="{{ $documentation->judul }}" type="text" id="judul" name="judul">
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-2 mb-4">
                        <h3>
                            Cover Image
                        </h3>
                        <img src="{{ Storage::url($documentation->cover) }}"
                            alt="" class="object-cover w-[120px] h-[90px] rounded-2xl">
                        <input type="file" name="cover" id="cover">
                    </div>

                    <div class="flex flex-col gap-y-2">
                        <h3>
                            Konten
                        </h3>
                        <textarea name="konten" id="konten" cols="30" rows="10">{{ $documentation->konten }}</textarea>
                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">
                            Update
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
