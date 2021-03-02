@extends('layouts.app')
@section('contents')
    <div class="container mt-5">
        <div class="row">
            <div class="col-8" style="display:flex;justify-content:center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png"
                    alt="user" style='width:20%'><br>
                <div style="margin-top:5%">
                    <h3 class="showTitle-design">Nom: <span>{{ $user->name }}</span></h3>
                    <h3 class="showTitle-design">Email: <span>{{ $user->email }}</span></h3>
                </div>
            </div>
            <div class="row col-4 justify-content-center">
                {{-- <button class='brn btn-success'><a href="/images/{{$user->id}}">Ajouter vos images</a></button> --}}
                <form class="m-2" method="post" action="/users/{{$user->id}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nom">File Name</label>
                        <input type="text" class="form-control" id="nom" placeholder="Enter file Name" name="nom">
                    </div>
                    <div class="mt-4 form-group">
                        <label for="image">Choose Image:</label>
                        <input class="mt-2" id="image" type="file" name="image">
                    </div>
                    <button type="submit" class="mt-3 btn btn-success d-block w-75 mx-auto">Upload</button>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <h1>Mon gallerie:</h1>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th class="cs-p-1">Name</th>
                    <th class="cs-p-1">URL</th>
                </tr>
            </thead>
    
            @foreach($photos as $photo)
                <tr>
                    <td class="cs-p-1">{{ $photo->nom }}</td>
                    <td class="cs-p-1"><a href="{{ $photo->path }}">View Image</a></td>
                </tr>
                {{-- @empty
                <p>No Images at the moment</p>  --}}
            @endforeach
        </table>
    </div>
@endsection
