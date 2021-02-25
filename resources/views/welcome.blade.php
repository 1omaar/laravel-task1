@extends('app')

@section('content')
            <div class="content">
               <button><a href="/add_boisson">Ajouter un boisson</a></button><br><br>
               <div>
        <div class="mx-auto pull-right">
            <div class="">
                <form action="" method="GET" role="search">

                    <div class="input-group">
                    <input type="text" class="form-control mr-2" name="term" placeholder="Search projects" id="term">
                        <span class="input-group-btn mr-5 mt-1">
                            <button class="btn btn-info" type="submit" title="Search projects">
                                <span class="fas fa-search">Search</span>
                            </button>
                        </span>
                        
                      
                    </div>
                </form>
            </div>
        </div>
    </div>
               @foreach ($boissons as $boisson)
               <div >
               <a href="/boissons/{{$boisson->id}}"> <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIutu58PLX8lslqjjowYVSicWXbZueDQHMrw&usqp=CAU" alt="boisson"></a>
                    <h2>Description:</h2>
                    <div>
                        <p><span>Nom:</span> {{$boisson->nom}} </p>
                        <p><span>Type:</span> {{$boisson->type}} </p>
                        <p><span>Prix:</span> {{$boisson->prix}} </p>
                        <p><span>Quantité:</span> {{$boisson->quantité}} </p>
                    </div>
                    <form action="{{ route('deletephoto', $boisson->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <form action="{{ route('editphoto',$boisson->id) }}" >
                    
                        <button type="submit" class="btn btn-danger">edit</button>
                    </form>
                <hr>
           </div>
            @endforeach
            </div>
@endsection

