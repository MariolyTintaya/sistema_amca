<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Guium
 *
 * @property $id_guia
 * @property $nombre
 * @property $celular
 * @property $disponibilidad
 * @property $activo
 * @property $tour_id_tour
 *
 * @property Tour $tour
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Guium extends Model
{
    public $timestamps = false;
    
    // Especifica la clave primaria de la tabla
    protected $primaryKey = 'id_guia';

    protected $perPage = 20;

    protected $fillable = ['id_guia', 'nombre', 'celular', 'disponibilidad', 'activo', 'tour_id_tour'];

    public function tour()
    {
        return $this->belongsTo(\App\Models\Tour::class, 'tour_id_tour', 'id_tour');
    }
}

