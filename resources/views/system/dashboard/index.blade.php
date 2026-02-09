@extends('layouts.app')

@section('content')
    <h1>Dashboard do System</h1>

    <p>App atual: {{ $app->label }}</p>
@endsection
