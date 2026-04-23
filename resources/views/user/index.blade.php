<!doctype html>
<html>
<head><meta charset="utf-8"><title>Admins</title></head>
<body>
    <h1>Admin Users</h1>
    <p><a href="{{ route('welcome') }}">Welcome</a></p>
    <ul>
        @foreach($admins as $admin)
            <li>{{ $admin->name }} — {{ $admin->email }} — <a href="{{ route('users.show', $admin->id) }}">View</a></li>
        @endforeach
    </ul>
</body>
</html>
