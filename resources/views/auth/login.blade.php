<!-- resources/views/auth/login.blade.php -->

<form method="POST" action="{{ route('iniciarSesion') }}">
    {!! csrf_field() !!}

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}">
    </div>

    <div>
        Password
        <input type="password" name="password" id="password">
    </div>

    <div>
        <input type="checkbox" name="remember"> Recordarme
    </div>

    <div>
        <button type="submit">Ingresar</button>
    </div>
</form>