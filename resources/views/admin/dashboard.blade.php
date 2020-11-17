@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <div class="jumbotron">
            @if(Auth::user() && Auth::user()->role_id === 1)
                <h1 style="text-align: center">Partie Admin</h1>
            @elseif(Auth::user() && Auth::user()->role_id === 2)
                <h1 style="text-align: center">Partie Auteur</h1>
            @elseif(Auth::user() && Auth::user()->role_id === 3)
                <h1>User Dashboard</h1>
            @endif
        </div>

        @if(Auth::user() && Auth::user()->role_id === 1)
            <div class="col-md-12">
                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-margin-right">Creer un blog</a>
                <a href="{{ route('categories.create') }}" class="btn btn-info btn-margin-right">Creer des catégories</a>
                <a href="{{ route('users.index') }}" class="btn btn-warning btn-margin-right">Manage Users</a>

            </div>
        @endif

        @if(Auth::user() && Auth::user()->role_id === 2)
            <div class="col-md-12">
                <a href="{{ route('blogs.create') }}" class="btn btn-primary btn-margin-right">Creer un blog</a>
                <a href="{{ route('categories.create') }}" class="btn btn-success btn-margin-right">Creer des catégories</a>

            </div>
        @endif

       
    </div>

@endsection

