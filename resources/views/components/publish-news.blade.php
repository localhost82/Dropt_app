<div>
    <div class="px-4 mt-3">
        <form method="POST" action="{{ route('news.create') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-6">
                <label class="block">
                    <span class="text-gray-700">Title</span>
                    <input type="text" name="title" class="block w-full mt-1 rounded-md" placeholder=""
                           value="{{ old('title') }}" />
                </label>
                @error('title')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-6">
                <label class="block">
                    <span class="text-gray-700">Content</span>
                    <textarea class="block w-full mt-1 rounded-md" name="content" rows="3">{{old('content')}}</textarea>
                </label>
                @error('content')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block">
                    <span class="text-gray-700">Collection Time</span>
                    <input type="datetime-local" name="coll_time" value="{{old('coll_time')}}" />
                </label>
                @error('coll_time')
                <div class="text-sm text-red-600">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-6">
                <label class="block">
                    <span class="sr-only">Choose File</span>
                    <input type="file" name="image"
                   class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100" />
                </label>
                @error('image')
                <div class="flex items-center text-sm text-red-600">
                    {{ $message }}
                </div>
                @enderror
            </div>
            <button type="submit" class="mb-3 text-white bg-blue-600  rounded text-sm px-5 py-2.5">Submit</button>

        </form>
    </div>
</div>
