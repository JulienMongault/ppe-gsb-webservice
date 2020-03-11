@extends('template')

@section("title", "Menu")

@section('content')
<main class="py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Notifications</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p>Vous êtes connecté </p>
                            @if ( count(Auth::user()->visiteur->rapports) == 0 )
                            <div class="alert alert-warning" role="alert">
                                 Vous n'avez fait aucun compte-rendu de visite !
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
