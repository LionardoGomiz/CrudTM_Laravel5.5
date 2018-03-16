<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['Codigo','Operador','Carroceria','Modelo','Motor','Tipologia'];


}
