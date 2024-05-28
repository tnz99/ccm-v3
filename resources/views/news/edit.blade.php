<x-admin-layout>
        <div class="bg-white flex flex-col rounded-md p-8 w-full">
            <div class="mt-4 flex justify-center w-full">
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

                        <!-- <div class="sm:col-span-2 flex gap-1  w-full">
                            <div class="w-full">
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full" required="" min=1 max=15 required=""> 
                            </div>
                        </div> -->
                    </div>

                    <button type="submit" class="inline-flex self-end items-center px-5 py-2 mt-4 sm:mt-6 text-xs font-medium text-center text-white bg-green-950 rounded-sm focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Save Changes
                    </button>
                </form>
            </div>
        </div>
</x-admin-layout>
