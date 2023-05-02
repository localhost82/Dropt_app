<div>
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                    <table class="min-w-full text-left text-sm font-light w-full">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">#</th>
                            <th scope="col" class="px-6 py-4">User</th>
                            <th scope="col" class="px-6 py-4">Image</th>
                            <th scope="col" class="px-6 py-4">Title</th>
                            <th scope="col" class="px-6 py-4">Published At</th>
                            <th scope="col" class="px-6 py-4">Manage</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($news as $company_news)
                            <tr class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $company_news->id }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $company_news->user->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <img class="object-contain h-48 w-96" src="{{ asset($company_news->image) }}" alt="{{ $company_news->title }}">
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $company_news->title }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $company_news->created_at }}</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <button>Edit</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3 px-3">
                        {{ $news->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
