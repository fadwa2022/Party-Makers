<nav class="relative px-4 py-4 flex justify-between items-center bg-transparent">
    <div class="lg:hidden">
        <button class="navbar-burger flex items-center text-blue-600 p-3">
            <svg class="block h-4 w-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
            </svg>
        </button>
    </div>
    <ul class="hidden absolute top-1/2 left-1/2 transform -translate-y-1/2 -translate-x-1/2 lg:flex lg:mx-auto lg:flex lg:items-center lg:w-auto lg:space-x-11">

        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>

        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" :href="route('tickets')" :active="request()->routeIs('tickets')">
            {{ __('Tickets') }}
        </x-nav-link>

        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" :href="route('partymakers')" :active="request()->routeIs('partymakers')">
            {{ __('Makers') }}
        </x-nav-link>

        <li>
            <a class="text-3xl font-bold leading-none" href="#">
                <x-application-logo-2 />
            </a>
        </li>
        @if (optional(auth()->user())->Role !== 'admin')
        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" :href="route('Monprofile')" :active="request()->routeIs('Monprofile')">
            {{ __('profile') }}
        </x-nav-link>
        @endif
        @auth
    @if (optional(auth()->user())->Role == 'dj')
        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" href="/profileDJ/{{auth()->id()}}" >
            {{ __('DJprofile') }}
        </x-nav-link>
        @endif
        @endauth
        @if (optional(auth()->user())->Role !== 'admin')
        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" :href="route('sponsor')" :active="request()->routeIs('sponsor')">
            {{ __('Sponsor') }}
        </x-nav-link>
        @endif
        @auth
        @if (optional(auth()->user())->Role == 'admin')
        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" href="dashboard" :active="request()->routeIs('dashboard')">
            {{ __('Dashbord') }}
        </x-nav-link>
        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" href="profile" :active="request()->routeIs('profile')">
            {{ __('Profile') }}
        </x-nav-link>
        @endif
        @endauth

        <x-nav-link class="font-medium text-sm text-gray-400 hover:text-gray-500" :href="route('login')" :active="request()->routeIs('login')">
            {{ __('Contact') }}
        </x-nav-link>

    </ul>
    @auth
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <x-nav-link class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-black  rounded-xl transition duration-200" :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">

            <div class="text-black font-bold"> {{ __('Log Out') }}</div>
        </x-nav-link>
    </form>

    @else
    <x-nav-link class="hidden lg:inline-block lg:ml-auto lg:mr-3 py-2 px-6 bg-gray-50 hover:bg-gray-100 text-sm text-black  rounded-xl transition duration-200" :href="route('login')" :active="request()->routeIs('login')">
        <div class="text-black font-bold">{{ __('Sign In') }}</div>
    </x-nav-link>
    <x-nav-link class="hidden lg:inline-block py-2 px-6 bg-blue-500 hover:bg-blue-600 text-sm text-white font-bold rounded-xl transition duration-200" :href="route('register')" :active="request()->routeIs('register')">
        <div class="text-white font-bold"> {{ __('Sign up') }}</div>
    </x-nav-link>
    @endauth

</nav>
<!-- mobile -->
<div class="navbar-menu relative z-50 hidden">
    <div class="navbar-backdrop fixed inset-0 bg-gray-800 opacity-25"></div>
    <nav class="fixed top-0 left-0 bottom-0 flex flex-col w-5/6 max-w-sm py-6 px-6 bg-white border-r overflow-y-auto">
        <div class="flex items-center mb-8">
            <a class="text-3xl font-bold leading-none" href="#">
                <x-application-logo-2 class="block w-20 h-20 mt-0 w-auto fill-current text-gray-800 dark:text-gray-200" />
            </a>
            <button class="navbar-close">
                <svg class="h-6 w-6 text-gray-400 cursor-pointer hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
        </div>
        <div>
            <ul>
                <li class="mb-1">
                    <x-nav-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="route('home')">Home</x-nav-link>
                </li>
                <li class="mb-1">
                    <x-nav-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="route('login')">About</x-nav-link>

                </li>
                <li class="mb-1">
                    <x-nav-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="route('login')">Services</x-nav-link>

                </li>
                <li class="mb-1">
                    <x-nav-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="route('login')">Pricing</x-nav-link>
                </li>
                <li class="mb-1">
                    <x-nav-link class="block p-4 text-sm font-semibold text-gray-400 hover:bg-blue-50 hover:text-blue-600 rounded" :href="route('login')">Contact</x-nav-link>
                </li>
            </ul>
        </div>
        <div class="mt-auto">
            <div class="pt-6">

                <a class="block px-4 py-3 mb-3 leading-loose text-xs text-center font-semibold leading-none bg-gray-50 hover:bg-gray-100 rounded-xl" href="\login">Sign in</a>
                <a class="block px-4 py-3 mb-2 leading-loose text-xs text-center text-white font-semibold bg-blue-600 hover:bg-blue-700  rounded-xl" href="\register">Sign Up</a>
            </div>
            <p class="my-4 text-xs text-center text-gray-400">
                <span>Copyright © fadwa</span>
            </p>
        </div>
    </nav>
</div>

<!-- script nav -->
<script>
    // Burger menus
    document.addEventListener('DOMContentLoaded', function() {
        // open
        const burger = document.querySelectorAll('.navbar-burger');
        const menu = document.querySelectorAll('.navbar-menu');

        if (burger.length && menu.length) {
            for (var i = 0; i < burger.length; i++) {
                burger[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        // close
        const close = document.querySelectorAll('.navbar-close');
        const backdrop = document.querySelectorAll('.navbar-backdrop');

        if (close.length) {
            for (var i = 0; i < close.length; i++) {
                close[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }

        if (backdrop.length) {
            for (var i = 0; i < backdrop.length; i++) {
                backdrop[i].addEventListener('click', function() {
                    for (var j = 0; j < menu.length; j++) {
                        menu[j].classList.toggle('hidden');
                    }
                });
            }
        }
    });
</script>
