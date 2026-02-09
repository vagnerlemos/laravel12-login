@extends('layouts.app')

@section('content')
<div class="auth-container">

    <h1>Recuperar senha</h1>

    <p>Informe seu e-mail para receber o link de redefinição de senha.</p>

    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-error">
            {{ $errors->first('email') }}
        </div>
    @endif

    <form method="POST" action="{{ route('vendas.password.email') }}">
        @csrf

        <div class="form-group">
            <label for="email">E-mail</label>
            <input
                id="email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                required
                autofocus
            >
        </div>

        <div class="form-actions">
            <button type="submit">
                Enviar link de recuperação
            </button>
        </div>
    </form>

    <div class="auth-links">
        <a href="{{ route('vendas.login') }}">Voltar para o login</a>
    </div>

</div>
@endsection
