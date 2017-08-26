<?php

namespace Transparencia;

use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    protected $fillable = [
        'nombre', 'cuota'
    ];
    public $timestamps = false;
    
    public function pagos()
    {
        return $this->hasMany('Transparencia\Pago');
    }
}
