<x-admin-layout>
    <div>
        <div class="bg-white flex flex-col rounded-md p-8">
            <div class="flex flex-row justify-end items-center">
                <button data-modal-target="create-news-modal" data-modal-toggle="create-news-modal" class="text-white bg-green-800 hover:bg-white hover:text-green-800 hover:border p-2 hover:border-solid hover:border-green-800 rounded-md focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-xs px-2 text-center flex items-center gap-2 uppercase" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                    <span class="hidden xl:inline">News</span>
                </button>
            </div>

            <div class="mt-4 flex justify-center w-full">
                <table class="w-full table-auto border">
                    <thead class="bg-gray-100">
                        <th class="text-black text-center">SL.No</th>
                        <th class="text-black text-left pl-8">Title</th>
                        <th class="text-black text-left pl-8">Description</th>
                        <th class="text-black text-left pl-8">Actions</th>
                    </thead>

                    <tbody>
                        @foreach ($news as $index => $item )
                            <tr class="hover:bg-gray-100">
                                <td class="text-center text-sm">{{ $index + 1 }}</td>
                                <td class="text-left capitalize pl-8 text-sm">{{ $item->title }}</td>
                                <td class="text-left capitalize pl-8 text-sm">{{ $item->description }}</td>
                                <td class="text-left flex gap-3 pl-8 text-sm">
                                    <a href="{{ route('news.edit', ['id' => $item->id ]) }}" class="text-yellow-500 hover:text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                    </a>

                                    <form action="{{ route('news.delete') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $item->id }}">
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trash-2"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>       
</x-admin-layout>

 <!-- Create Story modal -->
 <div id="create-news-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow ">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Add News
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create-news-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form action="{{ route('news.create') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <div class="sm:col-span-2 flex gap-4">
                            <div class="w-full">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input type="text" name="title" id="title" class="capitalize bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="Type Story Title" required="">
                            </div>

                            <!-- <div class="w-full rounded-lg">
                                <label for="title_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Title Text Color</label>
                                <input value="" type="color" name="title_text_color" id="title_text_color" required="" class="w-full h-11 rounded-lg">
                            </div> -->
                        </div>

                        <div class="sm:col-span-2 flex gap-4 flex-col">
                            <div class="w-full">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                                <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your description here...."></textarea>
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

                    <button type="submit" class="inline-flex items-center px-5 py-2 mt-4 sm:mt-6 text-xs font-medium text-center text-white bg-green-950 rounded-sm focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Save Changes
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>