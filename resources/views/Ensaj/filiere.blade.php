@extends('master')

@section('content')
<div class="row">
    <div class="col-md-4">
        <h2>Gestion des Filieres</h2>
    </div>
    <div class="col-md-8">
        <form action="{{'/Filieres'}}" method="POST">
            @csrf
        <div class="form-group">

            <div class="form-group">
              <label for="code">Code</label>
              <input type="code" name="code" id="code" class="form-control" placeholder="code" required="" aria-describedby="helpId">
            </div>
            <div class="form-group">
                <label for="libelle">libelle</label>
                <input type="text" name="libelle" id="libelle" class="form-control" placeholder="libelle" required="" aria-describedby="helpId">
              </div>

           
            <button class="btn btn-primary btn-block" type="submit">Ajouter</button>

        </div>
    </form>
    </div>
</div>
    
@endsection