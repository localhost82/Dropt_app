<a tabindex="-1" id="about"></a>
<div class="mt-28">
    <div data-aos="flip-down" class="text-center max-w-screen-md mx-auto">
        <h1 class="text-3xl font-bold mb-4">What is<span class="text-green-500"> Dropt?</span></h1>
        <p class="text-gray-500">Dropt is an online platform that connects local businesses with surplus
            food to people who can use it. Users can look up the available food in their area, and receive notifications
            when new food becomes available.
            This helps to reduce food waste and support those in need.</p>
        <a href="{{ route('about') }}" class="underline">Learn More</a>
    </div>
    <div data-aos="fade-up"
         class="flex flex-col md:flex-row justify-center space-y-5 md:space-y-0 md:space-x-6 lg:space-x-10 mt-7">
        <div class="relative md:w-5/12">
            <img class="rounded-2xl" src="{{asset('images/business-owner.png')}}" alt="">
            <div class="absolute bg-black bg-opacity-30 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">
                        FOR BUSINESSES </h1>
                    <a href="{{ route('register') }}">
                        <button
                            class="rounded-full text-white border text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out">
                            Register your business now
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="relative md:w-5/12">
            <img class="rounded-2xl" src="{{asset('images/side-view-man-receiving-groceries.jpg')}}" alt="">
            <div class="absolute bg-black bg-opacity-20 bottom-0 left-0 right-0 w-full h-full rounded-2xl">
                <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <h1 class="uppercase text-white font-bold text-center text-sm lg:text-xl mb-3">FOR USERS</h1>

                    <a href="{{ route('news') }}">
                        <button
                            class="rounded-full text-white text-xs lg:text-md px-6 py-3 w-full font-medium focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out"
                            style="background: rgba(22,114,78,0.75)">Check out available food
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
