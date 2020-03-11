<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visiteur extends Model
{
    public $table = "visiteur";
    protected $fillable = ['VIS_MATRICULE', 'VIS_NOM', 'VIS_PRENOM', 'VIS_ADRESSE', 'VIS_CP', 'VIS_VILLE', 'VIS_DATEEMBAUCHE', 'SEC_CODE', 'LAB_CODE'];

    public function rapports()
    {
        return $this->hasMany('App\Rapport', 'VIS_MATRICULE', 'VIS_MATRICULE');
    }
}
