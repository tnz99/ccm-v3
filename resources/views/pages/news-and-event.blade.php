<x-page-layout backgroundImageName="{{ asset($first_news->file_path) }}" :darkMode="false" cnavBackground="linear-gradient(270deg, #1f3642 42.11%, rgba(188, 219, 240, 0.40) 101.31%)" :blur="false">
    <div class="flex flex-col justify-between px-4 h-full mt-24 ">
        <div class="flex flex-col ">
            @if (isset($first_news) && $first_news != null)   
                <p class="text-6xl" style="font-weight: 999;">{{ $first_news->title }}<p>
                <p class="leading-8">{{ $first_news->description }}</p>
            @else
            <p class="text-xl" style="font-weight: 999;">No News<p>
            @endif
        </div>
        
        <div class="flex items-end w-full gap-4 mt-16 justify-between xl:mt-0 xl:justify-start xl:pb-16 overflow-x-auto">
            <div class="flex justify-between gap-4">
                @foreach ($news as $index => $item )
                    <a href="{{ route('news.index', ['id' => $item->id]) }}" class="flex items-center justify-center text-center text-xs font-semibold rounded-full bg-yellow-200 hover:bg-yellow-300 w-10 h-10">{{ $index + 1 }}</a> 
                @endforeach
            </div>
        </div>
    </div>
</x-page-layout>