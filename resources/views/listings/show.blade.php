<x-app-layout>
    <h1 class="text-2xl font-bold mb-4">Listing Details</h1>

     <div class="cursor-pointer border border-gray-300 rounded-lg shadow-md p-4 hover:shadow-lg transition duration-300">
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
                    <div class="mt-2 flex justify-end items-center gap-2">
                        <a href={{route('listings.edit',$listing)}} class="px-2 border border-blue-600 rounded-md hover:bg-blue-600 hover:text-white">Edit</a>
                        <form action={{ route('listings.destroy',$listing )}} method="POST" class="px-2 border border-blue-600 rounded-md hover:bg-blue-600 hover:text-white">
                            @csrf
                            @method('Delete')
                            <button type="submit">Delete</button>
                        </form>
                    </div>
</x-app-layout>
