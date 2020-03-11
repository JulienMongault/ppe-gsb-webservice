@extends("template")

@section("title", "Liste des praticiens")

@section("content")

    <div class="content_box">
	    <div class="left_bar">
	        <ul class=" nav-tabs--vertical nav" role="navigation">
		    <li class="nav-item">
			    <a href="#tous" class="nav-link active" data-toggle="tab" role="tab" aria-controls="tous">Tous les praticiens</a>
		    </li>
		    <li class="nav-item">
			    <a href="#mh" class="nav-link" data-toggle="tab" role="tab" aria-controls="mh">Médecin Hospitalier</a>
		    </li>
		    <li class="nav-item">
			    <a href="#mv" class="nav-link " data-toggle="tab" role="tab" aria-controls="mv">Médecine de Ville</a>
		    </li>
		    <li class="nav-item">
			    <a href="#ph" class="nav-link" data-toggle="tab" role="tab" aria-controls="ph">Pharmacien Hospitalier</a>
		    </li>
            <li class="nav-item">
			    <a href="#po" class="nav-link" data-toggle="tab" role="tab" aria-controls="po">Pharmacien Officine</a>
		    </li>
            <li class="nav-item">
			    <a href="#ps" class="nav-link" data-toggle="tab" role="tab" aria-controls="ps">Personnel de santé</a>
		    </li>
	    </ul>
	    </div>
        <div class="right_bar ">
        	    <div class="tab-content ">
		    <div class="tab-pane fade show active" id="tous" role="tabpanel">
    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($praticiens as $praticien)
          <tr>
            <td>{{ $praticien->PRA_NOM }}</td>
            <td>{{ $praticien->PRA_PRENOM }}</td>
            <td>{{ $praticien->type->TYP_LIBELLE }}</td>
            <td>{{ $praticien->PRA_ADRESSE }}</td>
            <td>{{ $praticien->PRA_VILLE }}</td>
            <td>{{ $praticien->PRA_CP }}</td>
            <td>{{ $praticien->PRA_COEFNOTORIETE }}</td>
          </tr>
        @empty
            <li class="list-group-item text-center">C'est vide !</li>
        @endforelse
        </tbody>
      </table>
		    </div>
		    <div class="tab-pane fade" id="mh" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($praticiens as $praticien)
            @if ($praticien->TYP_CODE == "MH")
              <tr>
                <td>{{ $praticien->PRA_NOM }}</td>
                <td>{{ $praticien->PRA_PRENOM }}</td>
                <td>{{ $praticien->type->TYP_LIBELLE }}</td>
                <td>{{ $praticien->PRA_ADRESSE }}</td>
                <td>{{ $praticien->PRA_VILLE }}</td>
                <td>{{ $praticien->PRA_CP }}</td>
                <td>{{ $praticien->PRA_COEFNOTORIETE }}</td>
              </tr>
            @endif
        @empty
            <li class="list-group-item text-center">C'est vide !</li>
        @endforelse
        </tbody>
      </table>
		    </div>
		    <div class="tab-pane fade" id="mv" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($praticiens as $praticien)
            @if ($praticien->TYP_CODE == "MV")
              <tr>
                <td>{{ $praticien->PRA_NOM }}</td>
                <td>{{ $praticien->PRA_PRENOM }}</td>
                <td>{{ $praticien->type->TYP_LIBELLE }}</td>
                <td>{{ $praticien->PRA_ADRESSE }}</td>
                <td>{{ $praticien->PRA_VILLE }}</td>
                <td>{{ $praticien->PRA_CP }}</td>
                <td>{{ $praticien->PRA_COEFNOTORIETE }}</td>
              </tr>
            @endif
        @empty
            <li class="list-group-item text-center">C'est vide !</li>
        @endforelse
        </tbody>
      </table>
		    </div>
		    <div class="tab-pane fade" id="ph" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($praticiens as $praticien)
            @if ($praticien->TYP_CODE == "PH")
              <tr>
                <td>{{ $praticien->PRA_NOM }}</td>
                <td>{{ $praticien->PRA_PRENOM }}</td>
                <td>{{ $praticien->type->TYP_LIBELLE }}</td>
                <td>{{ $praticien->PRA_ADRESSE }}</td>
                <td>{{ $praticien->PRA_VILLE }}</td>
                <td>{{ $praticien->PRA_CP }}</td>
                <td>{{ $praticien->PRA_COEFNOTORIETE }}</td>
              </tr>
            @endif
        @empty
            <li class="list-group-item text-center">C'est vide !</li>
        @endforelse
        </tbody>
      </table>
			    </div>
		    <div class="tab-pane fade" id="po" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($praticiens as $praticien)
            @if ($praticien->TYP_CODE == "PO")
              <tr>
                <td>{{ $praticien->PRA_NOM }}</td>
                <td>{{ $praticien->PRA_PRENOM }}</td>
                <td>{{ $praticien->type->TYP_LIBELLE }}</td>
                <td>{{ $praticien->PRA_ADRESSE }}</td>
                <td>{{ $praticien->PRA_VILLE }}</td>
                <td>{{ $praticien->PRA_CP }}</td>
                <td>{{ $praticien->PRA_COEFNOTORIETE }}</td>
              </tr>
            @endif
        @empty
            <li class="list-group-item text-center">C'est vide !</li>
        @endforelse
        </tbody>
      </table>
			    </div>
		    <div class="tab-pane fade" id="ps" role="tabpanel">
		    <table class="table table-bordered">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Type</th>
            <th>Adresse</th>
            <th>Ville</th>
            <th>Code Postal</th>
             <th>Coef Notoriété</th>
          </tr>
        </thead>
        <tbody>
        @forelse ($praticiens as $praticien)
            @if ($praticien->TYP_CODE == "PS")
              <tr>
                <td>{{ $praticien->PRA_NOM }}</td>
                <td>{{ $praticien->PRA_PRENOM }}</td>
                <td>{{ $praticien->type->TYP_LIBELLE }}</td>
                <td>{{ $praticien->PRA_ADRESSE }}</td>
                <td>{{ $praticien->PRA_VILLE }}</td>
                <td>{{ $praticien->PRA_CP }}</td>
                <td>{{ $praticien->PRA_COEFNOTORIETE }}</td>
              </tr>
            @endif
        @empty
            <li class="list-group-item text-center">C'est vide !</li>
        @endforelse
        </tbody>
      </table>
			    </div>
	    </div>
        </div>
    </div>

@endsection
