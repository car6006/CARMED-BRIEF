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
