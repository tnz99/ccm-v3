<x-page-layout backgroundImageName="/images/upload/donate.png" :darkMode='false' cnavBackground="linear-gradient(270deg, #DA8495 42.11%, rgba(216, 161, 164, 0.56) 101.31%)" :blur="false">
    <div class="flex flex-col mt-8 w-full">
        <div class="flex flex-col">
            <h2 class="text-2xl font-extrabold">Donate to a cleaner</h2>
            <h2 class="text-2xl font-extrabold">and greener Bhutan</h2>
        </div>

        <div class="flex w-6/12 mt-2">
            <a href="{{ route('donations.international') }}" class="cursor-default flex justify-center w-full capitalize font-bold p-2 bg-black text-yellow-400">international donation</a>
            <a href="{{ route('donations.local') }}" class="cursor-default flex justify-center w-full capitalize font-bold p-2 text-black bg-yellow-400">local donation</a>
        </div>
    </div>
</x-page-layout>