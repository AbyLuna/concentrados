<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Caja
 *
 * @property $id
 * @property $numActa
 * @property $numCaja
 * @property $numTomosCaja
 * @property $areaPert
 * @property $pasillo
 * @property $anaquel
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato[] $contratos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Caja extends Model
{
    
    static $rules = [
		'numActa' => 'required',
		'numCaja' => 'required',
		'numTomosCaja' => 'required',
		'areaPert' => 'required',
		'pasillo' => 'required',
		'anaquel' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numActa','numCaja','numTomosCaja','areaPert','pasillo','anaquel'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function contratos()
    {
        return $this->hasMany('App\Models\Contrato', 'caja_id', 'id');
    }
    

}
