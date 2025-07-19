<x-app-layout>
        <div class="w-full flex justify-center pb-10">
            <a href="{{route('listings.create')}}" class="border border-green-500 rounded-md p-2 text-lg font-mono hover:bg-green-500 hover:text-white ">New Listings</a>
        </div>
        <div class="min-h[350px] grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 h-auto">
            @foreach ($listings as $listing)
                <div class="relative min-h-[350px] cursor-pointer border border-gray-300 rounded-lg shadow-md p-4 hover:shadow-lg transition duration-300">
                    <h2 class="text-xl font-bold text-blue-700 mb-2">
                        {{ $listing->title }}
                    </h2>

                    <p class="text-sm text-gray-500 mb-2">
                        <strong>Tags:</strong> {{ $listing->tags }}
                    </p>

                    <p class="text-gray-700 mb-4 line-clamp-3">
                        {{ $listing->description }}
                    </p>

                    <div class="mt-auto text-sm text-gray-600">
                        <p><strong>Company:</strong> {{ $listing->company }}</p>
                        <p><strong>Location:</strong> {{ $listing->location }}</p>
                        <p><strong>Email:</strong> {{ $listing->email }}</p>
                        <p><strong>Website:</strong> <a href="{{ $listing->website }}" class="text-blue-600 hover:underline" target="_blank">{{ $listing->website }}</a></p>
                    </div>
                     <div class="absolute bottom-2 right-2 flex gap-2">
                        <a href="{{ route('listings.show', $listing) }}"
                        class="px-2 py-1 border border-blue-600 rounded-md hover:bg-blue-600 hover:text-white text-sm">
                            View
                        </a>
                        <a href="{{ route('listings.edit', $listing) }}"
                        class="px-2 py-1 border border-green-600 rounded-md hover:bg-green-600 hover:text-white text-sm">
                            Edit
                        </a>
                        <form action={{ route('listings.destroy',$listing) }} method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="px-2 py-1 border border-red-600 rounded-md hover:bg-red-600 hover:text-white text-sm">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="pt-2">
            {{$listings->links() }}
        </div>
</x-app-layout>
