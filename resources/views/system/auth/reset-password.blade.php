@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Redefinir senha</h1>

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('system.password.update') }}">
        @csrf

        <input type="hidden" name="token" value="{{ $token }}">
        <input type="hidden" name="email" value="{{ $email }}">

        <div class="form-group">
            <label for="password">Nova senha</label>
            <input
                id="password"
                type="password"
                name="password"
                required
            >
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar nova senha</label>
            <input
                id="password_confirmation"
                type="password"
                name="password_confirmation"
                required
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Redefinir senha
            </button>
        </div>
    </form>

</div>
@endsection
