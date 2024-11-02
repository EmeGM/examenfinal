<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Restaurante
 *
 * @property $id
 * @property $nombre_rest
 * @property $direccion
 * @property $telefono
 * @property $tipos_id_plato
 *
 * @property Tipo $tipo
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Restaurante extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nombre_rest', 'direccion', 'telefono', 'tipos_id_plato'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tipo()
    {
        return $this->belongsTo(\App\Models\Tipo::class, 'tipos_id_plato', 'id_plato');
    }
    
}
