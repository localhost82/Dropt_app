<footer class="mt-32" style="background-color: #064e3b;">
    <div class="max-w-lg mx-auto">
        <div class="flex py-12 justify-center text-white items-center px-10 sm:px-10">
            <div class="relative">
                <a href="/" >
                    <img src="{{asset('images/dropt_logo_white.png')}}" style="height: 44px">
                </a>
{{--                <h1 class="font-bold text-xl pr-5 relative z-50">Dropt</h1>--}}
{{--                <svg class="w-11 h-11 absolute -top-2 -left-3 z-40" viewBox="0 0 79 79" fill="none"--}}
{{--                     xmlns="http://www.w3.org/2000/svg">--}}
{{--                    <path--}}
{{--                        d="M35.9645 2.94975C37.9171 0.997129 41.0829 0.997127 43.0355 2.94975L76.0502 35.9645C78.0029 37.9171 78.0029 41.0829 76.0503 43.0355L43.0355 76.0502C41.0829 78.0029 37.9171 78.0029 35.9645 76.0503L2.94975 43.0355C0.997129 41.0829 0.997127 37.9171 2.94975 35.9645L35.9645 2.94975Z"--}}
{{--                        stroke="#26C1F2" stroke-width="2"/>--}}
{{--                </svg>--}}
            </div>
            <span class="border-l border-gray-500 text-sm pl-4 py-2 font-semibold">Save food, save money, save the planet</span>
        </div>

        <livewire:newsletter-subscribe />

        <div class="flex items-center text-gray-400 text-sm justify-center">
            <a href="{{ url('/about') }}" class="pr-3">About</a>
            <a href="{{ url('/privacy') }}" class="border-l border-gray-400 px-3">Privacy</a>
            <a href="{{ url('/terms') }}" class="border-l border-gray-400 pl-3">Terms & Conditions</a>
        </div>
        <div class="text-center text-white py-3">
            <p class="my-3 text-gray-400 text-sm">&copy; 2023 Arina Inc. </p>
        </div>
    </div>
</footer>
