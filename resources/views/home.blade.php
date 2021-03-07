@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Vous étes connecter!<br>
                    Bienvenue {{ Auth::user()->name }}.
                </div>
                <button class="btn btn-green"><a href="{{ route('users.index') }}">Voir Users</a></button>
            </div>
        </div>
    </div>
</div> --}}
<header class="masthead">
    <div class="container">
        <div class="masthead-subheading">Welcome To Our Studio!</div>
        <div class="masthead-heading text-uppercase">It's Nice To Meet You</div>
        <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="{{ route('users.index') }}">Tell Me More</a>
    </div>
</header>
@endsection
