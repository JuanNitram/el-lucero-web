<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscripcion extends Model
{

    protected $table = 'inscripciones';

    protected $fillable =   ['name', 'surname', 'telefono', 'institucion', 'promocional',
                             'forma_pago','email', 'password','created_at','updated_at'];

}
