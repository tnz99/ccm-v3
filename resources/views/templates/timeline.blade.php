<x-page-layout backgroundImageName="/{{ $story->file_path }}" :darkMode="true" cnavBackground="">
    <div class="flex flex-col pt-12 w-full h-full justify-between">
        <div class="flex gap-2 w-full items-start">
            <div class="w-4/12">
                <h2 class="text-5xl font-extrabold" style="color: {{ $story->title_text_color }};">{{ $story->title }}</h2>
                <p class="font-extrabold mt-4" style="color: {{$story->sub_title_text_color}};">{{ $story->sub_title }}</p>
            </div>

            <div class="w-6/12">
                <p class="font-bold text-xs" style="color: {{$story->description_text_color}};">{{ $story->description }}</p>
            </div>
        </div>

        <div class="flex gap-2 overflow-x-scroll w-10/12">
            @foreach ($stories as $story)
                <a class="p-2 pb-4" href="{{ route('pages.timeline', ['id' => $timeline->id, 'story_id' => $story->id]) }}">{{ $story->title }}</a>
            @endforeach
        </div>

        <div class="flex justify-between items-center w-full mt-16 xl:mt-0 pb-16">
            <div class="flex justify-start gap-5 w-full">
                @foreach ($nav_links as $index => $nav_link)
                    @if (isset($nav_link))
                        @if (get_class($nav_link) == 'App\Models\Story')
                        <a href="{{ route('pages.main-story', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                        @elseif(get_class($nav_link) == 'App\Models\Gallery')
                        <a href="{{ route('pages.gallery', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
                        @elseif(get_class($nav_link) == 'App\Models\Timeline')
                        <a href="{{ route('pages.timeline', $nav_link->id) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a>
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
    class="prayer-wheel-position prayer-wheel"
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