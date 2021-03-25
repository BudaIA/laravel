<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    // Con fillable tienes que indicar todos los campos que quieres que se guarden
    //protected $fillable = ['name', 'descripcion', 'categoria'];

    /* Con la opción guarded indicas los campos a los que no se deben acceder para guardar
    (Funcionamiento inverso a fillable)
 */
    protected $guarded = [];

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
