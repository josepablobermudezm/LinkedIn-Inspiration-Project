<?php
namespace App;

use Illuminate\Database\Eloquent\Model;

class ofertas extends Model
{
    protected $fillable = ['ofNombre','ofFechaInicio','ofFechaFinal','ofLimite'];
    protected $dates = ['created_at', 'updated_at'];

}

