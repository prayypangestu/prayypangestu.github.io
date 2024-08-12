<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Categories') }}
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

                <form action="{{ route('admin.categories.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <div class="flex flex-col gap-y-5 mb-2">
                        <h1 class="text-3xl text-slate-800 font-bold">
                            Add New Categories
                        </h1>
                        <div class="flex flex-col gap-y-2 mb-2">
                            <h3>Kategori</h3>
                            <input type="text" id="nama" name="nama">
                        </div>
                    </div>

                    <div class="flex flex-col gap-y-2">
                        <button type="submit" class="py-4 w-full rounded-full bg-violet-700 font-bold text-white">
                            Upload Kategori
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
