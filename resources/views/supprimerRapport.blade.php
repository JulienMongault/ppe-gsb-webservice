@extends("template")

@section("title", "Liste des comptes rendus de visites")

@section("content")
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="js/searchBarPraticiens.js"></script>
<div class="container">
<div class="col-6">
<div class="card mt-3">
<div class="card-header">
    <h5 class="card-text">Praticien : {{ $rapport->praticien->PRA_PRENOM }} {{ $rapport->praticien->PRA_NOM }}</h5>
</div>

<div class="tab-content">
    <div class="p-3">
    <h5 class="card-text">Motif : {{ $rapport->RAP_MOTIF }}</h5>
    <p class="card-text">{{ $rapport->RAP_BILAN }}</p>
    <p class="card-text float-left">{{ $rapport->praticien->PRA_VILLE }}</p> 
    <p class="card-text float-right">{{ $rapport->RAP_DATE }}</p>            
    </div>
</div>
</div>
    <h3>Êtes-vous sûr de vouloir supprimer ce rapport ?</h3>
    <form action="{{ route('gsb.supprimerRap') }}" method="POST">

        <input type="hidden" name="id_rap" value="{{ $rapport->RAP_NUM }}" />
        {{ csrf_field() }}
        <a href="#" class="btn btn-warning" onclick="this.parentNode.submit()">Supprimer</a>
        <a href="{{ route('gsb.listRap') }}" class="btn">Annuler</a>
    </form>
</div>
</div>
@endsection
