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

        $('.c-nav-link').hover(
            function() {
                $(this).find('img').show();
            },
            function() {
                $(this).find('img').hide();
            }
        );
    });
</script>

<div class="hidden animate__animated animate__fadeIn animate__faster xl:flex xl:justify-start items-end pb-10 xl:w-2/12 xl:h-full xl:items-center">
    <button id="open_circular_nav_btn" class="bg-[#FCFF5C] h-24 w-24 rounded-full capitalize text-xs font-bold">Our Story</button>
</div>

<div data-modal-target="default-modal" data-modal-toggle="default-modal" class="flex self-end justify-self-end animate__animated animate__fadeIn animate__faster xl:hidden items-end pb-10">
    <button class="bg-yellow-200 h-24 w-24 rounded-full capitalize text-xs font-bold">Our Story</button>
</div>

<nav id="circular_nav" class="animate__animated animate__zoomIn animate__faster fixed hidden xl:h-wvh xl:w-wvh rounded-full xl:left-[74%] top-0" style="background: {{ $cnavBackground }};">
    <div class="flex justify-center items-center">
        <a class="c-nav-link hover:bg-navitem-hover flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left {{ $darkMode ? 'text-white' : 'text-black'}} rounded-xl font-medium absolute top-[15%] left-[22%]"   href="{{ route('pages.story', '1') }}">The Kingdom<x-logos.story-nav/></a>
        <a class="c-nav-link hover:bg-navitem-hover flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left {{ $darkMode ? 'text-white' : 'text-black'}} rounded-xl font-medium absolute top-[24%] left-[13%]"  href="{{ route('pages.story', '2') }}">The Flora<x-logos.story-nav /></a>
        <a class="c-nav-link hover:bg-navitem-hover flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left {{ $darkMode ? 'text-white' : 'text-black'}} rounded-xl font-medium absolute top-[34%] left-[5%]"  href="{{ route('pages.story', '3') }}">The Fauna<x-logos.story-nav /></a>
        <a class="c-nav-link hover:bg-navitem-hover flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left {{ $darkMode ? 'text-white' : 'text-black'}} rounded-xl font-medium absolute top-[46.5%] left-[2%]"    href="{{ route('pages.story', '4') }}">The Climate<x-logos.story-nav /></a>
        <a class="c-nav-link hover:bg-navitem-hover flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left {{ $darkMode ? 'text-white' : 'text-black'}} rounded-xl font-medium absolute top-[59%] left-[4%]"  href="{{ route('pages.story', '5') }}">The Change<x-logos.story-nav /></a>
        <a class="c-nav-link hover:bg-navitem-hover flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left {{ $darkMode ? 'text-white' : 'text-black'}} rounded-xl font-medium absolute top-[70%] left-[12%]"  href="{{ route('pages.story', '6') }}">The Laws<x-logos.story-nav /></a>
        <a class="c-nav-link hover:bg-navitem-hover flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left {{ $darkMode ? 'text-white' : 'text-black'}} rounded-xl font-medium absolute top-[80%] left-[20%]" href="{{ route('pages.story', '7') }}">The People<x-logos.story-nav /></a>
    </div>

    <button id="inner_button" class="hidden border w-hwvh h-hwvh rounded-full text-xl text-left pl-10 font-extrabold absolute top-[25%] md:left-[29%] 2xl:left-[30%] text-yellow-200">
        Our Story
    </button>
</nav>


<!-- Main modal -->
<div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="flex justify-end items-center flex-col p-6 bg-yellow-200 rounded-xl">
            <a class="hover:bg-yellow-100 flex gap-4 capitalize text-sm py-2 px-6 w-auto text-left text-black rounded-xl font-medium" href="{{ route('pages.story', '1') }}">The Kingdom<x-logos.story-nav/></a>
            <a class="hover:bg-yellow-100 flex gap-4 capitalize text-sm py-2 px-6 w-auto text-left text-black rounded-xl font-medium" href="{{ route('pages.story', '2') }}">The Flora<x-logos.story-nav /></a>
            <a class="hover:bg-yellow-100 flex gap-4 capitalize text-sm py-2 px-6 w-auto text-left text-black rounded-xl font-medium" href="{{ route('pages.story', '3') }}">The Fauna<x-logos.story-nav /></a>
            <a class="hover:bg-yellow-100 flex gap-4 capitalize text-sm py-2 px-6 w-auto text-left text-black rounded-xl font-medium" href="{{ route('pages.story', '4') }}">The Climate<x-logos.story-nav /></a>
            <a class="hover:bg-yellow-100 flex gap-4 capitalize text-sm py-2 px-6 w-auto text-left text-black rounded-xl font-medium" href="{{ route('pages.story', '5') }}">The Change<x-logos.story-nav /></a>
            <a class="hover:bg-yellow-100 flex gap-4 capitalize text-sm py-2 px-6 w-auto text-left text-black rounded-xl font-medium" href="{{ route('pages.story', '6') }}">The Laws<x-logos.story-nav /></a>
            <a class="hover:bg-yellow-100 flex gap-4 capitalize text-sm py-2 px-6 w-auto text-left text-black rounded-xl font-medium" href="{{ route('pages.story', '7') }}">The People<x-logos.story-nav /></a>
        </div>
    </div>
</div>

