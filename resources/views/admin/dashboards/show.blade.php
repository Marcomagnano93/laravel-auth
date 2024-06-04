@extends('layouts.app')

@section('title', 'Progetti')

@section('content')
<div class="container">
    <h1>{{ $dashboard->title }}</h1>
    <a href="{{route('admin.dashboards.index')}}" class="btn btn-primary btn-lg">Dashboard</a>
    <div class="row">

        <div class="col">
            <h3>Descrizione: </h3>
            <p>{{ $dashboard->description }}</p>
            <a href="{{ $dashboard->git }}">GitHub</a>
            <a href="{{route('admin.dashboards.edit', $dashboard)}}" class="btn btn-primary btn-lg">Modifica</a>
        </div>
    </div>
</div>
@endsection