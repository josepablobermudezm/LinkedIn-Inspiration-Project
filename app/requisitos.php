<?php

/*CREATE TABLE `requisitos` (
  `rqID` bigint(3) NOT NULL,
  `rqNombre` varchar(50) NOT NULL,
  `rqOfertaTrabajo` bigint(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;*/
namespace App;

use Illuminate\Database\Eloquent\Model;

class requisitos extends Model
{
  protected $primaryKey = 'rqID';
    protected $fillable = ['rqNombre','rqDescripcion'];
    protected $dates = ['created_at', 'updated_at'];

}

