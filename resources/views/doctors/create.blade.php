@extends('layouts.app')
@section('content')
<h1>Add Doctor</h1>
<form method="POST" action="{{ route('doctors.store') }}">
    @csrf
    <div class="mb-4">
        <label for="name" class="block text-gray-700">Name</label>
        <input type="text" name="name" id="name" class="w-full rounded border-gray-300" required>
    </div>
    <div class="mb-4">
        <label for="specialty" class="block text-gray-700">Specialty</label>
        <input type="text" name="specialty" id="specialty" class="w-full rounded border-gray-300">
    </div>
    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded">Add Doctor</button>
</form>
@endsection
