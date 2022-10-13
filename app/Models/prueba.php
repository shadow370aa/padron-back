<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prueba extends Model
{
    protected $table='prueba';
    protected $fillable=['prueba_id','prueba_descripcion'];
    protected $primaryKey='prueba_id';
    public $timestamps=false;
}
