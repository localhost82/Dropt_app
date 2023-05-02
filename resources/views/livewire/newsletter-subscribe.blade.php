<div>
    <div class="text-center pb-16 pt-5">
        <label class="text-gray-300 font-semibold">Subscribe to get our Newsletter</label>
        <div class="px-5 sm:px-0 flex flex-col sm:flex-row sm:space-x-3 space-y-3 sm:space-y-0 justify-center mt-3">
            <input type="email" wire:model="email" placeholder="Your Email"
                   class="rounded-full py-2 pl-5 bg-transparent border border-gray-400 text-white">
            <button type="submit"
                    wire:click="store"
                    class="text-white w-40 sm:w-auto mx-auto sm:mx-0 font-semibold px-5 py-2 rounded-full"
                    style="background: linear-gradient(105.5deg, #26C1F2 19.57%, #26C1F2 78.85%);">Subscribe
            </button>
        </div>

        @error('email') <span class="flex flex-col mt-2 text-red-600">{{ $message }}</span> @enderror

        @if($success)
            <span class="flex flex-col mt-2 text-green-500">{{ $success }}</span>
        @endif
    </div>
</div>
