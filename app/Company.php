<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    protected $fillable = [
        'name','establishmentDate','employeesNb','street','city','state', 'email', 'website','about'
    ];

}
