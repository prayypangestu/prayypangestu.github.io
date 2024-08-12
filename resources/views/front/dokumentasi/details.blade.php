@extends('front/layouts/app')
@extends('front/layouts/header')
@section('title', 'Dokumetasi')
@section('content')

    <div class="container mx-auto mb-2">
        <a href="{{ route('front.dokumentasi') }}"
            class="bg-gray-100 p-2 font-mediuum hover:bg-yellow-400 hover:text-gray-700 hover:font-semibold text-gray-400">
            << Kembali</a>
    </div>

    <div class="container bg-gray-100 mx-auto mb-10 p-5">
        <div class="justify-center">
            <img class="w-full" src="{{ Storage::url($documentation->cover) }}" alt="">
        </div>
        <div class="pl-3">
            <h1 class="font-bold text-2xl mt-4 md:text-3xl">{{ $documentation->judul }}</h1>
        </div>
        <div class="pl-3">
            <p class="text-left font-base text-lg text-gray-700 mt-4 leading-6">{{ $documentation->konten }}</p>
        </div>
    </div>

    <div class="container mx-auto grid grid-cols-4 gap-4">
        @forelse ($documentation->photos as $photo)
            <div>
                <img src="{{ Storage::url($photo->photo) }}" alt="">
            </div>
        @empty
            <p>
                Data Belum Tersedia
            </p>
        @endforelse
    </div>


    <!-- Footer -->
    <div class="p-5">
        <div class="border-t lg:flex lg:justify-between items-baseline py-5">
            <img class="py-3" src="{{ asset('images/image/swipe.png') }}" alt="logo-swipe">
            <p class="flex text-primary-gray-500">Dibuat dengan<span><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-500">
                        <path
                            d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg> </span> Oleh PrayPangestuu</p>
        </div>
    </div>


@endsection
