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
                    <button data-modal-target="create-gallery-modal" data-modal-toggle="create-gallery-modal" class="block text-white bg-green-950 hover:bg-green-900 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-sm text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" type="button">
                        New Gallery Page
                    </button>
                </div>

                <!-- New Gallery -->
                <div id="create-gallery-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-sm shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Add Gallery
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-sm text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create-gallery-modal">
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
                                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Main Story Line</label>
                                            <select name="headline_id" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                @foreach ($headlines as $headline)
                                                    <option value="{{ $headline->id }}" class="capitalize">{{ $headline->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gallery Name</label>
                                            <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Story Title" required="">
                                        </div>

                                      
                                        <div class="sm:col-span-2">
                                            <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Page Position</label>
                                            <input type="number" name="position" id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" min=1 max=15 required=""> 
                                        </div>

                                        <div class="sm:col-span-2">
                                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                                            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-0 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" min=1 max=15 required=""> 
                                        </div>
                                    </div>

                                    <button type="submit" class="inline-flex items-center justify-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-950 rounded-sm focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                                        Save Changes
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

            <div class="mt-4 flex justify-center w-full">
                <table class="w-full">
                    <thead class="bg-green-900">
                        <th class="text-white text-center">Position</th>
                        <th class="text-white text-left">Gallery Name</th>
                        <th class="text-white text-left">Main Story Line</th>
                        <th class="text-white text-left">Actions</th>
                    </thead>

                    <tbody>
                      
                        @foreach ($galleries as $gallery)
                            <tr>
                                <td class="text-center capitalize">{{ $gallery->position}}</td>
                                <td class="text-left capitalize">{{ $gallery->title }}</td>
                                <td class="text-left capitalize">{{ $gallery->headline->title}}</td>
                                <td class="text-left capitalize">
                                    <a href="{{ route('galleries.show', ['id' => $gallery->id]) }}">view</a>
                                    <a href="{{ route('galleries.edit', ['id' => $gallery->id]) }}">edit</a>
                                    <a href="http://">delete</a>
                                </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>       
</x-admin-layout>
