<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condidat extends Model
{
    //
    protected $fillable=[
      'nom',
      'prenom',
      'email',
      'cv'
    ];

    protected function saveannonce(){
        return $this->hasMany('App\SaveAnnonce');
    }
}
