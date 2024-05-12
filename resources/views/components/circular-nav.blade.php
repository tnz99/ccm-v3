<!-- <button id="our_story_btn" class="radius-50 mr-99  position-fixed black zoom-in-element our-story-btn">Our Story</button>

<nav id="circular_nav" class="circular-nav zoom-in-element">
    <div class="semi-circle-item"><p class="nav-item nav-item-1"><a class="no-underline text-white font-normal fw-700 fs-20 cnav-link" href="/the-people">The People</a><img class="cnav-icon" src="images/cnav-icon.png"></p></div>
    <div class="semi-circle-item"><p class="nav-item nav-item-2"><a class="no-underline text-white font-normal fw-700 fs-20 cnav-link" href="/the-laws">The Laws</a><img class="cnav-icon" src="images/cnav-icon.png"></p></div>
    <div class="semi-circle-item"><p class="nav-item nav-item-3"><a class="no-underline text-white font-normal fw-700 fs-20 cnav-link" href="/the-change">The Change</a><img class="cnav-icon" src="images/cnav-icon.png"></p></div>
    <div class="semi-circle-item"><p class="nav-item nav-item-4"><a class="no-underline text-white font-normal fw-700 fs-20 cnav-link" href="/the-climate">The Climate</a><img class="cnav-icon" src="images/cnav-icon.png"></p></div>
    <div class="semi-circle-item"><p class="nav-item nav-item-5"><a class="no-underline text-white font-normal fw-700 fs-20 cnav-link" href="/the-fauna">The Fauna</a><img class="cnav-icon" src="images/cnav-icon.png"></p></div>
    <div class="semi-circle-item"><p class="nav-item nav-item-6"><a class="no-underline text-white font-normal fw-700 fs-20 cnav-link" href="/the-flora">The Flora</a><img class="cnav-icon" src="images/cnav-icon.png"></p></div>
    <div class="semi-circle-item"><p class="nav-item nav-item-7" style="width: 180px;"><a class="no-underline text-white font-normal fw-700 fs-20 cnav-link" href="/the-kingdom">The Kingdom</a><img class="cnav-icon" src="images/backgrounds/cnav-icon.png"></p></div>
    <div id="hide_circular_nav" class="inner-circle z-1">
        <p class="inner-text ml-50p fw-700 font-normal lh-normal fs-24">Our Story</p>
    </div>
</nav>  -->

    <!-- <div class="bg-green-100">
        <ul>
            <li>Item 1</li>
            <li>Item 2</li>
            <li>Item 3</li>
            <li>Item 4</li>
            <li>Item 5</li>
            <li>Item 6</li>
            <li>Item 7</li>
        </ul>
    </divsm:-right-80> -->

<!-- <nav class="bg-red-200 fixed top-28 hidden sm:block sm:h-wvh sm:w-wvh rounded-full sm:-right-72">
    <div class="hidden sm:flex flex-col gap-4">
        <a class="capitalize text-2xl py-2.5 pl-4 w-auto font-semibold transform origin-center translate-x-[116px] translate-y-[76px]" href="#">The Kingdom</a>
        <a class="capitalize text-2xl py-2.5 pl-4 w-auto font-semibold transform origin-center translate-x-[48px]  translate-y-[70px]" href="#">The Laws</a>
        <a class="capitalize text-2xl py-2.5 pl-4 w-auto font-semibold transform origin-center translate-x-[20px]  translate-y-[72px]" href="#">The People</a>
        <a class="capitalize text-2xl py-2.5 pl-4 w-auto font-semibold transform origin-center translate-x-[5px]   translate-y-[76px]" href="#">The Climate</a>
        <a class="capitalize text-2xl py-2.5 pl-4 w-auto font-semibold transform origin-center translate-x-[20px]  translate-y-[78px]" href="#">The Flora</a>
        <a class="capitalize text-2xl py-2.5 pl-4 w-auto font-semibold transform origin-center translate-x-[48px]  translate-y-[82px]" href="#">The Fauna</a>
        <a class="capitalize text-2xl py-2.5 pl-4 w-auto font-semibold transform origin-center translate-x-[116px] translate-y-[76px]" href="#">The Kingdom</a>
    </div>

    <button class="bg-red-500 w-40 h-40 rounded-full text-xl font-extrabold translate-x-[200px] translate-y-[-230px]">
        Our Story
    </button>
</nav> -->

<!-- <script>
    $(function() {
        $('#inner_button').click(function() {
            $('#circular_nav').hide();
        });
    });
</script> -->
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script>
    $(function () {
        // Close Circular Nav
        $('#inner_button').click(function() {
            $('#inner_button').hide();
            $('#circular_nav').hide();
            $('#open_circular_nav_btn').show();
        });

        // Open Circular Nav
        $('#open_circular_nav_btn').click(function() {
            $('#inner_button').show();
            $('#circular_nav').show();
            $('#open_circular_nav_btn').hide();
        });
    });
</script>

<div class="animate__animated animate__fadeIn animate__faster flex justify-end items-end pb-10 sm:w-2/12 sm:h-full sm:items-center">
    <button id="open_circular_nav_btn" class="bg-yellow-200 h-24 w-24 rounded-full capitalize text-xs font-bold">Our Story</button>
</div>

<nav id="circular_nav" class="animate__animated animate__zoomIn animate__faster bg-gray-800 bg-gradient-to-t fixed hidden sm:h-wvh sm:w-wvh rounded-full md:left-[76%] 2xl:left-[80%] top-0">
    <div class="flex justify-center items-center">
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[15%] left-[22%]"   href="{{ route('pages.story', '1') }}">The Kingdom<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[24%] left-[13%]"  href="{{ route('pages.story', '2') }}">The Flora<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[34%] left-[4%]"  href="{{ route('pages.story', '3') }}">The Fauna<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[46.5%] left-[0%]"    href="{{ route('pages.story', '4') }}">The Climate<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[59%] left-[3%]"  href="{{ route('pages.story', '5') }}">The Change<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[70%] left-[12%]"  href="{{ route('pages.story', '6') }}">The Laws<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[80%] left-[20%]" href="{{ route('pages.story', '7') }}">The People<x-logos.story-nav /></a>
    </div>

    <button id="inner_button" class="hidden bg-yellow-500 w-hwvh h-hwvh rounded-full text-xl text-left pl-10 font-extrabold absolute top-[25%] md:left-[29%] 2xl:left-[30%]">
        Our Story
    </button>
</nav>
