<x-page-layout backgroundImageName="images/home.png" :darkMode="false" cnavBackground="linear-gradient(270deg, #151A21 42.11%, rgba(23, 28, 36, 0.06) 101.31%)" :blur="false">
    <div class="snow"></div>
    <div class="w-full text-center mt-14 xl:mt-48 xl:items-start xl:justify-center xl:text-left xl:w-6/12 flex flex-col gap-3">
        <p class="text-2xl xl:text-4xl font-inter font-light">Bhutan Believe:</p>
        <p class="text-4xl font-bold xl:text-6xl font-inter">A Climate</p>
        <p class="text-4xl font-bold xl:text-6xl font-inter">Change Odyssey</p>
    </div>

    <a id="donate-button" href="{{ route('donations.international.get') }}" class="w-36 py-2 rounded-sm cursor-default flex justify-center gap-5 items-center bg-[#FCFF5C] hover:bg-yellow-300 xl:w-52">
        <p class="text-xl font-semibold capitalize cursor-default">donate</p>
        <svg width="20" height="24" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg" class="-rotate-90">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M38 17.0001C38 17.5636 37.7776 18.1042 37.3817 18.5026L22.6039 33.3777C21.7795 34.2075 20.4427 34.2075 19.6183 33.3777C18.794 32.5479 18.794 31.2023 19.6183 30.3725L30.7922 19.1251H2.11111C0.945145 19.1251 0 18.1737 0 17.0001C0 15.8264 0.945145 14.875 2.11111 14.875L30.7922 14.875L19.6183 3.62762C18.794 2.79774 18.794 1.45227 19.6183 0.622393C20.4427 -0.207464 21.7795 -0.207464 22.6039 0.622393L37.3817 15.4975C37.7776 15.8959 38 16.4365 38 17.0001Z" fill="black"/>
            <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.704783 -0.709422 0.704783 -0.709422 25.3333 17.0001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
            <line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(0.704783 -0.709422 -0.704783 -0.709422 10.9778 25.5001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
        </svg>
    </a>

    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
    <script>
    $(function() {
        $("#donate-button").hover(
            function() {
                $(this).find('svg').removeClass('-rotate-90');
            },
            function() {
                $(this).find('svg').addClass('-rotate-90');
            }
        );
    });
    </script>
</x-page-layout>