<<<<<<< HEAD
<x-app-layout>
    <x-slot name="header">Doctors</x-slot>
    <div class="p-6 rounded-2xl bg-white dark:bg-gray-900 shadow-sm ring-1 ring-gray-200/60 dark:ring-gray-800 mt-6">
        <h1>Doctors</h1>
        @if($doctors->count())
            <table class="min-w-full bg-white border border-gray-200 rounded">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border-b">Name</th>
                        <th class="px-4 py-2 border-b">Specialty</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($doctors as $doctor)
                        <tr>
                            <td class="px-4 py-2 border-b">{{ $doctor->name }}</td>
                            <td class="px-4 py-2 border-b">{{ $doctor->specialty ?? 'N/A' }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No doctors found.</p>
        @endif
    </div>
</x-app-layout>
=======
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Doctors</title>
</head>
<body>
    <h1>Doctors</h1>
    <ul>
        @foreach($doctors as $doctor)
            <li>{{ $doctor->full_name }}</li>
        @endforeach
    </ul>
</body>
</html>
>>>>>>> 2290fb2479c24a1e8f1fa889dc56e48c4c3059d8
