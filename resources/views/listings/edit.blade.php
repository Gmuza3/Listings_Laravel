<x-app-layout>
    <div class="w-full flex justify-center items-center">
        <div class="w-full sm450:w-auto border-2 rounded-md border-gray-600 ounded-lg shadow-md  hover:shadow-xl ">
            <form action="{{ route('listings.update', $listing->id) }}" method="POST" class="w-full sm450:w-auto my-3 mx-3  sm450:my-6 sm450:mx-6 flex flex-col gap-3 justify-center items-start  ">
                @csrf
                @method('PUT')
                <div class="flex items-center justify-center gap-3 sm450:gap-7">
                    <label for="title" class="text-sm sm450:text-lg font-serif text-blue-600">Title</label>
                    <input type="text" placeholder="Enter title" id=title name="title" class="h-[30px] w-[200px] sm450:min-w-[280px] rounded-lg" value={{$listing->title}}>
                </div>
                <div class="flex items-center justify-center gap-3 sm450:gap-7">
                    <label for="tags" class="text-sm sm450:text-lg font-serif text-blue-600">Tags</label>
                    <input type="text" placeholder="Enter tags" id=tags name="tags" class="h-[30px] w-[200px] sm450:min-w-[280px] rounded-lg" value={{$listing->tags}}> 
                </div>
              
                <div class="flex items-center justify-center gap-3 sm450:gap-7">
                    <label for="company" class="text-sm sm450:text-lg font-serif text-blue-600">Company</label>
                    <input type="text" placeholder="Enter company name" id=company name="company" class="h-[30px] w-[200px] sm450:min-w-[280px] rounded-lg" value={{$listing->company}}>
                </div>
                
                <div class="flex items-center justify-center gap-3 sm450:gap-7">
                    <label for="email" class="text-sm sm450:text-lg font-serif text-blue-600">Email</label>
                    <input type="email"  class="h-[30px] w-[200px] sm450:min-w-[280px] rounded-lg" placeholder="Enter email" id=email name="email" required value={{$listing->email}} >
                </div>
                
                <div class="flex items-center justify-center gap-3 sm450:gap-7">
                     <label for="website" class="text-sm sm450:text-lg font-serif text-blue-600">Website</label>
                     <input type="url" placeholder="Enter website" id=website name="website" class="h-[30px] w-[200px] sm450:min-w-[280px] rounded-lg" value={{$listing->website}}>
                </div>
               
                <div class="flex items-center justify-center gap-3 sm450:gap-7">
                    <label for="location" class="text-sm sm450:text-lg font-serif text-blue-600">Location</label>
                    <input type="text" placeholder="Enter location" id=location name="location" class="h-[30px] w-[200px] sm450:min-w-[280px] rounded-lg" value={{$listing->location}}>
                </div>
                
                <div class="flex items-center justify-center gap-3 sm:gap-7">
                    <label for="description" class="text-sm sm450:text-lg font-serif text-blue-600">Description</label>
                    <textarea class="rounded-lg w-[200px] sm450:w-[270px]" name="description" id="description" cols="30" rows="5" placeholder="Enter description">
                        {{$listing->description}}
                    </textarea>
                </div>
                
                <div class="w-full pt-3 flex justify-center items-center">
                    <button type="submit"  class=" w-auto text-sm sm450:text-lg font-serif text-blue-600 px-3 py-2 border border-blue-600 rounded-md hover:bg-blue-600 hover:text-white ">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>