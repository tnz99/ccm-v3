<x-page-layout backgroundImageName="/images/upload/spring.png" :darkMode='false'>
    <div class="flex flex-col mt-8 w-full">
        <div class="flex flex-col">
            <h2 class="text-2xl font-extrabold">Donate to a cleaner</h2>
            <h2 class="text-2xl font-extrabold">and greener Bhutan</h2>
        </div>

        <div class="flex w-6/12 mt-2">
            <a href="{{ route('donations.international') }}" class="cursor-default flex justify-center w-full capitalize font-bold p-2 bg-yellow-400 text-black">international donation</a>
            <a href="{{ route('donations.local') }}" class="cursor-default flex justify-center w-full capitalize font-bold p-2 bg-black text-yellow-400">local donation</a>
        </div>
    </div>
</x-page-layout>