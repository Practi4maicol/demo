<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Persona
 *
 * @property $id
 * @property $cedula
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $genero
 * @property $mail
 * @property $celular
 * @property $direccion
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{

    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['cedula','nombre','apellido','edad','genero','mail','celular','direccion'];




}
