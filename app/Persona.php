<?php

namespace Transparencia;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'nombre',
    ];
    public $timestamps = false;
    
    public function pagos()
    {
        return $this->hasMany('Transparencia\Pago');
    }
}
