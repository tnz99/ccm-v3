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

<nav id="circular_nav" class="animate__animated animate__zoomIn animate__faster bg-gradient-to-t fixed hidden sm:h-wvh sm:w-wvh rounded-full md:left-[76%] 2xl:left-[80%] top-0" style="background: {{ $cnavBackground }};">
    <div class="flex justify-center items-center">
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[15%] left-[22%]"   href="{{ route('pages.story', '1') }}">The Kingdom<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[24%] left-[13%]"  href="{{ route('pages.story', '2') }}">The Flora<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[34%] left-[4%]"  href="{{ route('pages.story', '3') }}">The Fauna<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[46.5%] left-[0%]"    href="{{ route('pages.story', '4') }}">The Climate<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[59%] left-[3%]"  href="{{ route('pages.story', '5') }}">The Change<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[70%] left-[12%]"  href="{{ route('pages.story', '6') }}">The Laws<x-logos.story-nav /></a>
        <a class="hover:bg-gradient-to-l from-black to-white flex gap-4 text-white capitalize text-sm py-2 px-6 w-auto text-left rounded-xl font-medium absolute top-[80%] left-[20%]" href="{{ route('pages.story', '7') }}">The People<x-logos.story-nav /></a>
    </div>

    <button id="inner_button" class="hidden w-hwvh h-hwvh rounded-full text-xl text-left pl-10 font-extrabold absolute top-[25%] md:left-[29%] 2xl:left-[30%]">
        Our Story
    </button>
</nav>
