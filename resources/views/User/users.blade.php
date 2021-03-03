@extends('layouts.app')
@section('contents')
    <div class="container mt-5">
        <div class="row">
            @foreach ($users as $user)
                <div class="col-sm  container-design">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png"
                        alt="user" style='width:150px'><br>
                    <h3 class="info-design">nom: <span>{{ $user->name }}</span></h3>
                    <h3 class="info-design">email: <span>{{ $user->email }}</span></h3><br>
                    <button type="button" class="btn btn-info"><a class="btn-adress-design"
                            href="{{ route('users.show', $user->id) }}">voir mon gallerie</a></button>
                </div>
            @endforeach
        </div>
    </div>
@endsection
