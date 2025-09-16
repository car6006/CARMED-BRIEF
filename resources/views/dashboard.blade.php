@extends('layouts.app')

@section('content')
<main class="container mx-auto max-w-4xl px-4 sm:px-6 lg:px-8 py-8">
    <div class="mb-8">
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white flex items-center gap-2">
            <x-heroicon-o-home class="w-7 h-7 text-blue-600 dark:text-blue-400" />
            Welcome to <span class="text-blue-600 dark:text-blue-400">CARMED-BRIEF</span>
        </h1>
        <p class="mt-2 text-gray-600 dark:text-gray-300 text-lg">Your modern, secure medical dashboard.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="rounded-2xl bg-white dark:bg-gray-900 shadow-sm ring-1 ring-gray-200/60 dark:ring-gray-800 p-6 flex flex-col gap-2">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Doctors</h2>
            <p class="text-gray-500 dark:text-gray-400">Manage and view your doctors list.</p>
            <a href="{{ route('doctors.index') }}" class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 ring-1 ring-gray-300/70 hover:ring-gray-400 bg-white text-gray-900 dark:bg-gray-800 dark:text-white transition font-medium mt-2">
                <x-heroicon-o-user-group class="w-5 h-5" />
                View Doctors
            </a>
        </div>
        <div class="rounded-2xl bg-white dark:bg-gray-900 shadow-sm ring-1 ring-gray-200/60 dark:ring-gray-800 p-6 flex flex-col gap-2">
            <h2 class="text-xl font-semibold text-gray-900 dark:text-white">Profile</h2>
            <p class="text-gray-500 dark:text-gray-400">Update your account and preferences.</p>
            <a href="{{ route('profile.edit') }}" class="inline-flex items-center gap-2 rounded-xl px-4 py-2.5 ring-1 ring-gray-300/70 hover:ring-gray-400 bg-white text-gray-900 dark:bg-gray-800 dark:text-white transition font-medium mt-2">
                <x-heroicon-o-user class="w-5 h-5" />
                Edit Profile
            </a>
        </div>
    </div>
</main>
@endsection
