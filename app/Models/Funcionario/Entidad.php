<?php

namespace App\Models\Funcionario;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = "entidad";
    public $timestamps = false;
    protected $fillable = ['nit', 'nombre', 'rol', 'director', 'direccion', 'telefono', 'correo'];
    protected $guarded = ['id'];
}
