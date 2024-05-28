<x-page-layout backgroundImageName="{{ asset($story->file_path) }}" darkMode="{{ $story->dark_mode }}" cnavBackground="{{ $story->cnav_background }}" :blur="false">
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
                <svg width="20" height="24" viewBox="0 0 38 34" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M38 17.0001C38 17.5636 37.7776 18.1042 37.3817 18.5026L22.6039 33.3777C21.7795 34.2075 20.4427 34.2075 19.6183 33.3777C18.794 32.5479 18.794 31.2023 19.6183 30.3725L30.7922 19.1251H2.11111C0.945145 19.1251 0 18.1737 0 17.0001C0 15.8264 0.945145 14.875 2.11111 14.875L30.7922 14.875L19.6183 3.62762C18.794 2.79774 18.794 1.45227 19.6183 0.622393C20.4427 -0.207464 21.7795 -0.207464 22.6039 0.622393L37.3817 15.4975C37.7776 15.8959 38 16.4365 38 17.0001Z" fill="black"/>
<line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(-0.704783 -0.709422 0.704783 -0.709422 25.3333 17.0001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
<line x1="2" y1="-2" x2="13.5761" y2="-2" transform="matrix(0.704783 -0.709422 -0.704783 -0.709422 10.9778 25.5001)" stroke="black" stroke-width="4" stroke-linecap="round"/>
</svg>
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