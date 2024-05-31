<x-page-layout backgroundImageName="/images/upload/donate.png" :darkMode='false' cnavBackground="linear-gradient(270deg, #BABC46 42%, rgba(188, 219, 240, 0.40) 101.31%)" :blur="false">
    <div class="flex flex-col mt-8 w-full">
        <div class="flex flex-col">
            <h2 class="text-4xl font-extrabold">Donate to a cleaner</h2>
            <h2 class="text-4xl font-extrabold">and greener Bhutan</h2>
        </div>

        <div class="flex w-6/12 mt-2">
            <a href="{{ route('donations.international.get') }}" class="cursor-default flex justify-center w-full capitalize font-bold p-2 bg-black text-[#FCFF5C]">international donation</a>
            <a href="{{ route('donations.local') }}" class="cursor-default flex justify-center w-full capitalize font-bold p-2 text-black bg-[#FCFF5C]">local donation</a>
        </div>
    </div>
    <div><img src="/images/upload/localQR.jpeg" alt="" class="h-auto w-64" ></div>
</x-page-layout>