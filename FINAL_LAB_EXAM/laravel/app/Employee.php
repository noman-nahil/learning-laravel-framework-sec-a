<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = "employee";
    protected $primaryKey =  "username";
    public $timestamps = false;
    
}
