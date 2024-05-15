<x-admin-layout>
    <div class="flex flex-col items-start p-5">
        <h2 class="text-xl capitalize">Edit {{ $story->title }}</h2>
        <form action="{{ route('stories.update') }}" method="post" enctype="multipart/form-data" class="mt-2 w-full">
            @csrf

            <input type="hidden" name="id" value="{{ $story-> id }}">
            <div class="flex flex-col w-full gap-4">
                <div class="sm:col-span-2">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                    <input value="{{ $story->title }}" type="text" name="title" id="title" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Story Title" required="">
                </div>

                <div class="sm:col-span-2">
                    <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                    <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here....">{{ $story->description }}</textarea>
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