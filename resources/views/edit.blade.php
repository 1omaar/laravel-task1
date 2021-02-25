@extends('app')
@section('content')
<form method="post" action="{{ route('update', $boisson->id) }}">
            @method('PUT') 
            @csrf
            <div class="form-group">

                <label for="first_name">nom:</label>
                <input type="text" class="form-control" name="nom" value={{ $boisson->nom }} />
            </div>

            <div class="form-group">
                <label for="last_name">type:</label>
                <input type="text" class="form-control" name="type" value={{ $boisson->type }} />
            </div>

            <div class="form-group">
                <label for="email">prix:</label>
                <input type="text" class="form-control" name="prix" value={{ $boisson->prix }} />
            </div>
            <div class="form-group">
                <label for="city">quantité:</label>
                <input type="text" class="form-control" name="quantité" value={{ $boisson->quantité }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection 