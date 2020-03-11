<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rapport extends Model
{
    public $table = "rapport_visite";
    protected $fillable = ['VIS_MATRICULE', 'RAP_NUM', 'PRA_NUM', 'RAP_DATE', 'RAP_BILAN', 'RAP_MOTIF'];
    protected $primaryKey = 'RAP_NUM';
    public $timestamps = false;

    public function praticien()
    {
        return $this->belongsTo('App\Praticien', 'PRA_NUM', 'PRA_NUM');
    }

}
