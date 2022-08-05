<nav x-data="{ open: false }" class="bg-cyan-700 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <div class="dropdown">
                        <button class="dropbtn  inline-flex items-center px-1 pt-6 border-b-2 border-transparent text-sm font-medium leading-5 uppercase text-yellow-100 hover:text-yellow-400 hover:border-red-600 focus:outline-none focus:text-cyan-100 focus:border-orange-300 transition duration-150 ease-in-out">Oficina</button>
                        <div class="dropdown-content">
                            <x-nav-link :href="route('permission.index')" :active="request()->routeIs('permission.index')">
                                {{ __('Permissions') }}
                            </x-nav-link>
                            <x-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')">
                                {{ __('Roles') }}
                            </x-nav-link>
                            <x-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                                {{ __('Users') }}
                            </x-nav-link>
                        </div>
                    </div>
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Axenda') }}
                    </x-nav-link>

                    <x-nav-link :href="route('cidadan.index')" :active="request()->routeIs('cidadan.index')">
                        {{ __('Cidadans') }}
                    </x-nav-link>
                    <x-nav-link :href="route('empresa.index')" :active="request()->routeIs('empresa.index')">
                        {{ __('Empresas') }}
                    </x-nav-link>
                    <x-nav-link :href="route('oftraballo.index')" :active="request()->routeIs('oftraballo.index')">
                        {{ __('Traballo') }}
                    </x-nav-link>
                    <x-nav-link :href="route('offormacion.index')" :active="request()->routeIs('offormacion.index')">
                        {{ __('Formación') }}
                    </x-nav-link>
{{-- <x-nav-link :href="route('calendar.index')" :active="request()->routeIs('calendar.index')">
                        {{ __('Axenda') }}
                    </x-nav-link> --}}
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        
                           
<button class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 uppercase text-yellow-400 focus:outline-none focus:border-orange-300 transition duration-150 ease-in-out">
 <div>{{ Auth::user()->name }}</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <!-- Authentication -->
                        <x-dropdown-link :href="route('admin.account.info')" :active="request()->routeIs('admin.account.info')">
                         {{ __('My Account') }}
                        </x-dropdown-link>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
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
            <x-responsive-nav-link :href="route('permission.index')" :active="request()->routeIs('permission.index')">
                {{ __('Permissions') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('role.index')" :active="request()->routeIs('role.index')">
                {{ __('Roles') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('user.index')" :active="request()->routeIs('user.index')">
                {{ __('Users') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('cidadan.index')" :active="request()->routeIs('cidadan.index')">
                {{ __('Cidadans') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('empresa.index')" :active="request()->routeIs('empresa.index')">
                {{ __('Empresas') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('oftraballo.index')" :active="request()->routeIs('oftraballo.index')">
                {{ __('Traballo') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('offormacion.index')" :active="request()->routeIs('offormacion.index')">
                {{ __('Formación') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('calendar.index')" :active="request()->routeIs('calendar.index')">
                {{ __('Axenda') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">

                <x-responsive-nav-link :href="route('admin.account.info')" :active="request()->routeIs('admin.account.info')">
                {{ __('My Account') }}
                </x-responsive-nav-link>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
