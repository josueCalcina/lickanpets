<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Variante extends Model
{
    // TABLA
    protected $table = 'variante';

    public $timestamps = false;

    protected $fillable = [
        'id',
        'nombre',
        'valor',
        'frecuencia',
        'servicio_id'
    ];

    
    // Relationships
    public function especie()
    {
        return $this->belongsToMany(Especie::class, 'especie_variante', 'variante_id', 'especie_id');
    }

    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }

    public function especie_variante()
    {
        return $this->hasMany(EspecieVariante::class);
    }

    public function plan_variante()
    {
        return $this->hasMany(PlanVariante::class);
    }
}
