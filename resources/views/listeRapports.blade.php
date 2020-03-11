@extends("template")

@section("title", "Liste des comptes rendus de visites")

@section("content")
    <div class="container">
        <div class="card">
            <div class="card-body">
                <!-- Action -->
                <a href="{{ route('gsb.creationRap') }}" class="float-right btn btn-primary">Écrire un rapport</a>
                <!-- Liste -->
                <div class="row"></div>
                        @forelse ( Auth::user()->visiteur->rapports as $rapport)

                            <div class="col-6">
                              <div class="card mt-3 tab-card">
                                <div class="card-header tab-card-header">
                                    <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('gsb.editerRap', $rapport->RAP_NUM ) }}" >Modifier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ $rapport->RAP_NUM }}">Exporter</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('gsb.validerSupprimerRap', $rapport->RAP_NUM ) }}" >Supprimer</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-header">
                                    <h5 class="card-text">Praticien : {{ $rapport->praticien->PRA_PRENOM }} {{ $rapport->praticien->PRA_NOM }}</h5>
                                </div>

                                <div class="tab-content" id="myTabContent">
                                  <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                                    <h5 class="card-text">Motif : {{ $rapport->RAP_MOTIF }}</h5>
                                    <p class="card-text">{{ $rapport->RAP_BILAN }}</p>
                                      <p class="card-text float-left">{{ $rapport->praticien->PRA_VILLE }}</p> 
                                    <p class="card-text float-right">{{ $rapport->RAP_DATE }}</p>            
                                  </div>
                                </div>
                              </div>
                            </div>

                        @empty
                            <li class="list-group-item text-center">Vous n'avez fait aucun rapport.</li>
                            <a href="{{ route('gsb.creationRap') }}" class="float-right btn btn-primary">Cliquez ici pour écrire un rapport</a>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>


@endsection
