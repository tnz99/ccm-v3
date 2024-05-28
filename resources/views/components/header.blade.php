<section class="hidden xl:flex flex-col items-start xl:items-center w-full xl:flex-row mt-4">
    <x-logo :darkMode="$darkMode"></x-logo>

    <ul class="w-full hidden xl:flex flex-col justify-center xl:flex-row">
        <li><a href="{{ route('pages.home') }}" class="font-extrabold uppercase text-sm  hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">home</a></li>
        <li><a href="{{ route('pages.about') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">about</a></li>
        <li><a href="{{ route('pages.news-and-event') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">news & event</a></li>
        <li><a href="{{ route('pages.contact') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">contact</a></li>
        @auth
            @if(auth()->user()->isDonar())
                <li><a href="{{ route('donations.history') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">History</a></li>
                <li><a href="{{ route('donations.international') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">Donate</a></li>
                <li><a href="{{ route('donars.profile') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">Profile</a></li>

            @endif
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a :href="route('logout')"
                    class=" uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 pointer-default {{ $darkMode ? 'text-white' : 'text-black'}}"
                    onclick="
                        event.preventDefault(); this.closest('form').submit();
                    "
                >
                    {{ __('Log Out') }}
                </a>
            </form>
        @endauth

        @guest
            <li>
                <a  class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </li>
        @endguest
    </ul>
</section>


<section class="xl:hidden flex-col items-start xl:items-center w-full xl:flex-row">
    <nav>
        <div class="max-w-screen-xl flex flex-wrap items-start justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <x-logo :darkMode="$darkMode"></x-logo>
            </a>

            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm {{ $darkMode ? 'text-white' : 'text-black'}} rounded-lg md:hidden" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
            
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 gap-6">
                    <li><a href="{{ route('pages.home') }}" class="font-extrabold uppercase text-sm  hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">home</a></li>
                    <li><a href="{{ route('pages.about') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">about</a></li>
                    <li><a href="{{ route('pages.news-and-event') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">news & event</a></li>
                    <li><a href="{{ route('pages.contact') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">contact</a></li>
                    @auth
                        @if(auth()->user()->isDonar())
                        <li><a href="{{ route('donations.history') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">History</a></li>
                        <li><a href="{{ route('donations.international') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">Donate</a></li>
                        <li><a href="{{ route('donars.profile') }}" class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">Profile</a></li>
                        @endif
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a :href="route('logout')"
                                class=" uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 pointer-default {{ $darkMode ? 'text-white' : 'text-black'}}"
                                onclick="
                                    event.preventDefault(); this.closest('form').submit();
                                "
                            >
                                {{ __('Log Out') }}
                            </a>
                        </form>
                    @endauth

                    @guest
                    <li>
                        <a  class="uppercase text-sm font-extrabold hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>
</section>
