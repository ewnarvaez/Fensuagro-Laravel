<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class PermisoRol extends Model
{
    protected $table = "permiso-rol";
    protected $fillable = ['permiso_id', 'rol_id'];
    protected $guarded = ['id'];
}
