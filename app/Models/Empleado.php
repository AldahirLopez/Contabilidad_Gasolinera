<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;
    protected $fillable = ['Nombre_Emp','Ap_Paterno_Emp','Ap_Materno_Emp','Id_Turno'];
    public $timestamps = false;
}