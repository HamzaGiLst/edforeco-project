<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enterprise extends Model
{
    //
    protected $fillable=[
        'nom','site','addresse','city','country','activity','phone','email','maincontact','password'
    ];
}
