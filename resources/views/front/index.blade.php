@extends('front/layouts/app')
@extends('front/layouts/header')
@section('title', 'SWIPE')
@section('content')


    <!-- Hero Section -->
    <div class="bg-cover bg-no-repeat bg-center h-screen mb-6 text-center"
        style="background-image: url('assets/image/home-bg.jpg')">
        <div class="p-10">
            <h1 class="font-bold text-2xl text-slate-800 tracking-widest mb-6 mt-44">SWIPE HENTAKAH HIJRAH</h1>
            <h1 class="font-bold text-4xl text-slate-800"><span class="font-medium">Remaja </span>Masjid Darussalam
                <span class="font-medium"> <br>Kota Wisata</span>
            </h1>
        </div>
        <div class="">
            <html class="scroll-smooth">
            <a href="#about"
                class="font-bold py-4 px-12 border-4 border-slate-800 hover:border-yellow-500 hover:bg-yellow-500 hover:text-white transition-all">Tentang
                Kami</a>

            </html>
        </div>
    </div>

    <!-- About Section -->
    <div class="container mx-auto p-10">
        <section id="about">
        </section>
        <h1 class="font-bold text-6xl text-slate-800 text-center mt-6 mb-6">TENTANG KAMI</h1>
        <div class="flex flex-col lg:flex-row gap-3">
            <div class="w-full lg:w-1/2 rounded-2xl p-5">
                <div class="bg-yellow-400 rounded-full px-6 py-6 w-max mb-3 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10">
                        <path fill-rule="evenodd"
                            d="M9 4.5a.75.75 0 0 1 .721.544l.813 2.846a3.75 3.75 0 0 0 2.576 2.576l2.846.813a.75.75 0 0 1 0 1.442l-2.846.813a3.75 3.75 0 0 0-2.576 2.576l-.813 2.846a.75.75 0 0 1-1.442 0l-.813-2.846a3.75 3.75 0 0 0-2.576-2.576l-2.846-.813a.75.75 0 0 1 0-1.442l2.846-.813A3.75 3.75 0 0 0 7.466 7.89l.813-2.846A.75.75 0 0 1 9 4.5ZM18 1.5a.75.75 0 0 1 .728.568l.258 1.036c.236.94.97 1.674 1.91 1.91l1.036.258a.75.75 0 0 1 0 1.456l-1.036.258c-.94.236-1.674.97-1.91 1.91l-.258 1.036a.75.75 0 0 1-1.456 0l-.258-1.036a2.625 2.625 0 0 0-1.91-1.91l-1.036-.258a.75.75 0 0 1 0-1.456l1.036-.258a2.625 2.625 0 0 0 1.91-1.91l.258-1.036A.75.75 0 0 1 18 1.5ZM16.5 15a.75.75 0 0 1 .712.513l.394 1.183c.15.447.5.799.948.948l1.183.395a.75.75 0 0 1 0 1.422l-1.183.395c-.447.15-.799.5-.948.948l-.395 1.183a.75.75 0 0 1-1.422 0l-.395-1.183a1.5 1.5 0 0 0-.948-.948l-1.183-.395a.75.75 0 0 1 0-1.422l1.183-.395c.447-.15.799-.5.948-.948l.395-1.183A.75.75 0 0 1 16.5 15Z"
                            clip-rule="evenodd" />
                    </svg>
                </div>
                <h1 class="font-bold text-2xl text-slate-700">Membawa Kebermanfaatan</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo natus minima eaque odio delectus
                    necessitatibus earum repudiandae reprehenderit voluptas eum.</p>
            </div>
            <div class="w-full lg:w-1/2 rounded-2xl gap-2 p-5">
                <div class="bg-yellow-400 rounded-full px-6 py-6 w-max mb-3 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10">
                        <path
                            d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg>
                </div>
                <h1 class="font-bold text-2xl text-slate-700">Sosial Kemanusiaan</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo natus minima eaque odio delectus
                    necessitatibus earum repudiandae reprehenderit voluptas eum.</p>
            </div>
            <div class="w-full lg:w-1/2 rounded-2xl gap-2 p-5">
                <div class="bg-yellow-400 rounded-full px-6 py-6 w-max mb-3 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10">
                        <path
                            d="M4.913 2.658c2.075-.27 4.19-.408 6.337-.408 2.147 0 4.262.139 6.337.408 1.922.25 3.291 1.861 3.405 3.727a4.403 4.403 0 0 0-1.032-.211 50.89 50.89 0 0 0-8.42 0c-2.358.196-4.04 2.19-4.04 4.434v4.286a4.47 4.47 0 0 0 2.433 3.984L7.28 21.53A.75.75 0 0 1 6 21v-4.03a48.527 48.527 0 0 1-1.087-.128C2.905 16.58 1.5 14.833 1.5 12.862V6.638c0-1.97 1.405-3.718 3.413-3.979Z" />
                        <path
                            d="M15.75 7.5c-1.376 0-2.739.057-4.086.169C10.124 7.797 9 9.103 9 10.609v4.285c0 1.507 1.128 2.814 2.67 2.94 1.243.102 2.5.157 3.768.165l2.782 2.781a.75.75 0 0 0 1.28-.53v-2.39l.33-.026c1.542-.125 2.67-1.433 2.67-2.94v-4.286c0-1.505-1.125-2.811-2.664-2.94A49.392 49.392 0 0 0 15.75 7.5Z" />
                    </svg>
                </div>
                <h1 class="font-bold text-2xl text-slate-700">Dakwah Kreatif</h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Nemo natus minima eaque odio delectus
                    necessitatibus earum repudiandae reprehenderit voluptas eum.</p>
            </div>
        </div>

    </div>

    <!-- Documentation Section -->
    <div class=" bg-gray-100 p-10">
        <div>
            <h1 class="font-bold text-6xl text-slate-800 text-center my-7">DOKUMENTASI</h1>
        </div>

        <div class="bg-white">


            <div class="flex flex-wrap md:grid lg:grid gap-1 p-5 grid-cols-4">
                @forelse ($documentations as $documentation)
                    <div class="hover:shadow-lg hover:bg-yellow-400 transition-all bg-white p-3">
                        <button>
                            <img src="{{ Storage::url($documentation->cover) }}" alt="" class="w-full">
                            <a href="{{ route('front.dokumentasi.details', $documentation) }}" class="overlay">
                                <h1 class="font-bold text-xl text-left">{{ $documentation->judul }}<span
                                        class="font-medium text-xs text-gray-700"> Tgl </span></h1>
                            </a>
                            <p class="text-left text-gray-600">{{ Str::limit($documentation ['konten'],100) }}</p>
                        </button>
                    </div>
                @empty
                @endforelse
            </div>


            <div class="flex justify-center">
                <a href="{{ route('front.dokumentasi') }}"
                    class="font-bold py-4 px-12 border-4 border-slate-800 hover:border-yellow-500 hover:bg-yellow-500 hover:text-white transition-all text-center w-fit mb-8">Lihat
                    Selengkapnya</a>
            </div>
        </div>
    </div>



    <!-- Article Section -->
    <div class="p-10">
        <div>
            <h1 class="font-bold text-6xl text-slate-800 my-7 text-left ml-10">ARTIKEL
            </h1>
            <div class="flex flex-column flex-wrap md:flex-row">
                <div class="w-full md:w-1/2 bg-gray-50 flex justify-center items-center">
                    <div class="flex flex-wrap md:grid grid-cols-3 gap-3 p-5">
                        <div class="bg-white p-2">
                            <img src="{{ asset('/images/images/dok-1.jpg') }}" alt="">
                            <a href="" class="hover:bg-yellow-400 font-bold hover:shadow-lg">Judul</a>
                            <p class="text-left text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Neque, unde!</p>
                        </div>
                        <div class="bg-white p-2">
                            <img src="{{ asset('/images/images/dok-3.jpg') }}" alt="">
                            <a href="" class="hover:bg-yellow-400 font-bold hover:shadow-lg">Judul</a>
                            <p class="text-left text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Neque, unde!</p>
                        </div>
                        <div class="bg-white p-2">
                            <img src="{{ asset('/images/images/dok-3.jpg') }}" alt="">
                            <a href="" class="hover:bg-yellow-400 font-bold hover:shadow-lg">Judul</a>
                            <p class="text-left text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Neque, unde!</p>
                        </div>
                        <div class="bg-white p-2">
                            <img src="{{ asset('/images/images/dok-1.jpg') }}" alt="">
                            <a href="" class="hover:bg-yellow-400 font-bold hover:shadow-lg">Judul</a>
                            <p class="text-left text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Neque, unde!</p>
                        </div>
                        <div class="bg-white p-2">
                            <img src="{{ asset('/images/images/dok-3.jpg') }}" alt="">
                            <a href="" class="hover:bg-yellow-400 font-bold hover:shadow-lg">Judul</a>
                            <p class="text-left text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Neque, unde!</p>
                        </div>
                        <div class="bg-white p-2">
                            <img src="{{ asset('/images/images/dok-3.jpg') }}" alt="">
                            <a href="" class="hover:bg-yellow-400 font-bold hover:shadow-lg">Judul</a>
                            <p class="text-left text-gray-600 text-sm">Lorem ipsum dolor sit amet consectetur
                                adipisicing elit.
                                Neque, unde!</p>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 bg-white flex justify-center items-center">
                    <div class="instagram-media" data-instgrm-captioned
                        data-instgrm-permalink="https://www.instagram.com/p/CtsGmmBS0FJ/?utm_source=ig_embed&amp;utm_campaign=loading"
                        data-instgrm-version="14"
                        style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:540px; min-width:326px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);">
                        <div style="padding:16px;"> <a
                                href="https://www.instagram.com/p/CtsGmmBS0FJ/?utm_source=ig_embed&amp;utm_campaign=loading"
                                style=" background:#FFFFFF; line-height:0; padding:0 0; text-align:center; text-decoration:none; width:100%;"
                                target="_blank">
                                <div style=" display: flex; flex-direction: row; align-items: center;">
                                    <div
                                        style="background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 40px; margin-right: 14px; width: 40px;">
                                    </div>
                                    <div
                                        style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 100px;">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 60px;">
                                        </div>
                                    </div>
                                </div>
                                <div style="padding: 19% 0;"></div>
                                <div style="display:block; height:50px; margin:0 auto 12px; width:50px;"><svg
                                        width="50px" height="50px" viewBox="0 0 60 60" version="1.1"
                                        xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <g transform="translate(-511.000000, -20.000000)" fill="#000000">
                                                <g>
                                                    <path
                                                        d="M556.869,30.41 C554.814,30.41 553.148,32.076 553.148,34.131 C553.148,36.186 554.814,37.852 556.869,37.852 C558.924,37.852 560.59,36.186 560.59,34.131 C560.59,32.076 558.924,30.41 556.869,30.41 M541,60.657 C535.114,60.657 530.342,55.887 530.342,50 C530.342,44.114 535.114,39.342 541,39.342 C546.887,39.342 551.658,44.114 551.658,50 C551.658,55.887 546.887,60.657 541,60.657 M541,33.886 C532.1,33.886 524.886,41.1 524.886,50 C524.886,58.899 532.1,66.113 541,66.113 C549.9,66.113 557.115,58.899 557.115,50 C557.115,41.1 549.9,33.886 541,33.886 M565.378,62.101 C565.244,65.022 564.756,66.606 564.346,67.663 C563.803,69.06 563.154,70.057 562.106,71.106 C561.058,72.155 560.06,72.803 558.662,73.347 C557.607,73.757 556.021,74.244 553.102,74.378 C549.944,74.521 548.997,74.552 541,74.552 C533.003,74.552 532.056,74.521 528.898,74.378 C525.979,74.244 524.393,73.757 523.338,73.347 C521.94,72.803 520.942,72.155 519.894,71.106 C518.846,70.057 518.197,69.06 517.654,67.663 C517.244,66.606 516.755,65.022 516.623,62.101 C516.479,58.943 516.448,57.996 516.448,50 C516.448,42.003 516.479,41.056 516.623,37.899 C516.755,34.978 517.244,33.391 517.654,32.338 C518.197,30.938 518.846,29.942 519.894,28.894 C520.942,27.846 521.94,27.196 523.338,26.654 C524.393,26.244 525.979,25.756 528.898,25.623 C532.057,25.479 533.004,25.448 541,25.448 C548.997,25.448 549.943,25.479 553.102,25.623 C556.021,25.756 557.607,26.244 558.662,26.654 C560.06,27.196 561.058,27.846 562.106,28.894 C563.154,29.942 563.803,30.938 564.346,32.338 C564.756,33.391 565.244,34.978 565.378,37.899 C565.522,41.056 565.552,42.003 565.552,50 C565.552,57.996 565.522,58.943 565.378,62.101 M570.82,37.631 C570.674,34.438 570.167,32.258 569.425,30.349 C568.659,28.377 567.633,26.702 565.965,25.035 C564.297,23.368 562.623,22.342 560.652,21.575 C558.743,20.834 556.562,20.326 553.369,20.18 C550.169,20.033 549.148,20 541,20 C532.853,20 531.831,20.033 528.631,20.18 C525.438,20.326 523.257,20.834 521.349,21.575 C519.376,22.342 517.703,23.368 516.035,25.035 C514.368,26.702 513.342,28.377 512.574,30.349 C511.834,32.258 511.326,34.438 511.181,37.631 C511.035,40.831 511,41.851 511,50 C511,58.147 511.035,59.17 511.181,62.369 C511.326,65.562 511.834,67.743 512.574,69.651 C513.342,71.625 514.368,73.296 516.035,74.965 C517.703,76.634 519.376,77.658 521.349,78.425 C523.257,79.167 525.438,79.673 528.631,79.82 C531.831,79.965 532.853,80.001 541,80.001 C549.148,80.001 550.169,79.965 553.369,79.82 C556.562,79.673 558.743,79.167 560.652,78.425 C562.623,77.658 564.297,76.634 565.965,74.965 C567.633,73.296 568.659,71.625 569.425,69.651 C570.167,67.743 570.674,65.562 570.82,62.369 C570.966,59.17 571,58.147 571,50 C571,41.851 570.966,40.831 570.82,37.631">
                                                    </path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg></div>
                                <div style="padding-top: 8px;">
                                    <div
                                        style=" color:#3897f0; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:550; line-height:18px;">
                                        View this post on Instagram</div>
                                </div>
                                <div style="padding: 12.5% 0;"></div>
                                <div style="display: flex; flex-direction: row; margin-bottom: 14px; align-items: center;">
                                    <div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(0px) translateY(7px);">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; height: 12.5px; transform: rotate(-45deg) translateX(3px) translateY(1px); width: 12.5px; flex-grow: 0; margin-right: 14px; margin-left: 2px;">
                                        </div>
                                        <div
                                            style="background-color: #F4F4F4; border-radius: 50%; height: 12.5px; width: 12.5px; transform: translateX(9px) translateY(-18px);">
                                        </div>
                                    </div>
                                    <div style="margin-left: 8px;">
                                        <div
                                            style=" background-color: #F4F4F4; border-radius: 50%; flex-grow: 0; height: 20px; width: 20px;">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 2px solid transparent; border-left: 6px solid #f4f4f4; border-bottom: 2px solid transparent; transform: translateX(16px) translateY(-4px) rotate(30deg)">
                                        </div>
                                    </div>
                                    <div style="margin-left: auto;">
                                        <div
                                            style=" width: 0px; border-top: 8px solid #F4F4F4; border-right: 8px solid transparent; transform: translateY(16px);">
                                        </div>
                                        <div
                                            style=" background-color: #F4F4F4; flex-grow: 0; height: 12px; width: 16px; transform: translateY(-4px);">
                                        </div>
                                        <div
                                            style=" width: 0; height: 0; border-top: 8px solid #F4F4F4; border-left: 8px solid transparent; transform: translateY(-4px) translateX(8px);">
                                        </div>
                                    </div>
                                </div>
                                <div
                                    style="display: flex; flex-direction: column; flex-grow: 1; justify-content: center; margin-bottom: 24px;">
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; margin-bottom: 6px; width: 224px;">
                                    </div>
                                    <div
                                        style=" background-color: #F4F4F4; border-radius: 4px; flex-grow: 0; height: 14px; width: 144px;">
                                    </div>
                                </div>
                            </a>
                            <p
                                style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div class="bg-gray-100 p-10">
        <div>
            <h1 class="font-bold text-6xl text-center my-7">HUBUNGI KAMI</h1>
        </div>
        <div class="flex flex-wrap justify-between md:justify-center md:gap-16 mb-7">
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 mb-3">
                    <path d="M1.5 8.67v8.58a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3V8.67l-8.928 5.493a3 3 0 0 1-3.144 0L1.5 8.67Z" />
                    <path
                        d="M22.5 6.908V6.75a3 3 0 0 0-3-3h-15a3 3 0 0 0-3 3v.158l9.714 5.978a1.5 1.5 0 0 0 1.572 0L22.5 6.908Z" />
                </svg>
                <h1 class="font-semibold">infoswipe@gmail.com</h1>
            </div>
            <div class="flex flex-col items-center">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-10 mb-3">
                    <path fill-rule="evenodd"
                        d="m11.54 22.351.07.04.028.016a.76.76 0 0 0 .723 0l.028-.015.071-.041a16.975 16.975 0 0 0 1.144-.742 19.58 19.58 0 0 0 2.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 0 0-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 0 0 2.682 2.282 16.975 16.975 0 0 0 1.145.742ZM12 13.5a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"
                        clip-rule="evenodd" />
                </svg>
                <h1 class="font-semibold">Jl Wisata Utama No.1</h1>
            </div>
        </div>

        <!-- Input Text -->
        <div class="md:mx-auto lg:px-80">
            <div class="m-5">
                <input type="text" placeholder="Name"
                    class="py-3 px-3 border active:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-500 w-full">
            </div>
            <div class="m-5">
                <input type="email" placeholder="Email"
                    class="py-3 px-3 border active:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-500 w-full">
            </div>
            <div class="m-5">
                <textarea name="message" id="" placeholder="Message"
                    class="py-3 px-3 border active:bg-gray-100 focus:outline-none focus:ring focus:ring-gray-500 w-full"
                    rows="7"></textarea>
            </div>
            <div class="m-5">
                <input name="submit" type="submit" value="SEND EMAIL"
                    class="py-3 px-3 border active:bg-gray-100 text-gray-400 hover:border-yellow-500 hover:bg-yellow-500 hover:text-white w-full">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="p-5">
        <div class="border-t lg:flex lg:justify-between items-baseline py-5">
            <img class="py-3" src="assets/image/swipe.png" alt="logo-swipe">
            <p class="flex text-primary-gray-500">Dibuat dengan<span><svg xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24" fill="currentColor" class="size-6 text-red-500">
                        <path
                            d="m11.645 20.91-.007-.003-.022-.012a15.247 15.247 0 0 1-.383-.218 25.18 25.18 0 0 1-4.244-3.17C4.688 15.36 2.25 12.174 2.25 8.25 2.25 5.322 4.714 3 7.688 3A5.5 5.5 0 0 1 12 5.052 5.5 5.5 0 0 1 16.313 3c2.973 0 5.437 2.322 5.437 5.25 0 3.925-2.438 7.111-4.739 9.256a25.175 25.175 0 0 1-4.244 3.17 15.247 15.247 0 0 1-.383.219l-.022.012-.007.004-.003.001a.752.752 0 0 1-.704 0l-.003-.001Z" />
                    </svg> </span> Oleh PrayPangestu</p>
        </div>
    </div>

@endsection
