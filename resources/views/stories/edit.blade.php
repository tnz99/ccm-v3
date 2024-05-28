<x-admin-layout>
    <div class="flex flex-col items-start p-5">
        <div class="flex w-full justify-between">
            <h2 class="text-xl capitalize">Edit</h2>
            <button type="button" onClick="history.back()" class="flex gap-1 items-center">
                go back
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5v0a5.5 5.5 0 0 1-5.5 5.5H11"/></svg>
            </button>
        </div>
        <form action="{{ route('stories.update') }}" method="post" enctype="multipart/form-data" class="mt-2 w-full flex flex-col justify-end">
            @csrf

            <input type="hidden" name="id" value="{{ $story-> id }}">
            <div class="flex flex-col w-full gap-4">
                <div class="flex flex-col xl:flex-row gap-4 w-full">
                    <div class="w-full">
                        @if (isset($story->sub_title))
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                        @else
                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        @endif
                        <input value="{{ $story->title }}" type="text" name="title" id="title" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="Type Story Title" required="">
                    </div>

                    <div class="w-full">
                        <label for="title_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Title Text Color</label>
                        <input value="{{ $story->title_text_color }}" type="color" name="title_text_color" id="title_text_color" required="" class="w-full h-11 rounded-lg">
                    </div>
                </div>

                @if (isset($story->sub_title))
                <div class="flex gap-4 w-full flex-col xl:flex-row">
                    <div class="w-full">
                        <label for="sub_title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Sub Title</label>
                        <input value="{{ $story->sub_title }}" type="text" name="sub_title" id="sub_title" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="Type Story Title" required="">
                    </div>

                    <div class="w-full">
                        <label for="sub_title_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Sub Title Text Color</label>
                        <input value="{{ $story->sub_title_text_color }}" type="color" name="sub_title_text_color" id="sub_title_text_color" required="" class="w-full h-11 rounded-lg">
                    </div>
                </div>
                @endif
                
                <div class="w-full flex flex-col gap-4">
                    <div class="w-full">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here....">{{ $story->description }}</textarea>
                    </div>

                    <div class="w-full">
                        <label for="description_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Description Text Color</label>
                        <input value="{{$story->description_text_color}}" type="color" name="description_text_color" id="description_text_color" required="" class="w-full h-11 rounded-lg">
                    </div>
                </div>
                

                <div class="flex gap-4">
                    <div class="w-full">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Headline</label>
                        <select name="headline_id" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($headlines as $headline)
                                <option value="{{ $headline->id }}" class="capitalize">{{ $headline->title }}</option>
                            @endforeach
                        </select>
                    </div>                    
                </div>
                <div class="sm:col-span-2">
                    <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                    <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-0"> 
                </div>
            </div>

            <button type="submit" class="inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-950 rounded-sm focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                Save Changes
            </button>
        </form>
    </div>       
</x-admin-layout>