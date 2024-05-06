<section class="flex flex-col items-center w-full sm:flex-row mt-2 h-11/12">
    <x-logo></x-logo>

    <ul class="w-8/12 hidden sm:flex flex-col justify-end sm:flex-row">
        <li><a href="{{ route('pages.home') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5">home</a></li>
        <li><a href="{{ route('pages.about') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5">about</a></li>
        <li><a href="{{ route('pages.news-and-event') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5">news & event</a></li>
        <li><a href="{{ route('pages.contact') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5">contact</a></li>
        @auth
            @if(auth()->user()->isDonar())
                <li><a href="{{ route('donations.history') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5">History</a></li>
                <li><a href="{{ route('donations.international') }}" class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5">Donate</a></li>

            @endif
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <a :href="route('logout')"
                    class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5 pointer-default"
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
                <a  class="uppercase text-sm font-thin hover:bg-yellow-300 p-2 px-5" href="{{ route('login') }}">
                    {{ __('Login') }}
                </a>
            </li>
        @endguest
    </ul>
</section>