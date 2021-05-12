<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Contrato
 *
 * @property $id
 * @property $numContrato
 * @property $descripcion
 * @property $numTomosExp
 * @property $bitacora
 * @property $expediente_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Contrato extends Model
{
    
    static $rules = [
		'numContrato' => 'required',
		'descripcion' => 'required',
		'numTomosExp' => 'required',
		'bitacora' => 'required',
		'expediente_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numContrato','descripcion','numTomosExp','bitacora','expediente_id'];

   //relacion uno a uno ( 1:exp- No.Contrato)
    public function expediente(){
		
     return $this->hasOne('App\Models\Expediente');
   
}

}
