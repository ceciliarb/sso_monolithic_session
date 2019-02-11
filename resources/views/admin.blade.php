@extends('layouts.base')

@section('title', 'Admin')

@section('content')
    <div class="card">
        <div class="card-header">Bem vindo, {{$username}}!</div>
        <div class="card-body">
            Só administradores têm acesso a essa página, e você é um! Que sorte!<br>
            Olha o seu perfil:<br>
            {{ var_dump($roles) }}
        </div>
    </div>

@endsection
