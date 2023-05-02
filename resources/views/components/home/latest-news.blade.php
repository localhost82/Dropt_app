<div>
    <a tabindex="-1" id="latest-news"></a>

    <div data-aos="zoom-in" class="mt-16 text-center">
        <h1 class="text-darken text-2xl font-semibold">Latest Added Available Food</h1>
        <p class="text-gray-500 my-5">See the latest available food from local businesses</p>
    </div>
    <div data-aos="zoom-in-up" class="my-14 flex flex-col lg:flex-row lg:space-x-20">

        @if ($news->isNotEmpty())
            @php
                $item = $news->first();
            @endphp

            <div class="lg:w-6/12">
                <img class="w-full mb-6" src="{{ asset($item->image) }}" alt="{{ $item->title }}">
                <span class="bg-yellow-300 text-darken font-semibold px-4 py-px text-sm rounded-full">LATEST ADDITION</span>
                <h1 class="text-gray-800 font-semibold my-3 text-xl">{{ $item->title }}</h1>
                <p class="text-gray-500 mb-3">{{ $item->content }}</p>
                <h3 class="text-green-700 font-semibold">Collect food at: {{ date('l jS \\of F Y h:i A', strtotime($item->coll_time)) }}</h3>
            </div>
        @endif

        <div class="lg:w-7/12 flex flex-col justify-between mt-12 space-y-5 lg:space-y-0 lg:mt-0">

            @foreach($news as $details)
                @if ($loop->first)
                    @continue
                @endif

                <div class="flex space-x-5" style="padding-bottom: 20px">
                    <div class="w-4/12">
                        <div class="relative">
                            <img class="rounded-xl w-full" src="{{ asset($details->image) }}" alt="{{ $details->title }}">
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

            <a href="{{ route('news') }}" class="underline">Read All News</a>

        </div>
    </div>

</div>
