<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Registro
 *
 * @property $id
 * @property $nombreArch
 * @property $ubicacionArch
 * @property $telefono
 * @property $correo
 * @property $respNombre
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Registro extends Model
{
    
    static $rules = [
		'nombreArch' => 'required',
		'ubicacionArch' => 'required',
		'telefono' => 'required',
		'correo' => 'required',
		'respNombre' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombreArch','ubicacionArch','telefono','correo','respNombre'];



}
