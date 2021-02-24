@extends('app')

@section('content')
            <div class="content">
                <div class=" m-b-md">
                <form method='POST' action="/add_boisson/create">
                @csrf
                @method('POST')
                    <label for="fname">Nom :</label><br>
                    <input type="text" id="fname" name="nom" value=""><br>
                    Type: <br>
                    <select name="type" id="pet-select">
                        <option value="">--choisissez un type--</option>
                         <option name="chaude" value="chaude">Chaude</option>
                         <option name="froide" value="froide">Froide</option>
                     </select><br>
                    <label for="lname">Prix:</label><br>
                    <input type="text" id="lname" name="prix" value=""><br>
                    <label for="lname">Quantité:</label><br>
                    <input type="text" id="lname" name="quantité" value=""><br><br>
                    <input type="submit" value="Submit">
                </form> 
                </div>

            </div>
        </div>
@endsection

