<div>
    <a tabindex="-1" id="news"></a>

    <div data-aos="zoom-in" class="mt-16">
        <h1 class="text-darken text-2xl font-semibold">Latest Added Available Food</h1>
    </div>

    <div data-aos="zoom-in-up" class="my-14 lg:space-x-20">

        <div class="lg:w-12/12 mt-12 space-y-5 lg:space-y-0 lg:mt-0">

            @foreach($news as $details)

                <div class="flex space-x-5" style="padding-bottom: 50px">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full" src="{{ asset( $details->image) }}" alt="{{ $details->title }}">
                            <span
                                class="absolute bottom-2 right-2 bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full hidden sm:block">AVAILABLE FOOD</span>
                        </div>
                    </div>
                    <div class="w-8/12">
                        <h1 class="text-gray-800 text-sm sm:text-lg font-semibold">{{ $details->title }}</h1>
                        <p class="text-gray-500 my-2 sm:my-4 text-xs sm:text-md">{{ $details->content }}</p>
                        <h3 class="text-green-700 font-semibold">Collect food at: {{ date('l jS \\of F Y h:i A', strtotime($details->coll_time)) }}</h3>
                    </div>
                </div>

            @endforeach

        </div>
    </div>

</div>
