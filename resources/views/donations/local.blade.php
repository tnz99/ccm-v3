<x-page-layout backgroundImageName="/images/upload/donate.png" :darkMode='false' cnavBackground="linear-gradient(270deg, #BABC46 42%, rgba(188, 219, 240, 0.40) 101.31%)" :blur="false">
    <div class="flex flex-col mt-2 xl:mt-8 w-full">
        <div class="flex flex-col items-center pb-2 xl:items-start">
            <h2 class="text-lg xl:text-4xl font-extrabold">Donate to a cleaner</h2>
            <h2 class="text-lg xl:text-4xl font-extrabold">and greener Bhutan</h2>
        </div>

        <div class="flex w-full xl:w-6/12 mt-2">
            <a href="{{ route('donations.international.get') }}" class="cursor-default flex justify-center w-full capitalize font-bold p-2 bg-[#FCFF5C] text-black">international donation</a>
            <a href="{{ route('donations.local') }}" class="cursor-default flex justify-center w-full capitalize font-bold p-2 bg-black text-[#FCFF5C]">local donation</a>
        </div>
    </div>
    <div class="flex w-full flex-col xl:flex-row">
        <img src="/images/upload/localQR.jpeg" alt="" class="h-auto w-12 xl:w-64" >
        <div class="flex xl:w-3/12 gap-4">
            <form action="{{ route('donations.local.post') }}" method="post" class="w-full xl:pl-3">
                @csrf
                <div>
                    <p class="font-bold">Pleaes Enter The Donation Details after Donating.</p>
                </div>
            <!-- <div>
                <x-input-label for="name" :value="__('Name')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name"/>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div> -->

            <div>
                <label for="journal_number" class='block font-medium text-sm text-white '>
                {{ __('Journal Number') }}
                </label>
                <x-text-input id="journal_number" class="block mt-1 w-full" type="text" name="journal_number" :value="old('journal_number')" required autofocus autocomplete="journal_number" />
                <x-input-error :messages="$errors->get('journal_number')" class="mt-2" />
            </div>

            <div>
                <label for="amount" class='block font-medium text-sm text-white'>
                    {{ __('Amount') }}
                </label>
                <x-text-input id="amount" class="block mt-1 w-full" type="text" name="amount" :value="old('amount')" required autofocus />
                <x-input-error :messages="$errors->get('amount')" class="mt-2" />
            </div>

            <div class="flex flex-col items-start justify-end mt-4">
                <x-primary-button class="">
                    {{ __('Submit') }}
                </x-primary-button>
            </div>
            </form>
        </div>
    </div>
</x-page-layout>