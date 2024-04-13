<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas extends Model
{
    use HasFactory;
    public $table = 'personas';
    public $timestamps = false;
    protected $primarykey = 'id_personas';

    protected $fillable = [
        'id_personas', 
        'nombre_completo', 
        'celular', 
        'email',
    ];
}
