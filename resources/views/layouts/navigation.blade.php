<nav class="h-full flex flex-col p-4">
    <div class="mb-8">
        <a href="/" class="text-2xl font-bold text-gray-900 block mb-6">{{ config('app.name', 'Laravel') }}</a>
    </div>
    <div class="flex-1 flex flex-col gap-2">
        @auth
            <span class="text-gray-700 mb-2">
                {{ Auth::user()->name }}<br><span class="text-xs">{{ Auth::user()->email }}</span>
            </span>
            <a href="{{ route('dashboard') }}" class="block px-3 py-2 rounded hover:bg-gray-200 text-blue-600">Dashboard</a>
            <a href="{{ route('doctors.index') }}" class="block px-3 py-2 rounded hover:bg-gray-200 text-blue-600">Doctors</a>
            <a href="{{ route('doctors.create') }}" class="block px-3 py-2 rounded hover:bg-gray-200 text-blue-600">Add Doctor</a>
            <a href="{{ route('profile.edit') }}" class="block px-3 py-2 rounded hover:bg-gray-200 text-blue-600">Profile</a>
            <div x-data="{ open: false, mode: localStorage.getItem('theme') || 'system' }" class="relative mt-2">
                <button @click="open = !open" type="button" class="w-full flex justify-between items-center px-3 py-2 rounded border border-gray-300 shadow-sm bg-white text-sm font-medium text-gray-700 focus:outline-none">
                    Theme
                    <svg class="h-4 w-4 ml-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.08 1.04l-4.25 4.65a.75.75 0 01-1.08 0l-4.25-4.65a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="open" @click.away="open = false" class="origin-top-left absolute left-0 mt-2 w-36 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 focus:outline-none z-50">
                    <div class="py-1">
                        <button @click="mode = 'system'; localStorage.setItem('theme', 'system'); if (window.matchMedia('(prefers-color-scheme: dark)').matches) { document.documentElement.classList.add('dark'); } else { document.documentElement.classList.remove('dark'); } open = false;" :class="{'font-bold': mode === 'system'}" class="block w-full text-left px-4 py-2 text-sm text-gray-700">System</button>
                        <button @click="mode = 'light'; localStorage.setItem('theme', 'light'); document.documentElement.classList.remove('dark'); open = false;" :class="{'font-bold': mode === 'light'}" class="block w-full text-left px-4 py-2 text-sm text-gray-700">Light</button>
                        <button @click="mode = 'dark'; localStorage.setItem('theme', 'dark'); document.documentElement.classList.add('dark'); open = false;" :class="{'font-bold': mode === 'dark'}" class="block w-full text-left px-4 py-2 text-sm text-gray-700">Dark</button>
                    </div>
                </div>
            </div>
            <form method="POST" action="{{ route('logout') }}" class="mt-4">
                @csrf
                <button type="submit" class="w-full text-left px-3 py-2 rounded text-red-600 hover:bg-gray-200">Logout</button>
            </form>
        @else
            <a href="{{ route('login') }}" class="block px-3 py-2 rounded hover:bg-gray-200 text-blue-600">Login</a>
            <a href="{{ route('register') }}" class="block px-3 py-2 rounded hover:bg-gray-200 text-blue-600">Register</a>
        @endauth
    </div>
</nav>
