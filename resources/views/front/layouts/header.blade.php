<!-- navigation section -->
<header>
    <div class="container mx-auto p-5">
        <div class="hidden lg:flex lg:justify-between md:flex md:justify-between w-full">
            <button>
                <a href="{{ route('front.index') }}"><img src="{{ asset('images/image/swipe.png') }}" alt="swipe-logo"></a>
            </button>
            <ul class="hidden lg:flex md:flex text-gray-500 font-semibold">
                <li class="hover:bg-yellow-400 px-4 py-3 transition duration-700 ease-in-out">
                    <a href="">PROFIL</a>
                </li>
                <li class="hover:bg-yellow-400 px-4 py-3 transition duration-700 ease-in-out">
                    <a href="{{ route('front.dokumentasi') }}">DOKUMENTASI</a>
                </li>
                <li class="hover:bg-yellow-400 px-4 py-3 transition duration-700 ease-in-out">
                    <a href="">ARTIKEL</a>
                </li>
            </ul>

        </div>
    </div>
    <div class="w-full text-center flex justify-center items-center mb-5 lg:hidden md:hidden">
        <button>
            <a href="{{ route('front.index') }}"><img src="{{ asset('images/image/swipe.png') }}" alt="swipe-logo"></a>
        </button>
    </div>
    <ul class="text-gray-500 font-semibold text-center flex justify-center mb-4 md:hidden">
        <li class="hover:bg-yellow-400 px-4 py-3 transition duration-700 ease-in-out">
            <a href="">PROFIL</a>
        </li>
        <li class="hover:bg-yellow-400 px-4 py-3 transition duration-700 ease-in-out">
            <a href="{{ route('front.dokumentasi') }}">DOKUMENTASI</a>
        </li>
        <li class="hover:bg-yellow-400 px-4 py-3 transition duration-700 ease-in-out">
            <a href="">ARTIKEL</a>
        </li>
    </ul>


    <!-- <div class="bg-yellow-400 rounded-md content-center lg:hidden md:hidden px-1 py-1">
               <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-7">
                   <path fill-rule="evenodd"
                       d="M3 5.25a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 5.25Zm0 4.5A.75.75 0 0 1 3.75 9h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9.75Zm0 4.5a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Zm0 4.5a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z"
                       clip-rule="evenodd" />
               </svg>
           </div>
       </nav> -->
</header>