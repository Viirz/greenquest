<nav id="navbar" x-data="{ open: false }" class="fixed top-0 w-full z-50" style="background-color: rgba(88, 128, 77, 1); border-color: rgba(88, 128, 77, 1)">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-20">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-12 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="url('/')" :active="request()->is('/')" style="color: #ffffff; font-size: 1.075rem;">
                        {{ __('Home') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" onclick="scrollToTreeDonation(event)" :active="request()->is('donation')" style="color: #ffffff; font-size: 1.075rem;">
                        {{ __('Donation') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" onclick="scrollToMap(event)" :active="request()->is('map')" style="color: #ffffff; font-size: 1.075rem;">
                        {{ __('Map') }}
                    </x-nav-link>
                    <x-nav-link :href="route('dashboard')" onclick="scrollToNews(event)" :active="request()->is('news')" style="color: #ffffff; font-size: 1.075rem;">
                        {{ __('News') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48" x-data="{ open: false }" @click.away="open = false">
                    <x-slot name="trigger">
                        <button @click.stop="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                            <div class="flex flex-col justify-around w-6 h-6">
                                <div class="w-full h-0.5 bg-black"></div>
                                <div class="w-full h-0.5 bg-black"></div>
                                <div class="w-full h-0.5 bg-black"></div>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        @if(app('App\Http\Middleware\CheckIfAdmin')->checkIfUserIsAdmin(auth()->user()))
                        <!-- Admin menu goes here -->
                            <x-dropdown-link :href="url('/admin')">
                                {{ __('Admin') }}
                            </x-dropdown-link>
                        @endif

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>

<script>
    window.onscroll = function() {
        var navbar = document.getElementById('navbar');
        if (window.pageYOffset > 0) {
            navbar.style.backgroundColor = 'rgba(0, 0, 0, 0.5)';
        } else {
            navbar.style.backgroundColor = 'rgba(88, 128, 77, 1)';
        }
    };
</script>

<script>
    function scrollToTreeDonation(event) {
        event.preventDefault();
        setTimeout(function() {
            const element = document.querySelector('.form-background');
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }, 500);
    }
</script>

<script>
    function scrollToMap(event) {
        event.preventDefault();
        setTimeout(function() {
            const element = document.querySelector('.map-container');
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }, 500);
    }
</script>

<script>
    function scrollToNews(event) {
        event.preventDefault();
        setTimeout(function() {
            const element = document.querySelector('.news');
            if (element) {
                element.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        }, 500);
    }
</script>