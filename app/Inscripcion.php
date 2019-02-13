<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{

    protected $table = 'inscripciones';

    protected $fillable =   ['name', 'surname', 'telefono', 'institucion','cargo', 'promocional',
                             'forma_pago','email', 'password','taller_id', 'created_at','updated_at'];

}
