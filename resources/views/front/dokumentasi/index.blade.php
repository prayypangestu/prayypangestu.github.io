@extends('front/layouts/app')
@extends('front/layouts/header')
@section('title', 'Dokumetasi')
@section('content')

    <!-- Documentation Section -->
    <div class=" bg-gray-100 p-10">
        <div>
            <h1 class="font-bold text-6xl text-slate-800 text-center my-7">DOKUMENTASI</h1>
        </div>
        {{ $documentationpages->links() }}
        <div class="bg-white">

            <div class="flex flex-wrap md:grid lg:grid gap-1 p-5 grid-cols-4">
                @forelse ($documentationpages as $documentation)
                    <div class="hover:shadow-lg hover:bg-yellow-400 transition-all bg-white p-3">
                        <button>
                            <img src="{{ Storage::url($documentation->cover) }}" alt="" class="w-full">
                            <a href="{{ route('front.dokumentasi.details', $documentation) }}" class="overlay">
                                <h1 class="font-bold text-xl text-left">{{ $documentation->judul }}<span
                                        class="font-medium text-xs text-gray-700"> Tgl </span></h1>
                            </a>
                            <p class="text-left text-gray-600">{{ Str::limit($documentation['konten'], 100) }}</p>
                        </button>
                    </div>
                @empty
                @endforelse
            </div>
        </div>

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
