<x-admin-layout>
    <div class="p-4">
        <div class="">
            <h2 class="text-2xl font-bold py-4">Edit Gallery</h2>
            <form action="{{ route('stories.create') }}" method="post" enctype="multipart/form-data">
                @csrf

                <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">
                    <div class="sm:col-span-2">
                        <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gallery</label>
                        <select
                            name="headline_id"
                            class=" bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($galleries as $gallery)
                                <option value="{{ $gallery->id }}" class="capitalize">{{ $gallery->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="sm:col-span-2">
                        <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                        <input type="text" name="title" id="title" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-2 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type Story Title" required="">
                    </div>

                    <div class="sm:col-span-2">
                        <label for="description" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea name="description" id="description" rows="4" class="block p-2 w-full text-sm text-gray-900 bg-gray-50 rounded-sm border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Write your description here...."></textarea>
                    </div>

                    <div class="flex sm:col-span-2 gap-4">
                        <div class="w-full">
                            <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Page Position</label>
                            <input type="number" name="position" id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 p-2" required="" min=1 max=15 required=""> 
                        </div>
                        
                        <div class="w-full">
                            <label for="image" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Image</label>
                            <input type="file" name="image" id="image" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-sm focus:ring-primary-600 focus:border-primary-600 block w-full p-0 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" required="" min=1 max=15 required=""> 
                        </div>
                    </div>
                </div>

                <button type="submit" class="inline-flex items-center px-3 py-2 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-green-950 rounded-sm focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                    Save Changes
                </button>
            </form>
        </div>


        <div class="">
            <h2 class="text-2xl font-bold py-4">Gallery Items</h2>
            <div class="mt-4 flex justify-center w-full">
                <table class="w-full">
                    <thead class="bg-green-900">
                        <th class="text-white text-center">Position</th>
                        <th class="text-white text-center">Title</th>
                        <th class="text-white text-center">Headline</th>
                        <th class="text-white text-center">Actions</th>
                    </thead>

                    <tbody>
                        @foreach ($stories as $story )
                        <tr>
                            <td class="text-center">{{ $story->position }}</td>
                            <td class="text-center">{{ $story->title }}</td>
                            <td class="text-center">{{ $story->headline->title }}</td>
                            <td class="text-center">
                                <a href="{{ route('stories.edit', ['id' => $story->id ]) }}">Edit</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</x-admin-layout>
