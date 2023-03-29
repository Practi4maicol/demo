<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * Class Persona
 *
 * @property $id
 *
 * @property $rolid
 * @property $espeid
 *
 * @property $cedula
 * @property $nombre
 * @property $apellido
 * @property $edad
 * @property $genero
 * @property $mail
 * @property $celular
 * @property $direccion
 *
 * @property Role $role
 * @property Especialidade $especialidade
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Persona extends Model
{

    static $rules = [

        'rolid' => 'required',
        'espeid' => 'required',

        'cedula' => 'required',
        'nombre' => 'required',
        'apellido' => 'required',
        'edad' => 'required',
        'genero' => 'required',
        'mail' => 'required',
        'celular' => 'required',
        'direccion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['rolid','espeid','cedula','nombre','apellido','edad','genero','mail','celular','direccion'];

    public function role()
    {
        return $this->hasOne('App\Models\Role', 'id', 'rolid');
    }
    public function especialidade()
    {
        return $this->hasOne('App\Models\Especialidade', 'id', 'espeid');
    }



}
