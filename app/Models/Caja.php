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
 * @property $contrato_id
 * @property $created_at
 * @property $updated_at
 *
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
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numActa','numCaja','numTomosCaja','areaPert','contrato_id'];
     

    //uno a muchos (1 caja- M expedientes)

    public function expedientes(){
		
      return $this->hasMany('App\Models\Expediente');
    }

}
<