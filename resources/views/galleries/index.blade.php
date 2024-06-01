<x-admin-layout>
    <div>
        <div class="bg-white flex flex-col rounded-md p-8">
            <div class="flex flex-row justify-between">
                <div class="flex items-center">
                    <form action="{{ route('galleries.search') }}" method="post" class="flex w-full">
                        @csrf
                        <input type="text" name="search_string" placeholder="search" class="border-inherit rounded-sm h-1/2 w-full">
                        <input type="submit" value="Search" class="font-bold ml-6">
                    </form>
                </div>

                <div class="flex gap-2">
                    <button data-modal-target="create-gallery-modal" data-modal-toggle="create-gallery-modal" class="hover:text-green-800 hover:border hover:border-solid hover:border-green-800 hover:bg-white bg-green-800 text-white uppercase rounded-md focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium text-xs px-3 flex items-center py-1 text-center gap-3" type="button">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>    
                        <span class="hidden xl:inline">Gallery Page</span>
                    </button>
                </div>

                <!-- New Gallery -->
                <div id="create-gallery-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-sm shadow">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Add Gallery
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-sm text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600"" data-modal-hide="create-gallery-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <form action="{{ route('galleries.create') }}" method="post" enctype="multipart/form-data" class="gap-2 flex flex-col justify-end">
                                    @csrf
                                    
                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Under which main story do you want to add the gallery?</label>
                                            <select name="headline_id" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2">
                                                @foreach ($headlines as $headline)
                                                    <option value="{{ $headline->id }}" class="capitalize">{{ $headline->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gallery Name</label>
                                            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2" placeholder="Type Story Title" required="">
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-0" required="" min=1 max=15 required=""> 
                                        </div>
                                    </div>

                                    <button type="submit" class="uppercase text-xs inline-flex items-center justify-center px-5 py-2.5 mt-4 sm:mt-6 font-thin text-center text-white bg-green-800 rounded-sm focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                                        Next
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="mt-4 flex justify-center w-full">
                <table class="w-full table border">
                    <thead class="bg-gray-100 table-header-group">
                        <th class="text-black table-cell text-center">SL.No</th>
                        <th class="text-black table-cell text-left">Gallery Name</th>
                        <th class="text-black table-cell text-left">Main Story Line</th>
                        <th class="text-black table-cell text-left">Actions</th>
                    </thead>

                    <tbody>
                        @foreach ($galleries as $index => $gallery)
                            <tr class="hover:bg-gray-100">
                                <td class="text-center capitalize text-sm table-cell">{{ $index + 1 }}</td>
                                <td class="text-left capitalize text-sm table-cell">{{ $gallery->title }}</td>
                                <td class="text-left capitalize text-sm table-cell">{{ $gallery->headline->title}}</td>
                                <td class="text-left capitalize text-sm gap-3 flex ">
                                    <a class="text-green-300 hover:text-green-600" href="{{ route('galleries.show', ['id' => $gallery->id]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/><circle cx="12" cy="12" r="3"/></svg>
                                    </a>
                                    <a class="text-yellow-300 hover:text-yellow-600" href="{{ route('galleries.edit', ['id' => $gallery->id]) }}">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-file-pen-line"><path d="m18 5-3-3H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2"/><path d="M8 18h1"/><path d="M18.4 9.6a2 2 0 1 1 3 3L17 17l-4 1 1-4Z"/></svg>
                                    </a>
                                    <form action="{{ route('galleries.delete') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $gallery->id }}">
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
