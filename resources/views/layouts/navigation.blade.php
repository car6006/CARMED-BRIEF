<nav class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center h-16">
        <div>
            <a href="/" class="text-lg font-semibold text-gray-900 dark:text-white">{{ config('app.name', 'Laravel') }}</a>
        </div>
        <div>
            @auth
                <span class="text-gray-700 dark:text-gray-200 mr-4">
                    {{ Auth::user()->name }} ({{ Auth::user()->email }})
                </span>
                <a href="{{ route('dashboard') }}" class="mr-4 text-blue-600 dark:text-blue-400">Dashboard</a>
                <a href="{{ route('profile.edit') }}" class="mr-4 text-blue-600 dark:text-blue-400">Profile</a>
                <!-- Theme Toggle Dropdown under Profile -->
                <div x-data="{ open: false, mode: localStorage.getItem('theme') || 'system' }" class="relative inline-block text-left mr-4">
                    <button @click="open = !open" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-2 py-1 bg-white dark:bg-gray-700 text-sm font-medium text-gray-700 dark:text-gray-200 focus:outline-none" id="options-menu" aria-haspopup="true" aria-expanded="true">
                        Theme
                        <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0l-4.25-4.65a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div x-show="open" @click.away="open = false" class="origin-top-right absolute right-0 mt-2 w-36 rounded-md shadow-lg bg-white dark:bg-gray-700 ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                        <div class="py-1">
                            <button @click="mode = 'system'; localStorage.setItem('theme', 'system'); if (window.matchMedia('(prefers-color-scheme: dark)').matches) { document.documentElement.classList.add('dark'); } else { document.documentElement.classList.remove('dark'); } open = false;" :class="{'font-bold': mode === 'system'}" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200">System</button>
                            <button @click="mode = 'light'; localStorage.setItem('theme', 'light'); document.documentElement.classList.remove('dark'); open = false;" :class="{'font-bold': mode === 'light'}" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200">Light</button>
                            <button @click="mode = 'dark'; localStorage.setItem('theme', 'dark'); document.documentElement.classList.add('dark'); open = false;" :class="{'font-bold': mode === 'dark'}" class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-200">Dark</button>
                        </div>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="inline">
                    @csrf
                    <button type="submit" class="text-red-600 dark:text-red-400">Logout</button>
                </form>
            @else
                <a href="{{ route('login') }}" class="mr-4 text-blue-600 dark:text-blue-400">Login</a>
                <a href="{{ route('register') }}" class="text-blue-600 dark:text-blue-400">Register</a>
            @endauth
        </div>
    </div>
</nav>
