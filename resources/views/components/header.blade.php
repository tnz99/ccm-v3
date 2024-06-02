<section class="hidden xl:flex flex-col xl:flex-row  xl:items-center justify-start w-full mt-8">
    <x-logo :darkMode="$darkMode"></x-logo>
    <nav class="w-full hidden flex-col justify-start gap-2 xl:flex xl:flex-row ml-5">
        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.home')" :active="request()->routeIs('pages.home')">{{ _('Home') }}</x-responsive-home-nav-link>
        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.about')" :active="request()->routeIs('pages.about')">{{ _('About') }}</x-responsive-home-nav-link>
        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.news-and-event')" :active="request()->routeIs('news.index')">{{ _('News & Events') }}</x-responsive-home-nav-link>
        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.contact')" :active="request()->routeIs('pages.contact')">{{ _('Contact') }}</x-responsive-home-nav-link>
        
        @auth
            @if(auth()->user()->isDonar())
            <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donations.history')" :active="request()->routeIs('donations.history')">{{ _('History') }}</x-responsive-home-nav-link>
            <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donations.international.get')" :active="request()->routeIs('donations.international.get')">{{ _('Donate') }}</x-responsive-home-nav-link>
            <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donars.profile')" :active="request()->routeIs('donars.profile')">{{ _('Profile') }}</x-responsive-home-nav-link>
            @endif
            <form method="POST" action="{{ route('logout') }}" class="flex">
                @csrf
                <x-responsive-home-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" :darkMode="$darkMode" :active="false">{{ __('Log Out') }}</x-responsive-home-nav-link>
            </form>
        @endauth

        @guest
        <x-responsive-home-nav-link :href="route('login')" :darkMode="$darkMode" :active="request()->routeIs('login')">{{ __('Login') }}</x-responsive-home-nav-link>
        @endguest

        <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js" integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>
        <script>
            $(function() {
                var audio = $("#audio")[0]; // Get the DOM element for the audio
                $("#playButton").click(function(){
                    audio.play(); // Play the audio
                    $(this).addClass('hidden');
                    $("#pauseButton").removeClass('hidden');
                });

                $("#pauseButton").click(function(){
                    audio.pause(); // Pause the audio
                    $(this).addClass('hidden');
                    $("#playButton").removeClass('hidden');
                });
            });
        </script>

        <a class="custom-audio hover:font-semibold uppercase text-xs  hover:bg-[#FCFF5C] p-2 px-5 items-center justify-center pt-3">
            <audio id="audio" src="{{ asset('audios/a1.m4a') }}" preload="auto" type="audio/mp4" loop></audio>
            
            <button id="playButton" class="play">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="{{ $darkMode ? 'white' : 'black'}}" stroke="{{ $darkMode ? 'white' : 'black'}}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-volume-2"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M15.54 8.46a5 5 0 0 1 0 7.07"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14"/></svg>
            </button>

            <button id="pauseButton" class="play hidden">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="{{ $darkMode ? 'white' : 'black'}}" stroke="{{ $darkMode ? 'white' : 'black'}}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-volume-x"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><line x1="22" x2="16" y1="9" y2="15"/><line x1="16" x2="22" y1="9" y2="15"/></svg>
            </button>
        </a>
    </nav>
</section>

<!-- Mobile -->
<section class="xl:hidden flex-col items-start w-full">
    <nav>
        <div class="flex flex-wrap items-center justify-between mx-auto">
            <a href="/" class="flex items-center">
                <x-logo :darkMode="$darkMode"></x-logo>
            </a>

            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm {{ $darkMode ? 'text-white' : 'text-black'}} rounded-lg xl:hidden" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            
            <div class="hidden w-full xl:block xl:w-auto" id="navbar-default">
                <nav class="font-medium flex flex-col p-4 xl:p-0 mt-4 rounded-lg xl:flex-row xl:space-x-8 rtl:space-x-reverse xl:mt-0 xl:border-0 gap-6">
                    <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.home')" :active="request()->routeIs('pages.home')">{{ _('Home') }}</x-responsive-home-nav-link>
                    <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.about')" :active="request()->routeIs('pages.about')">{{ _('About') }}</x-responsive-home-nav-link>
                    <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.news-and-event')" :active="request()->routeIs('pages.news-and-event')">{{ _('News & Events') }}</x-responsive-home-nav-link>
                    <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.contact')" :active="request()->routeIs('pages.contact')">{{ _('Contact') }}</x-responsive-home-nav-link>
                    @auth
                        @if(auth()->user()->isDonar())
                        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donations.history')" :active="request()->routeIs('donations.history')">{{ _('History') }}</x-responsive-home-nav-link>
                        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donations.international.get')" :active="request()->routeIs('donations.international')">{{ _('Donate') }}</x-responsive-home-nav-link>
                        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donars.profile')" :active="request()->routeIs('donars.profile')">{{ _('Profile') }}</x-responsive-home-nav-link>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-responsive-home-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" :darkMode="$darkMode" :active="false">{{ __('Log Out') }}</x-responsive-home-nav-link>
                        </form>
                    @endauth

                    @guest
                    <x-responsive-home-nav-link :href="route('login')" :darkMode="$darkMode" :active="request()->routeIs('login')">{{ __('Login') }}</x-responsive-home-nav-link>
                    @endguest
                </nav>
            </div>
        </div>
    </nav>
</section>
