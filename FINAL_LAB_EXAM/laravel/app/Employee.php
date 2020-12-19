<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $table = "Employee";
    protected $primaryKey =  "id";
    public $timetamps = false;
    
}
