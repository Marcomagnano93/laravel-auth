@extends('layouts.app')

@section('title','Create')

@section('content')

    <div class="container">
    
        <h1 class="text-center fs-1">Aggiungi progetto:</h1>
    
        <form action="{{route('admin.dashboards.update', $dashboard)}}" method="POST">
            @csrf

            @method('PUT')
            
            <div class="mb-3">
                <label for="title" class="form-label">Titolo: </label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title', $dashboard->title)}}">
            </div>
            <div class="mb-3">
                <label for="git" class="form-label">GitHub: </label>
                <input type="text" class="form-control" id="git" name="git" value="{{old('git', $dashboard->git)}}">
            </div>

            <div class="input-group">
                <span class="input-group-text">Descrizione: </span>
                <textarea class="form-control" aria-label="With textarea" name="description">{{ $dashboard->description }}</textarea>
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{route('admin.dashboards.index')}}" class="btn btn-primary btn-lg">Progetti</a>
                <button type="submit" class="btn btn-success btn-lg">Salva</button>
            </div>
    
        </form>
    
        <div class="my-4">
            @if ( $errors->any() )
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
    </div>
@endsection