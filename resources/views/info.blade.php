@extends('layouts.base')

@section('title', 'Info')

@section('content')
    <div class="card">
        <div class="card-header">Informações de {{$user['preferred_username']}}</div>
        <div class="card-body">
            {{ var_dump($user) }}
        </div>
    </div>

@endsection


