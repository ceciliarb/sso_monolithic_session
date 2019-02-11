@extends('layouts.base')

@section('title', 'Desenvolvedor')

@section('content')
    <div class="card">
        <div class="card-header">Bem vindo, {{$username}}!</div>
        <div class="card-body">
            Só desenvolvedores têm acesso a essa página, e você é um! Que azar!<br>
            Olha o seu perfil:<br>
            {{ var_dump($roles) }}
        </div>
    </div>

@endsection
