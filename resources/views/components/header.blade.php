<section class="hidden xl:flex flex-col xl:flex-row  xl:items-center justify-start w-full mt-8">
    <x-logo :darkMode="$darkMode"></x-logo>
    <nav class="w-full hidden flex-col justify-start gap-2 xl:flex xl:flex-row ml-5">
        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.home')" :active="request()->routeIs('pages.home')">{{ _('Home') }}</x-responsive-home-nav-link>
        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.about')" :active="request()->routeIs('pages.about')">{{ _('About') }}</x-responsive-home-nav-link>
        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.news-and-event')" :active="request()->routeIs('pages.news-and-event')">{{ _('News & Events') }}</x-responsive-home-nav-link>
        <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('pages.contact')" :active="request()->routeIs('pages.contact')">{{ _('Contact') }}</x-responsive-home-nav-link>
        
        @auth
            @if(auth()->user()->isDonar())
            <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donations.history')" :active="request()->routeIs('donations.history')">{{ _('History') }}</x-responsive-home-nav-link>
            <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donations.international.get')" :active="request()->routeIs('donations.international.get')">{{ _('Donate') }}</x-responsive-home-nav-link>
            <x-responsive-home-nav-link :darkMode="$darkMode" :href="route('donars.profile')" :active="request()->routeIs('donars.profile')">{{ _('Profile') }}</x-responsive-home-nav-link>
            @endif
            <form method="POST" action="{{ route('logout') }}" class="flex">
                @csrf
                <x-responsive-home-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" :darkMode="$darkMode">{{ __('Log Out') }}</x-responsive-home-nav-link>
            </form>
        @endauth

        @guest
        <x-responsive-home-nav-link :href="route('login')" :darkMode="$darkMode" :active="request()->routeIs('login')">{{ __('Login') }}</x-responsive-home-nav-link>
        @endguest

        <audio src=""></audio>
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
                            <x-responsive-home-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" :darkMode="$darkMode">{{ __('Log Out') }}</x-responsive-home-nav-link>
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
