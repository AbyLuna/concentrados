<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id
 * @property $numContrato
 * @property $area
 * @property $descripcion
 * @property $numTomosExp
 * @property $bitacora
 * @property $caja_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Caja $caja
 * @property Expediente[] $expedientes
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
    
    static $rules = [
		'numContrato' => 'required',
		'area' => 'required',
		'descripcion' => 'required',
		'numTomosExp' => 'required',
		'bitacora' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numContrato','area','descripcion','numTomosExp','bitacora','caja_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function caja()
    {
        return $this->hasOne('App\Models\Caja', 'id', 'caja_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function expedientes()
    {
        return $this->hasMany('App\Models\Expediente', 'contrato_id', 'id');
    }
    

}
