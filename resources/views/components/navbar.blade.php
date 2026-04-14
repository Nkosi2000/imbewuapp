<nav class="sticky top-0 z-50 bg-gray-900 border-b border-gray-800 shadow-md">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            {{-- Brand --}}
            <a href="{{ url('/') }}" class="flex items-center gap-2">
                <span class="bg-green-600 text-white rounded-full w-8 h-8 flex items-center justify-center text-base shadow-sm shadow-green-600/20">🌱</span>
                <span class="font-bold text-white text-lg tracking-tight">{{ config('app.name', 'Imbewu App') }}</span>
            </a>

            {{-- Mobile menu button --}}
            <button type="button" id="mobile-menu-button"
                class="md:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-green-500">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            {{-- Desktop navigation --}}
            <div class="hidden md:flex md:items-center md:space-x-8">
                <div class="flex space-x-1">
                    <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('home') ? 'bg-green-600 text-white shadow-sm' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}">Home</a>
                    <a href="{{ route('about') }}" class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('about') ? 'bg-green-600 text-white shadow-sm' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}">About</a>
                    <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md text-sm font-medium transition-colors {{ request()->routeIs('contact') ? 'bg-green-600 text-white shadow-sm' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}">Contact</a>
                </div>

                <div class="flex items-center space-x-4">
                    @guest
                        <a href="{{ route('login') }}" class="text-gray-300 hover:text-white text-sm font-medium transition-colors">Login</a>
                        <a href="{{ route('register') }}" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-full text-sm font-medium shadow-md shadow-green-600/20 transition-colors">Register</a>
                    @else
                        <div class="relative" x-data="{ open: false }">
                            <button @click="open = !open" class="flex items-center gap-2 focus:outline-none">
                                <div class="bg-green-600 rounded-full w-8 h-8 flex items-center justify-center text-white text-sm font-medium uppercase shadow-sm shadow-green-600/30">
                                    {{ substr(Auth::user()->full_name ?? Auth::user()->name, 0, 1) }}
                                </div>
                                <span class="hidden lg:inline text-sm font-medium text-gray-200">{{ Auth::user()->full_name ?? Auth::user()->name }}</span>
                                <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                </svg>
                            </button>
                            <div x-show="open" @click.away="open = false"
                                class="absolute right-0 mt-2 w-48 bg-gray-800 rounded-md shadow-lg py-1 z-10 border border-gray-700"
                                style="display: none;">
                                <a href="{{ route('dashboard') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Dashboard</a>
                                <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-300 hover:bg-gray-700 hover:text-white">Profile</a>
                                <hr class="my-1 border-gray-700">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="block w-full text-left px-4 py-2 text-sm text-red-400 hover:bg-gray-700 hover:text-red-300">Logout</button>
                                </form>
                            </div>
                        </div>
                    @endguest
                </div>
            </div>
        </div>

        {{-- Mobile menu --}}
        <div id="mobile-menu" class="hidden md:hidden py-2 border-t border-gray-800">
            <div class="flex flex-col space-y-1">
                <a href="{{ route('home') }}" class="px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('home') ? 'bg-green-600 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}">Home</a>
                <a href="{{ route('about') }}" class="px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('about') ? 'bg-green-600 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}">About</a>
                <a href="{{ route('contact') }}" class="px-3 py-2 rounded-md text-base font-medium {{ request()->routeIs('contact') ? 'bg-green-600 text-white' : 'text-gray-300 hover:text-white hover:bg-gray-800' }}">Contact</a>
                @guest
                    <a href="{{ route('login') }}" class="px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800">Login</a>
                    <a href="{{ route('register') }}" class="px-3 py-2 rounded-md text-base font-medium text-green-400 hover:text-white hover:bg-gray-800">Register</a>
                @else
                    <a href="{{ route('dashboard') }}" class="px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800">Dashboard</a>
                    <a href="{{ route('profile.edit') }}" class="px-3 py-2 rounded-md text-base font-medium text-gray-300 hover:text-white hover:bg-gray-800">Profile</a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-full text-left px-3 py-2 rounded-md text-base font-medium text-red-400 hover:text-red-300 hover:bg-gray-800">Logout</button>
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>

@push('scripts')
<script>
    (function() {
        const btn = document.getElementById('mobile-menu-button');
        const menu = document.getElementById('mobile-menu');
        if (btn && menu) {
            btn.addEventListener('click', () => menu.classList.toggle('hidden'));
        }
    })();
</script>
@endpush