<!doctype html>
<html>
<head><meta charset="utf-8"><title>Login</title></head>
<body>
    <h1>Login</h1>
    @if($errors->any())<div style="color:red">{{ $errors->first() }}</div>@endif
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <label>Email <input type="email" name="email" value="{{ old('email') }}" required></label><br>
        <label>Password <input type="password" name="password" required></label><br>
        <label><input type="checkbox" name="remember"> Remember</label><br>
        <button type="submit">Login</button>
    </form>
    <p><a href="{{ route('register') }}">Register</a></p>
</body>
</html>
