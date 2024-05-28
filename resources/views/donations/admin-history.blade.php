<x-admin-layout>
    <div class="flex flex-col items-center p-6 h-full">
        <h2 class="text-3xl font-extrabold mt-4">Donation History</h2>
        <table class="mt-10 w-full table-auto border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="">#</th>
                    <th class="">Donar Name</th>
                    <th class="">Donation Date</th>
                    <th class="">Donation Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $index => $record)
                <tr class="hover:bg-gray-100">
                    <td class="text-center">{{ $index }}</td>
                    <td class="text-center">{{ $record->user->name }}</td>
                    <td class="text-center">{{ $record->created_at->format('F d, Y') }}</td>
                    <td class="text-center">{{ $record->amount }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-page-layout>
