<!doctype html>
<html>
<head><meta charset="utf-8"><title>Welcome</title></head>
<body>
    <h1>Welcome</h1>
    @auth
        <p>Hello, {{ auth()->user()->name }} — <a href="{{ route('home') }}">Home</a></p>
        <form method="POST" action="{{ route('logout') }}">@csrf<button>Logout</button></form>
    @else
        <p><a href="{{ route('login') }}">Login</a> — <a href="{{ route('register') }}">Register</a></p>
    @endauth
</body>
</html>
