<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tour
 *
 * @property $id_tour
 * @property $informe
 * @property $fecha
 * @property $transporte_num_placa
 *
 * @property Transporte $transporte
 * @property Destino[] $destinos
 * @property Guium[] $guias
 * @property Paquete[] $paquetes
 * @property Reserva[] $reservas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tour extends Model
{
    // Especificamos el nombre correcto de la tabla
    protected $table = 'tour';

    // Especificamos que la clave primaria es 'id_tour'
    protected $primaryKey = 'id_tour';

    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['id_tour', 'informe', 'fecha', 'transporte_num_placa'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transporte()
    {
        return $this->belongsTo(\App\Models\Transporte::class, 'transporte_num_placa', 'num_placa');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function destinos()
    {
        return $this->hasMany(\App\Models\Destino::class, 'id_tour', 'tour_id_tour');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function guias()
    {
        return $this->hasMany(\App\Models\Guium::class, 'id_tour', 'tour_id_tour');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function paquetes()
    {
        return $this->hasMany(\App\Models\Paquete::class, 'id_tour', 'tour_id_tour');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function reservas()
    {
        return $this->hasMany(\App\Models\Reserva::class, 'id_tour', 'tour_id_tour');
    }
}
