<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $fillable = ['usNombreReal','usNombreUsuario','usContrasena','usDireccion', 'usTelefono', 'usTipoUsuario', 'usFoto', 'usCedula'];
    protected $dates = ['created_at', 'updated_at'];


}
