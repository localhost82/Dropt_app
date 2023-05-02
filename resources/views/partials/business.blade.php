<a tabindex="-1" id="business"></a>
<div class="mt-24 flex flex-col-reverse md:flex-row items-start md:space-x-10">
    <div data-aos="zoom-in-right" class="md:w-5/12">
        <div class="flex items-center space-x-20 mb-5">
            <span class="border border-gray-300 w-14 absolute"></span>
            <h1 class="text-gray-400 tracking-widest text-sm">BUSINESS</h1>
        </div>
        <h1 class="font-semibold text-darken text-2xl lg:pr-40">Why join us?</h1>

        <p class="text-gray-500 my-5">Reduce food waste and associated <b>costs</b>, as businesses can notify the
            platform when they have surplus food that they are unable to sell.</p>
        <p class="text-gray-500 my-5">Build positive <b>relationships</b> with the local community,
            by actively contributing to efforts to combat food insecurity and reduce food waste.</p>
        <p class="text-gray-500 my-5">Receive <b>tax deductions</b> for your food donations, which can help to reduce
            your overall tax burden. This can be particularly beneficial for small businesses that may be operating on
            tight margins.</p>

        <a href="{{ route('register') }}">
            <button
                class="flex items-center space-x-3 pl-3 border-b border-l border-t border-green-500 text-green-500 font-medium my-4 focus:outline-none transform transition hover:scale-110 duration-300 ease-in-out rounded-full">
                <span>Register your business</span>
                <div class="border border-green-500 h-14 w-14 rounded-full flex items-center justify-center">
                    <svg class="w-5 h-5" viewBox="0 0 26 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M25.7071 8.70711C26.0976 8.31658 26.0976 7.68342 25.7071 7.2929L19.3431 0.928934C18.9526 0.538409 18.3195 0.538409 17.9289 0.928934C17.5384 1.31946 17.5384 1.95262 17.9289 2.34315L23.5858 8L17.9289 13.6569C17.5384 14.0474 17.5384 14.6805 17.9289 15.0711C18.3195 15.4616 18.9526 15.4616 19.3431 15.0711L25.7071 8.70711ZM-8.74228e-08 9L25 9L25 7L8.74228e-08 7L-8.74228e-08 9Z"
                            fill="#22c55e"/>
                    </svg>
                </div>
            </button>
        </a>

    </div>
    <div data-aos="zoom-in-left" class="md:w-7/12">
        <img class="md:w-10/12 mx-auto" src="{{asset('images/business-woman.png')}}" alt="Why join us?">
    </div>
</div>
