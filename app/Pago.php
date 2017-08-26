<?php

namespace Transparencia;

use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    protected $fillable = [
        'pagado',
        'metodo',
        'fecha_pago'
    ];
    public $timestamps = false;

    public function persona()
    {
        return $this->belongsTo('Transparencia\Persona');
    }

    public function evento()
    {
        return $this->belongsTo('Transparencia\Evento');
    }
}
