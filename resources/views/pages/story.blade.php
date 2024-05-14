<x-page-layout  backgroundImageName="{{ asset($story->file_path) }}" :darkMode="$story->dark_mode" :cnavBackground="$story->cnav_background">
    <div class="flex flex-col sm:gap-44 pt-12">
        <div class="flex flex-col gap-2">
            <h1 class="text-6xl font-extrabold {{ $story->dark_mode ? 'text-white' : 'text-black'}}">{{ $story->title }}</h1>
            <p class="w-8/12 {{ $story->dark_mode ? 'text-white' : 'text-black'}}">{{ $story->description }}</p>
        </div>
        
        <div class="flex justify-between items-center w-8/12 mt-16 sm:mt-0">
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
            @if ($story->headline_id < 7)
            <div class="flex items-center gap-2 text-xs font-semibold {{ $story->dark_mode ? 'text-white' : 'text-black'}}">
                Next Story
                <a href="{{ route('pages.story', $story->headline_id + 1) }}"class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-last"><path d="m7 18 6-6-6-6"/><path d="M17 6v12"/></svg>
                </a>
                
            </div>
            @endif
        </div>
    </div>
</x-page-layout>