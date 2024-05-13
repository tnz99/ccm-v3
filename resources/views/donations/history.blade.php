<x-page-layout backgroundImageName="/images/upload/spring.png" :darkMode='false' cnavBackground="linear-gradient(270deg, #DA8495 42.11%, rgba(216, 161, 164, 0.56) 101.31%)">
    <h2 class="text-3xl font-extrabold mt-4">Donation History</h2>

    <table class="mt-10 w-8/12">
        <thead class="bg-black text-yellow-400">
            <tr>
                <th class="border-2 border-solid border-black">#</th>
                <th class="border-2 border-solid border-black">Donation Date</th>
                <th class="border-2 border-solid border-black">Donation Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($records as $index => $record)
            <tr class="bg-gray-300 hover:border-blue-400 hover:border-solid hover:border-2">
                <td class="td text-center border-2 border-solid border-black">{{ $index }}</td>
                <td class="td text-center border-2 border-solid border-black">{{ $record['date'] }}</td>
                <td class="td text-center border-2 border-solid border-black">{{ $record['amount'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</x-page-layout>
