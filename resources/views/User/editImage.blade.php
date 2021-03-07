@extends('layouts.app')
@section('contents')
    <form class="update-design" method="post" action="{{route('updatephoto',$image->id)}}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="input-group input-group-sm mb-3 input-nom">
            <span class="input-group-text " id="inputGroup-sizing-sm">Nom de l'Image :</span>
            <input type="text" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-sm" name="nom" value={{$image->nom}}>
          </div>
        {{-- <div class="mb-3">
            <label for="nom" class="form-label"></label>
            <input type="email" class="form-control" id="nom" placeholder="Choisir un autre nom... " name="nom" value={{$image->nom}}>
        </div> --}}
        <div class="mt-4 form-group">
            <label for="image">Choisir un autre Image :</label>
            <input class="mt-2" id="image" type="file" name="image" value={{$image}}>
        </div>
        <button type="submit" class="mt-3 btn-update btn btn-success d-block w-75 mx-auto">Upload</button>
    </form>
@endsection
