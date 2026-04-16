<!doctype html>
<html>
<head><meta charset="utf-8"><title>Profile</title></head>
<body>
    <h1>Profile: {{ $user->name }}</h1>
    <p>Email: {{ $user->email }}</p>
    <p>Role: {{ $user->role }}</p>
    <p><a href="{{ route('home') }}">Home</a></p>
</body>
</html>
