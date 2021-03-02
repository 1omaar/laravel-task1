@extends('app')
@section('content')
<div>
<img src="https://lh3.googleusercontent.com/proxy/urX9q5YqwMmK0EPtCVWWqFPwCDKg2dkeHLdZtLdd7iHFogStgyG9RV4OTnhzCz57Ek2NLZKCS50sZJD_godfK_FROqnKp3fOzt-wOFc0tqc5LMeM1vXGq7rXKRCKKmig" alt="boisson">
                    <h2>Description:</h2>
                    <div>
                        <p><span>Nom:</span> {{$boisson->nom}} </p>
                        <p><span>Type:</span> {{$boisson->type}} </p>
                        <p><span>Prix:</span> {{$boisson->prix}} </p>
                        <p><span>Quantité:</span> {{$boisson->quantité}} </p>
                    </div>
</div>
@endsection