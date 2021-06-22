@extends('master')

@section('content')
<div class="row">
    <div class="col-md-4">
        <h2>Gestion des etudiants</h2>
    </div>
    <div class="col-md-8">
        <form action="{{'/Etudiants'}}" method="POST">
            @csrf
        <div class="form-group">

            <div class="form-group">
              <label for="cin">Cin</label>
              <input type="text" name="cin" id="cin" class="form-control" placeholder="" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" name="nom" id="nom" class="form-control" placeholder="nom" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" name="prenom" id="prenom" class="form-control" placeholder="prenom" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="telephone">Telephone</label>
                <input type="text" name="telephone" id="telephone" class="form-control" placeholder="telephone" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" id="photo" class="form-control" placeholder="choose an image" required="" aria-describedby="helpId">
              </div>

            <div class="form-group">
                <label for="filiere">Filiere</label>
                <input type="text" name="filiere" id="filiere" class="form-control" placeholder="filiere" required="" aria-describedby="helpId">
            </div>

            <div class="form-group">
                <label for="classe">Classe</label>
                <input type="text" name="classe" id="classe" class="form-control" placeholder="classe" required="" aria-describedby="helpId">
            </div>
            <button class="btn btn-primary btn-block" type="submit">Ajouter</button>

        </div>
    </form>
    </div>
</div>
    
@endsection