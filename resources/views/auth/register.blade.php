<!-- resources/views/auth/register.blade.php -->

<form method="POST" action="{{ route('guardarUsuario') }}">
    {!! csrf_field() !!}

    <div>
        Nombre
        <input type="text" name="name" value="{{ old('name') }}" required>
    </div>

    <div>
        Email
        <input type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <div>
        Password
        <input type="password" name="password" required>
    </div>

    <div>
        Confirmar Password
        <input type="password" name="password_confirmation" required>
    </div>

    <div>
        <button type="submit">Registrar</button>
    </div>
</form>