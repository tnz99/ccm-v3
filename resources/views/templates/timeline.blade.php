<x-page-layout backgroundImageName="{{ asset($story->file_path) }}" darkMode="{{ $story->dark_mode }}" cnavBackground="{{ $story->cnav_background }}">
    <div class="flex flex-col xl:px-10 xl:pt-16 w-full h-full justify-between">
        <div class="flex gap-2 w-full items-start flex-col">
            <div class="w-full">
                <h2 class="text-5xl font-extrabold" style="color: {{ $story->title_text_color }};">{{ $story->title }}</h2>
            </div>

            <div class="flex flex-col xl:flex-row w-full xl:w-10/12 gap-4">
                <p class="font-extrabold mt-4 w-full xl:w-5/12" style="color: {{$story->sub_title_text_color}};">{{ $story->sub_title }}</p>
                <p class="font-thin text-xs mt-4 w-full xl:w-7/12" style="color: {{$story->description_text_color}};">{{ $story->description }}</p>
            </div>
        </div>

        <div class="flex gap-2 mt-4 font-extrabold xl:gap-2 w-full xl:w-10/12 overflow-x-scroll xl:overflow-auto flex-wrap">
            @foreach ($stories as $story)
                <a class="underline xl:no-underline xl:p-2 xl:pb-4" href="{{ route('pages.timeline', ['id' => $timeline->id, 'story_id' => $story->id]) }}">{{ $story->title }}</a>
            @endforeach
        </div>

        <div class="flex justify-start items-center w-full mt-16 xl:mt-0 xl:pb-16 gap-4">
            <div class="flex justify-start gap-4">
                @foreach ($nav_links as $index => $nav_link)
                    @if (isset($nav_link))
                        @if (get_class($nav_link) == 'App\Models\Story')
                        <a href="{{ route('pages.main-story', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                        @elseif(get_class($nav_link) == 'App\Models\Gallery')
                        <a href="{{ route('pages.gallery', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                        @elseif(get_class($nav_link) == 'App\Models\Timeline')
                            @if ($nav_link->stories->count() >= 1)
                                <a href="{{ route('pages.timeline', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                            @endif
                        @endif
                    @endif
                @endforeach
            </div>

            @if($timeline->headline_id < 7)
            <div class="flex items-center gap-2 text-xs font-semibold {{ $timeline->dark_mode ? 'text-white' : 'text-black'}}">
                Next Story
                <a href="{{ route('pages.story', $timeline->headline_id + 1) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-last"><path d="m7 18 6-6-6-6"/><path d="M17 6v12"/></svg>
                </a>
            </div>
            @endif
        </div>
    </div>

<style>
    .prayer-wheel-position {
        position: fixed;
        right: -350px;
        bottom: -170px;
        z-index: -1000;
        height: 130%;
    }
</style>

<img 
    id="prayer-wheel"
    src="/images/prayer-wheel/1.png"
    class="prayer-wheel-position prayer-wheel hidden xl:block"
>
<script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
<script>
$(function(){
   let prayerWheel = $('#prayer-wheel');

   let prayerWheelFrames = [
      '/images/prayer-wheel/1.png',
      '/images/prayer-wheel/2.png',
      '/images/prayer-wheel/3.png',
      '/images/prayer-wheel/4.png',
      '/images/prayer-wheel/5.png',
      '/images/prayer-wheel/6.png',
      '/images/prayer-wheel/1.png',
      '/images/prayer-wheel/2.png',
      '/images/prayer-wheel/3.png',
      '/images/prayer-wheel/4.png',
      '/images/prayer-wheel/5.png'
   ];
     
   // let currentFrameIndex = 0;

   function spinwheel(index) {
      if (index < prayerWheelFrames.length) {
        // Process the current element
        // console.log("Index: " + index + ", Value: " + prayerWheelFrames[index]);
        prayerWheel.attr("src", prayerWheelFrames[index]);

        // Increment the index for the next iteration
        index++;

        // Set a delay using setTimeout
        setTimeout(function() {
          // Call the function recursively after the delay
          spinwheel(index);
        }, 100); // 1000 milliseconds = 1 second
      }
    }
   spinwheel(0)
});
</script>
</x-page-layout>