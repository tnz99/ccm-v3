<x-admin-layout>
    <div class="bg-white flex flex-col rounded-md h-screen p-8">
        <div class="flex flex-row justify-between">
            <div class="flex items-center">
                <form action="{{ route('headlines.search') }}" method="post" class="flex w-full">
                    @csrf
                    <input type="text" name="search_string" placeholder="search" class="border-inherit rounded-sm h-1/2 w-full">
                    <input type="submit" value="Search" class="font-bold ml-6">
                </form>
            </div>

            <x-headlines.create />
        </div>

        <div class="mt-4 flex justify-center w-full">
            <table class="w-full">
                <thead class="bg-green-950">
                    <th class="text-white text-left p-1">Title</th>
                    <th class="text-white text-left p-1">Position</th>
                    <th class="text-white text-left p-1">Actions</th>
                </thead>

                <tbody>
                    @foreach($headlines as $headline)
                    <tr class="border-1 border-solid border-inherit">
                        <td class="p-1 text-left capitalize">{{ $headline->title }}</td>
                        <td class="p-1 text-left capitalize">{{ $headline->position }}</td>
                        <td class="p-1 text-left">
                            <a href="{{ route('headlines.edit', [ 'id' => $headline->id ]) }}">EDIT</a>
                            <a href="{{ route('headlines.create') }}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-admin-layout>
