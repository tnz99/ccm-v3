<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

<script>
    $(function() {
        $('.option').click(function() {
           $('.option').removeClass('active');
           $(".option").find(".image").removeClass('active');
           $(".option").find(".label").removeClass('active');
           $(".option").find(".description").removeClass('active');

           $(this).addClass("active");
           $(this).find(".image").addClass('active');
           $(this).find(".label").addClass('active');
           $(this).find(".description").addClass('active');
        });
    });
</script>

<x-page-layout backgroundImageName="{{ $gallery->file_path }}" :darkMode="$gallery->dark_mode" :cnavBackground="$gallery->cnav_background">
    <div class="flex flex-col lg:gap-4">
        <div class="options flex gap-2 w-12/12 rounded-md">
            @foreach($gallery_items as $gallery_item)
                <div class="option" style="background-color: {{ $gallery->color }}" class="xl:h-96">
                    <div class="flex">
                        <div style="background-image: url('/{{ $gallery_item->file_path }}');" class="image" >
                            <div class="label">
                                <div class="info">
                                    <p>{{ $gallery_item->title }}<p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="description">
                        <p class="">{{ $gallery_item->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="text-4xl font-extrabold {{ $gallery->dark_mode ? 'text-white' : 'text-black'}}">
            {{ $gallery->title }}
        </div>

        <div class="flex justify-between items-center w-[100vw] lg:mt-[5%] fixed bottom-10 ">
            <div class="flex justify-between gap-4">
                @foreach ($nav_links as $index => $nav_link)
                    @if (get_class($nav_link) == 'App\Models\Story')
                        <a href="{{ route('pages.main-story', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                    @elseif(get_class($nav_link) == 'App\Models\Gallery')
                        <a href="{{ route('pages.gallery', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                    @elseif(get_class($nav_link) == 'App\Models\Timeline')
                        <a href="{{ route('pages.timeline', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                    @endif
                @endforeach
            </div>

            <div class="flex items-center gap-2 text-xs font-semibold {{ $gallery->dark_mode ? 'text-white' : 'text-black'}}">
                Next Story
                <a class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10"href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-last"><path d="m7 18 6-6-6-6"/><path d="M17 6v12"/></svg>
                </a>
            </div>
        </div>
    </div>
</x-page-layout>