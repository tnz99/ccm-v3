<x-page-layout backgroundImageName="/images/upload/spring.png" :darkMode='false' cnavBackground="linear-gradient(270deg, #DA8495 42.11%, rgba(216, 161, 164, 0.56) 101.31%) " :blur="false">
    
<div class="mb-4 border-b border-gray-200">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-black-600 hover:text-black-600 dark:text-black-500 dark:hover:text-black-500 border-black-600 dark:border-black-500" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Local Donation</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">International Donation</button>
        </li>
    </ul>
</div>

<div id="default-styled-tab-content">
    <div class="hidden rounded-lg dark:bg-gray-800" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="flex flex-col items-center h-full">
        <table class="w-full table-auto border">
            <thead class="bg-yellow-300">
                <tr>
                    <th class="p-2">#</th>
                    <th class="p-2">Donor Name</th>
                    <th class="p-2">Donation Date</th>
                    <th class="p-2">Donation Amount</th>
                    <th class="p-2">Donation Type</th>
                </tr>
            </thead>
            <tbody class="bg-gray-200">
                @foreach ($records as $index => $record)
                <tr class="bg-gray-300 hover:border-blue-400 hover:border-solid hover:border-2">
                    <td class="">{{ $index }}</td>
                    <td class="">{{ $record->user->name }}</td>
                    <td class="">{{ $record->created_at->format('F d, Y') }}</td>
                    <td class="">{{ $record->amount }}</td>
                    <td class="">{{ isset($record->journal_number) && $record->journal_number != null ? 'Local' : 'International' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    </div>
        <div class="hidden rounded-lg" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
            <div class="flex flex-col items-center h-full max-h-64">
            <table class="w-full table-auto border">
                <thead class="bg-gray-100">
                    <tr class="bg-yellow-300">
                        <th class="p-2">#</th>
                        <th class="p-2">Donor Name</th>
                        <th class="p-2">Donation Date</th>
                        <th class="p-2">Donation Amount</th>
                        <th class="p-2">Donation Type</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $index => $record)
                        @if(!(isset($record->journal_number) && $record->journal_number != null))
                            <tr class="bg-gray-300 hover:border-blue-400 hover:border-solid hover:border-2">
                                <td class="text-center">{{ $index }}</td>
                                <td class="text-center">{{ $record->user->name }}</td>
                                <td class="text-center">{{ $record->created_at->format('F d, Y') }}</td>
                                <td class="text-center">{{ $record->amount }}</td>
                                <td class="text-center">{{ isset($record->journal_number) && $record->journal_number != null ? 'Local' : 'International' }}</td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
   
</div>
</x-page-layout>
