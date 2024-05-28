<x-admin-layout>
    <div>
        <div class="p-5 border border-b-0 border-gray-200">
            <div class="flex flex-col gap-3">
                <div class="flex justify-end w-full space-x-4">
                    <div class="flex items-center self-start w-full">
                        <form action="{{ route('stories.search') }}" method="post" class="flex w-full">
                            @csrf
                            <input type="text" name="search_string" placeholder="search" class="border-inherit rounded-sm h-1/2 w-full placeholder:text-xs">
                            <input type="submit" value="Search" class="font-bold ml-6">
                        </form>
                    </div>

                    <div class="flex justify-end w-full space-x-4">
                        <button data-modal-target="create-gallery-story-modal" data-modal-toggle="create-gallery-story-modal" class="flex gap-2 text-thin uppercase text-xs items-center text-white bg-green-900 hover:bg-green-950 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm px-2 py-2 text-center" type="button">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>    
                            <span class="hidden xl:inline">Timeline under {{ $timeline->headline->title }}</span>
                        </button>

                        <button type="button" onClick="history.back()" class="flex gap-1 items-center">
                            go back
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5v0a5.5 5.5 0 0 1-5.5 5.5H11"/></svg>
                        </button>
                    </div>


                </div>
                <table class="w-full border">
                    <thead class="bg-gray-100 text-black">
                        <th class="text-center">SL.No</th>
                        <th class="text-left">Year</th>
                        <th class="text-left">Title</th>
                        <th class="text-center">Actions</th>
                    </thead>

                    <tbody>
                        @foreach ($stories as $index => $story )
                        <tr class="hover:bg-gray-100">
                            <td class="text-center capitalize text-sm">{{ $index + 1 }}</td>
                            <td class="text-left capitalize text-sm">{{ $story->title }}</td>
                            <td class="text-left capitalize text-sm">{{ $story->headline->title }}</td>
                            <td class="text-left flex justify-center gap-2">
                                <a href="{{ route('stories.edit', ['id' => $story->id ]) }}" class="text-yellow-300 hover:text-yellow-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-pen-line"><path d="m18 5-3-3H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2"/><path d="M8 18h1"/><path d="M18.4 9.6a2 2 0 1 1 3 3L17 17l-4 1 1-4Z"/></svg>
                                </a>
                                <form action="{{ route('stories.delete') }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="hidden" name="id" value="{{ $story->id }}">
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

<div id="create-gallery-story-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-sm shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-2 md:p-3 border-b rounded-t ">
                <h3 class="text-lg font-semibold text-gray-900 ">
                    Add Timeline
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-sm text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create-gallery-story-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close</span>
                </button>
            </div>
            <!-- Modal body -->
            <div class="p-4 md:p-5 space-y-4">
                <form action="{{ route('stories.create') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                        <input type="hidden" name="headline_id" value="{{ $timeline->headline->id }}">
                        <input type="hidden" name="timeline_id" value="{{ $timeline->id }}">

                        <div class="sm:col-span-2 flex gap-4">
                            <div class="w-full">
                                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year</label>
                                <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="Type Year Here" required="">
                            </div>

                            <div class="w-full">
                                <label for="title_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Year text color</label>
                                <input type="color" name="title_text_color" id="title_text_color" required="" class="w-full h-11 rounded-lg">
                            </div>
                        </div>

                        <div class="sm:col-span-2 flex flex-col gap-4">
                            <div class="w-full">
                                <label for="subtitle" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                                <input type="text" name="subtitle" id="subtitle" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="Type Year Here" required="">
                            </div>

                            <div class="w-full">
                                <label for="sub_title_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Title text color</label>
                                <input type="color" name="sub_title_text_color" id="sub_title_text_color" required="" class="w-full h-11 rounded-lg">
                            </div>
                        </div>

                        <div class="sm:col-span-2 flex gap-4 flex-col">
                            <div class="w-full">
                                <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Story Description</label>
                                <textarea name="description" id="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Write your description here...."></textarea>
                            </div>

                            <div class="w-full">
                                <label for="description_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Description Text Color</label>
                                <input type="color" name="description_text_color" id="description_text_color" required="" class="w-full h-11 rounded-lg">
                            </div>
                        </div>

                        <div class="flex sm:col-span-2 gap-4">
                            
                            <div class="w-full">
                                <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-0" required="" min=1 max=15 required=""> 
                            </div>
                        </div>
                    </div>

                    <button type="submit" class="inline-flex items-center px-3 py-2 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-950 rounded-sm focus:ring-4 focus:ring-primary-200nhover:bg-primary-800">
                        Save Changes
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
