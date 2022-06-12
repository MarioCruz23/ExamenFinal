<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class empleado extends Model
{
    use HasFactory;

    protected $table = "registro_de_empleados";
    public $timestamps = "false";

    public function users(){
        return $this->belongsTo(User::class, 'usuario');
    }
}
