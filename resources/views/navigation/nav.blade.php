<nav :class="{ 'transform md:transform-none': !open, 'h-full': open }"
     class="h-0 md:h-auto flex flex-col flex-grow md:items-center pb-4 md:pb-0 md:flex md:justify-end md:flex-row origin-top duration-300 scale-y-0">
    <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
       href="/">Home</a>
    <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
       href="/#latest-news">Available food</a>
    <a class="px-4 py-2 mt-2 text-sm bg-transparent rounded-lg md:mt-8 md:ml-4 hover:text-gray-900 focus:outline-none focus:shadow-outline"
       href="/#about">About Us</a>

    @if (Route::has('login'))
        @auth
            <a href="{{ url('/dashboard') }}" class="px-10 py-3 mt-2 text-sm text-center bg-yellow-500 text-white rounded-full md:mt-8 md:ml-4 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
            <a href="{{ route('login') }}" class="px-10 py-3 mt-2 text-sm text-center bg-yellow-500 text-white rounded-full md:mt-8 md:ml-4 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="px-10 py-3 mt-2 text-sm text-center bg-yellow-500 text-white rounded-full md:mt-8 md:ml-4 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
            @endif
        @endauth
    @endif


</nav>

