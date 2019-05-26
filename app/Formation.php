<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //
    protected $primaryKey = 'formationid';
    protected $fillable = [
        'enterprise',
        'email',
        'phone',
        'formation',
        'besoin',
        'note'
    ];

}
