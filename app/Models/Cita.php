<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



/**
 * Class Cita
 *
 * @property $id
 * @property $tituloCita
 * @property $fechaInicio
 * @property $horaInicio
 * @property $fechaFin
 * @property $horaFin
 * @property $descripción
 * @property $motivoConsulta
 * @property $created_at
 * @property $updated_at
 *
 * @property CitasHasExamene[] $citasHasExamenes
 * @property CitasHasReceta[] $citasHasRecetas
 * @property CitasHasSintoma[] $citasHasSintomas
 * @property PersonasHasCita[] $personasHasCitas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Cita extends Model
{

    static $rules = [
		'tituloCita' => 'required',
		'descripción' => 'required',
		'motivoConsulta' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['tituloCita','fechaInicio','horaInicio','fechaFin','horaFin','descripción','motivoConsulta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citasHasExamenes()
    {
        return $this->hasMany('App\Models\CitasHasExamene', 'Cita_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citasHasRecetas()
    {
        return $this->hasMany('App\Models\CitasHasReceta', 'Cita_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function citasHasSintomas()
    {
        return $this->hasMany('App\Models\CitasHasSintoma', 'Cita_id', 'id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function personasHasCitas()
    {
        return $this->hasMany('App\Models\PersonasHasCita', 'Cita_id', 'id');
    }



}
