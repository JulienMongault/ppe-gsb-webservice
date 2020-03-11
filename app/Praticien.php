<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Praticien extends Model
{
    public $table = "praticien";
    protected $fillable = ['PRA_NUM', 'PRA_NOM', 'PRA_PRENOM', 'PRA_ADRESSE', 'PRA_CP', 'PRA_VILLE', 'PRA_COEFNOTORIETE', 'TYP_CODE'];
    protected $primaryKey = 'PRA_NUM';

    public function type()
    {
        return $this->belongsTo('App\Type', 'TYP_CODE', 'TYP_CODE');
    }
}
