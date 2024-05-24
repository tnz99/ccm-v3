<x-admin-layout>
<div>
    <div class="bg-white flex flex-col rounded-md p-8">
        <div class="flex flex-row justify-between">
            <div class="flex items-center">
                <form action="{{ route('donars.search') }}" method="post" class="flex w-full">
                    @csrf
                    <input type="text" name="search_string" placeholder="search" class="border-inherit rounded-sm h-1/2 w-full">
                    <input type="submit" value="Search" class="font-bold ml-6">
                </form>
            </div>

            
        </div>

        <div class="mt-4 flex justify-center w-full">
            <table class="w-full">
                <thead class="bg-gray-100 text-black">
                    <th class="text-left pl-8">Name</th>
                    <th class="text-left">Email</th>
                    <th class="text-left">Role</th>
                </thead>

                <tbody>
                    @foreach ($users as $user )
                    <tr class="hover:bg-gray-100">
                        <td class="text-sm text-left pl-8">{{ $user->name }}</td>
                        <td class="text-sm text-left lowercase">{{ $user->email }}</td>
                        <td class="text-sm text-left capitalize">{{ ucwords(str_replace('_', ' ',$user->role->name)) }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>       
</x-admin-layout>