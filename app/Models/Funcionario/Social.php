<?php

namespace App\Models\Funcionario;

use Illuminate\Database\Eloquent\Model;

class Social extends Model
{
    protected $table = "organizacionsocial";
    public $timestamps = false;
    protected $fillable = ['nit', 'nombre', 'direccion', 'telefono', 'responsable', 'sector'];
    protected $guarded = ['id'];
}
