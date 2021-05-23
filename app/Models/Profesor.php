<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $fillable=['nombre','localidad','direccion','email'];

    public function asignaturas(){
        return $this->hasMany(Asignatura::class);
    }

    public static function getArrayIdNombre(){
        $profesores=Profesor::orderBy('nombre')->get();
        $miArray=[];
        foreach($profesores as $item){
            $miArray[$item->id]=$item->nombre;
        }
        return $miArray;
    }
}
