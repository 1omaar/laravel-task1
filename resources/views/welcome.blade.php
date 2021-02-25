@extends('app')

@section('content')
            <div class="content">
               <button><a href="/add_boisson">Ajouter un boisson</a></button><br><br>
              
               @foreach ($boissons as $boisson)
               <div >
               <a href="/boissons/{{$boisson->id}}"> <img src="https://lh3.googleusercontent.com/proxy/urX9q5YqwMmK0EPtCVWWqFPwCDKg2dkeHLdZtLdd7iHFogStgyG9RV4OTnhzCz57Ek2NLZKCS50sZJD_godfK_FROqnKp3fOzt-wOFc0tqc5LMeM1vXGq7rXKRCKKmig" alt="boisson"></a>
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
                    <!-- <button><a href="/delete/{{$boisson->id}}"> Delete boisson</a></button> -->
                <hr>
           </div>
            @endforeach
            </div>
@endsection

