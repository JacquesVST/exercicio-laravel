<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = [
        'id','nome','cargo','data_matricula','salario'
    ];
}
