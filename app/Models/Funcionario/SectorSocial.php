<?php

namespace App\Models\Funcionario;

use Illuminate\Database\Eloquent\Model;

class SectorSocial extends Model
{
    protected $table = "sector_social";
    public $timestamps = false;
    protected $fillable = ['nombre'];
    protected $guarded = ['id'];    
}
