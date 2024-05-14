<section class="flex flex-col items-start sm:items-center w-full sm:flex-row mt-4">
    <x-logo :darkMode="$darkMode"></x-logo>

    <ul class="w-8/12 hidden sm:flex flex-col justify-start sm:flex-row">
        <li><a href="{{ route('pages.home') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">home</a></li>
        <li><a href="{{ route('pages.about') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">about</a></li>
        <li><a href="{{ route('pages.news-and-event') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">news & event</a></li>
        <li><a href="{{ route('pages.contact') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">contact</a></li>
        @auth
            @if(auth()->user()->isDonar())
                <li><a href="{{ route('donations.history') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">History</a></li>
                <li><a href="{{ route('donations.international') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}">Donate</a></li>

            @endif
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a :href="route('logout')"
                    class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 pointer-default {{ $darkMode ? 'text-white' : 'text-black'}}"
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
                <a  class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 {{ $darkMode ? 'text-white' : 'text-black'}}" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </li>
        @endguest
    </ul>
</section>