<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use Auth;
use App\Praticien;
use App\Visiteur;
use App\Rapport;

class ControllerGsb extends Controller
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    //Ouvre la vue home avec comme argument la liste des objets Todo
    public function liste()
    {
        return view("liste", ["praticiens" => Praticien::all()]);
    }

    public function listeVisiteurAvecLabo()
    {
        return view("listeVisiteur", ["visiteurs" => Visiteur::all()]);
    }

    public function listeRapports()
    {
        return view("listeRapports");
    }

    public function editerRapport($id)
    {
        $rapport = rapport::find($id);
        if($rapport->VIS_MATRICULE == Auth::user()->visiteur->VIS_MATRICULE)
        {
            return view('editionRapport',compact('rapport'));
        }
        return view('listeRapports');
    }

    public function creationRapport()
    {  
        return view('creationRapport');
    }

    public function validerSupprimerRapport($id)
    {  
        $rapport = rapport::find($id);
        if($rapport->VIS_MATRICULE == Auth::user()->visiteur->VIS_MATRICULE)
        {
            return view('supprimerRapport', compact('rapport'));
        }
        return view('listeRapports');
    }

    public function supprimerRapport(Request $request)
    {  
        $rapport = rapport::find($request->input('id_rap'));
        if($rapport->VIS_MATRICULE == Auth::user()->visiteur->VIS_MATRICULE)
        {
            rapport::destroy($rapport->RAP_NUM);
        }
        return view('listeRapports');
    }

    public function saveRapport(Request $request)
    {
        $rapport = new Rapport();
        $rapport->RAP_DATE = $request->input('date');
        $rapport->RAP_MOTIF = $request->input('motif');
        $rapport->RAP_BILAN = $request->input('bilan');
        $rapport->PRA_NUM = $request->input('praNum');
        $rapport->VIS_MATRICULE = Auth::user()->visiteur->VIS_MATRICULE ;
        $rapport->save();
        return redirect()->action('ControllerGsb@listeRapports');
    }

        public function updateRapport(Request $request)
    {
        $rapport = Rapport::find($request->input('id_rap'));
        $rapport->RAP_DATE = $request->input('date');
        $rapport->RAP_MOTIF = $request->input('motif');
        $rapport->RAP_BILAN = $request->input('bilan');
        $rapport->PRA_NUM = $request->input('praNum');
        $rapport->save();
        return redirect()->action('ControllerGsb@listeRapports');
    }




}
