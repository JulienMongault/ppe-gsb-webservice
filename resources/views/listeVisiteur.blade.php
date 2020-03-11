@extends("template")

@section("title", "Liste des visiteurs")

@section("content")
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Action -->


                <!-- Liste -->
                <ul class="list-group">
                	
                    @forelse ($visiteurs as $visiteur)
                        <li class="list-group-item">
                            <span>{{ $visiteur->VIS_NOM }} &nbsp; </span>
                            <span>{{ $visiteur->VIS_PRENOM }} &nbsp; </span>
                            <span>{{ $visiteur->VIS_ADRESSE }} &nbsp; </span>
                            <span>{{ $visiteur->VIS_VILLE }} &nbsp; </span>
                        </li>
                    @empty
                        <li class="list-group-item text-center">C'est vide !</li>
                    @endforelse
                </ul>
                <button type="button" class="btn btn-primary">Primary</button>
            </div>
        </div>
    </div>
@endsection