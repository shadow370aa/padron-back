<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mas_pda extends Model
{
    protected $table='mas_pda';
    protected $fillable=['numero_ced','mesa','orden','apellido','nombre','direccion','seccional','ndistrito','ndepart','nombre_loc','descripcio'];
    protected $primaryKey='numero_ced';
    public $timestamps=false;
}
