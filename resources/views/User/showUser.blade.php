@extends('layouts.app')
@section('contents')
    <div class="container info-user">
        <div class="row">
            <div class="col-12">
                <div class="team-member">
                    <img class="mx-auto rounded-circle"
                        src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/User_icon_2.svg/1024px-User_icon_2.svg.png"
                        alt="" />
                    <h4>{{ $user->name }}</h4>
                    <p class="text-muted">{{ $user->email }}</p>
                </div>
            </div>
            
        </div>
    </div>
    @if (Auth::user()->id == $user->id)
    <hr>
    <h1 class="design-gallerie">Ma Galerie:</h1>
    <div class="container marg-container">
        <div class="row">
            <div class="table-responsive1 col-8">
                <table class="table table-hover">
                <thead>
                    <tr>
                        <th class="cs-p-1">Nom</th>
                        <th class="cs-p-1">Path</th>
                        
                        <th class="cs-p-1">Options</th>
                    
                </tr>
            </thead>
            
            @foreach ($photos as $photo)
            <tr>
                    <td class="cs-p-1">{{ $photo->nom }}</td>
                    <td class="cs-p-1"><a href="{{ $photo->path }}">View Image</a></td>
                    <td class="cs-p-1 design-btn">
                        <form action="{{ route('deletephoto', $photo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <form action="{{ route('editphoto', $photo->id) }}">
                                
                                <button type="submit" class="btn btn-primary">Edit</button>
                            </form>
                        </td>
                    </tr>
                    
                    @endforeach
                </table>
                
            </div>
            
                <div class="row col-4 justify-content-center">
                    {{-- <button class='brn btn-success'><a href="/images/{{$user->id}}">Ajouter vos images</a></button> --}}
                    <form class="m-2" method="post" action="/users/{{ $user->id }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nom">Nom de l'Image:</label>
                            <input type="text" class="form-control" id="nom" placeholder="Entrez le nom de l'image"
                                name="nom">
                        </div>
                        <div class="mt-4 form-group">
                            <label for="image">Choisir un autre Image:</label>
                            <input class="mt-2" id="image" type="file" name="image">
                        </div>
                        <button type="submit" class="mt-3 btn btn-success d-block w-75 mx-auto">Upload</button>
                    </form>
                </div>
            </div>
        </div>
        @endif
@endsection
