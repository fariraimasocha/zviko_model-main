<x-splade-data default="{ open: false }">
    <nav class="bg-white border-b border-gray-100">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('home') }}">
                            <x-application-mark class="block h-9 w-auto" />
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">

                        @auth()
                            <a href="/">
                                <h1 class="mt-5 text-xl font-semibold text-black">
                                    {{ auth()->user()?->name ?: 'Guest' }}
                                </h1>
                            </a>
                        @endauth

                           @role('Teacher')
                            <x-nav-link href="{{ route('dashboard.index') }}" :active="request()->routeIs('dashboard.index')">
                                {{ __('Dashboard') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('permissions.index') }}" :active="request()->routeIs('permissions.index')">
                                {{ __('Permissions') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('roles.index') }}" :active="request()->routeIs('roles.index')">
                                {{ __('Roles') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('users.index') }}" :active="request()->routeIs('users.index')">
                                {{ __('Users') }}
                            </x-nav-link>

                            @endrole

                            <x-nav-link href="{{ route('dash.index') }}" :active="request()->routeIs('dash.index')">
                                {{ __('My Dash') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                                {{ __('Home') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('link.index') }}" :active="request()->routeIs('link.index')">
                                {{ __('Basa') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('score.index') }}" :active="request()->routeIs('score.index')">
                            {{ __('Marks') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('upload.index') }}" :active="request()->routeIs('upload.index')">
                            {{ __('Audios All') }}
                            </x-nav-link>

                            <x-nav-link href="{{ route('comment.index') }}" :active="request()->routeIs('comment.index')">
                            {{ __('Comments') }}
                            </x-nav-link>
                        <form method="POST" action="{{ route('logout') }}" class="mt-3">
                            @csrf

                            <x-dropdown-link as="a" :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>

                    </div>
                </div>

                <!-- Hamburger -->
                <div class="-mr-2 flex items-center sm:hidden">
                    <button @click="data.open = ! data.open"
                        class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path v-bind:class="{'hidden': data.open, 'inline-flex': ! data.open }"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                            <path v-bind:class="{'hidden': ! data.open, 'inline-flex': data.open }"
                                stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Responsive Navigation Menu -->
        <div v-bind:class="{'block': data.open, 'hidden': ! data.open }" class="sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link href="{{ route('home') }}" :active="request()->routeIs('home')">
                    {{ __('Home') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </nav>
</x-splade-data>
