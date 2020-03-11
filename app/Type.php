<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $table = "type_praticien";
    protected $fillable = ['TYP_CODE', 'TYP_LIBELLE', 'TYP_LIEU'];
    protected $primaryKey = 'TYP_CODE';


}
