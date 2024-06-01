<x-admin-layout>
        <div class="flex pt-4">
            <div type="button" class="flex items-center justify-between w-full p-3 px-5 font-medium rtl:text-right rounded-t-sm focus:ring-4 focus:ring-gray-200 gap-3">
                <span class="text-lg font-extrabold text-black">Edit {{ $news->title }}</span>
                <button type="button" onClick="history.back()" class="flex gap-1 items-center text-black">
                    go back
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5v0a5.5 5.5 0 0 1-5.5 5.5H11"/></svg>
                </button>
            </div>
        </div>

        <div class="bg-white flex flex-col rounded-md p-8 w-full">
            <div class="mt-1 flex justify-center w-full">
                <form action="{{ route('news.update') }}" method="post" enctype="multipart/form-data" class="flex flex-col w-full">
                    @csrf
                    <input type="hidden" name="id" value="{{ $news->id }}">
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2 flex gap-4">
                            <div class="w-full">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input value="{{ $news->title }}" type="text" name="title" id="title" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="Type Story Title" required="">
                            </div>

                            <!-- <div class="w-full rounded-lg">
                                <label for="title_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Title Text Color</label>
                                <input value="" type="color" name="title_text_color" id="title_text_color" required="" class="w-full h-11 rounded-lg">
                            </div> -->
                        </div>

                        <div class="sm:col-span-2 flex gap-4 flex-col">
                            <div class="w-full">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your description here....">{{ $news->description }}</textarea>
                            </div>

                            <!-- <div class="w-full">
                                <label for="description_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Description Text Color</label>
                                <input value="" type="color" name="description_text_color" id="description_text_color" required="" class="w-full h-11 rounded-lg">
                            </div> -->
                        </div>

                        <div class="sm:col-span-2 flex gap-1  w-full">
                            <div class="w-full">
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full"> 
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="inline-flex self-end items-center px-5 py-2 mt-4 sm:mt-6 text-xs font-medium text-center text-white bg-green-950 rounded-md hover:bg-primary-800 gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-save"><path d="M15.2 3a2 2 0 0 1 1.4.6l3.8 3.8a2 2 0 0 1 .6 1.4V19a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2z"/><path d="M17 21v-7a1 1 0 0 0-1-1H8a1 1 0 0 0-1 1v7"/><path d="M7 3v4a1 1 0 0 0 1 1h7"/></svg>
                        Save Changes
                    </button>
                </form>
            </div>
        </div>
</x-admin-layout>
