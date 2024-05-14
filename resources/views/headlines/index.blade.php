<x-admin-layout>
    <div class="bg-white flex flex-col rounded-md p-8">
        <div class="flex flex-row justify-between">
            <div class="flex items-center">
                <form action="{{ route('headlines.search') }}" method="post" class="flex w-full">
                    @csrf
                    <input type="text" name="search_string" placeholder="search" class="border-inherit rounded-sm h-1/2 w-full input:">
                    <input type="submit" value="Search" class="font-bold ml-6">
                </form>
            </div>

        </div>

        <div class="mt-4 flex justify-center w-full">
            <table class="w-full table-auto border">
                <thead class="bg-gray-100">
                    <th class="text-black text-left p-1 text-sm pl-8 table-cell">Title</th>
                    <!-- <th class="textblackwhite text-left p-1">Position</th> -->
                    <th class="text-black text-center p-1 text-sm table-cell">Actions</th>
                </thead>

                <tbody>
                    @foreach($headlines as $headline)
                    <tr class="border-1 border-solid border-inherit hover:bg-gray-100">
                        <td class="p-1 text-left capitalize text-xs pl-8">{{ $headline->title }}</td>
                        <!-- <td class="p-1 text-left capitalize">{{ $headline->position }}</td> -->
                        <td class="p-1 flex text-xs justify-center">
                            <a href="{{ route('headlines.edit', [ 'id' => $headline->id ]) }}" class="hover:text-green-500">
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-pencil"><path d="M17 3a2.85 2.83 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5Z"/><path d="m15 5 4 4"/></svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
