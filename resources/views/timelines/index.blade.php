<x-admin-layout>
    <div>
        <div class="bg-white flex flex-col rounded-md p-8">
            <div class="flex flex-row justify-end">
                <!-- Modal toggle -->
                <button data-modal-target="create-timeline-modal" data-modal-toggle="create-timeline-modal" class="flex gap-2 text-xs text-white bg-green-800 hover:bg-white hover:border hover:border-green-800 hover:borde-solid hover:text-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-sm  uppercase items-center px-3 py-1 text-center" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-plus"><circle cx="12" cy="12" r="10"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>
                    Timeline Page
                </button>

                <!-- Main modal -->
                <div id="create-timeline-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-2xl max-h-full">
                        <!-- Modal content -->
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <!-- Modal header -->
                            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                    Add Timeline Page
                                </h3>
                                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="create-timeline-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                    </svg>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                            <!-- Modal body -->
                            <div class="p-4 md:p-5 space-y-4">
                                <form action="{{ route('timelines.create') }}" method="post" enctype="multipart/form-data" class="flex flex-col">
                                    @csrf

                                    <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                                        <div class="sm:col-span-2">
                                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Select Main Story Line</label>
                                            <select name="headline_id" class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2">
                                                @foreach ($headlines as $headline)
                                                    <option value="{{ $headline->id }}" class="capitalize">{{ $headline->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <!-- <div class="sm:col-span-2">
                                            <label for="title_text_color" class="mb-1 text-sm font-medium text-gray-900 flex items-end align-middle">Background color for circular navbar</label>
                                            <input type="color" name="title_text_color" id="title_text_color" required="" class="w-full h-11 rounded-lg">
                                        </div> -->


                                    </div>

                                    <button type="submit" class="self-end inline-flex items-center px-5 py-2.5 mt-4 sm:mt-6 text-white bg-green-950 rounded-sm focus:ring-4 focus:ring-primary-200 hover:bg-primary-800">
                                        <span class="text-[10px] uppercase font-thin">Save and Continue to add timelines</span> 
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-4 flex justify-center w-full">
                <table class="w-full text-md">
                    <thead class="bg-gray-200 text-black">
                        <th class="text-left pl-4">Timeline Page</th>
                        <th class="text-center">Actions</th>
                    </thead>

                    <tbody>
                        @foreach ($timelines as $timeline)
                            <tr class="hover:bg-gray-100">
                                <td class="text-left text-sm py-2 pl-4">{{ $timeline->headline->title}}</td>
                                <td class="text-sm flex justify-center gap-2 py-2">
                                    <a href="{{ route('timelines.edit', ['id' => $timeline->id ]) }}" class="text-yellow-500 hover:text-green-500">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                                    </a>
                                    <form action="{{ route('timelines.delete') }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <input type="hidden" name="id" value="{{ $timeline->id }}">
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
