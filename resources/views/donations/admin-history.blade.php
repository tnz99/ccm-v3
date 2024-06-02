<x-admin-layout>

<div class="mb-4 border-b border-gray-200 flex justify-between">
    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="default-styled-tab" data-tabs-toggle="#default-styled-tab-content" data-tabs-active-classes="text-green-800 hover:text-green-800 border-green-800" data-tabs-inactive-classes="dark:border-transparent text-gray-500 hover:text-gray-600 dark:text-gray-400 border-gray-100 hover:border-gray-300 dark:border-gray-700 dark:hover:text-gray-300" role="tablist">
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-styled-tab" data-tabs-target="#styled-profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Local Donation</button>
        </li>
        <li class="me-2" role="presentation">
            <button class="inline-block p-4 border-b-2 rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-styled-tab" data-tabs-target="#styled-dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">International Donation</button>
        </li>
    </ul>

    <button type="button" onClick="history.back()" class="flex gap-1 items-center text-black pr-4">
        go back
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5v0a5.5 5.5 0 0 1-5.5 5.5H11"/></svg>
    </button>
</div>

<div id="default-styled-tab-content">
    <div class="hidden p-4 rounded-lg" id="styled-profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="flex flex-col items-center p-6 h-full">
        <table class="w-full table-auto border">
            <thead class="bg-gray-100">
                <tr>
                    <!-- <th class="">#</th> -->
                    <th class="text-left">Donar Name</th>
                    <th class="">Donation Date</th>
                    <th class="">Donation Amount</th>
                    <th class="">Donation Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $index => $record)
                @if(isset($record->journal_number) && $record->journal_number != null)
                <tr class="hover:bg-gray-100">
                    <!-- <td class="text-center">{{ $index }}</td> -->
                    <td class="text-left">{{ $record->user->name }}</td>
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
    <div class="hidden p-4 rounded-lg" id="styled-dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
        <div class="flex flex-col items-center p-6 h-full">
        <table class="w-full table-auto border">
            <thead class="bg-gray-100">
                <tr>
                    <!-- <th class="">#</th> -->
                    <th class="text-left">Donar Name</th>
                    <th class="">Donation Date</th>
                    <th class="">Donation Amount</th>
                    <th class="">Donation Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($records as $index => $record)
                    @if(!(isset($record->journal_number) && $record->journal_number != null))
                    <tr class="hover:bg-gray-100">
                        <!-- <td class="text-center">{{ $index }}</td> -->
                        <td class="text-left">{{ $record->user->name }}</td>
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
