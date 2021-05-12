<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expediente
 *
 * @property $id
 * @property $numSerie
 * @property $fechaApertura
 * @property $fechaCierre
 * @property $valorDocumental_id
 * @property $valorInformacion_id
 * @property $vigConcentracion_id
 * @property $vigTramite_id
 * @property $totalVigencia
 * @property $destinoFinal_id
 * @property $signatura
 * @property $location_id
 * @property $observaciones
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Expediente extends Model
{
    
    static $rules = [
		'numSerie' => 'required',
		'fechaApertura' => 'required',
		'fechaCierre' => 'required',
		'valorDocumental_id' => 'required',
		'valorInformacion_id' => 'required',
		'vigConcentracion_id' => 'required',
		'vigTramite_id' => 'required',
		'totalVigencia' => 'required',
		'destinoFinal_id' => 'required',
		'signatura' => 'required',
		'location_id' => 'required',
		'observaciones' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numSerie','fechaApertura','fechaCierre','valorDocumental_id','valorInformacion_id','vigConcentracion_id','vigTramite_id','totalVigencia','destinoFinal_id','signatura','location_id','observaciones'];

    public function contrato(){
		
		return $this-> hasOne('App\Models\Contrato');
	}

	//relacion uno a muchos (inversas) M- exp en una caja
	public function caja(){
		
		return $this->belongTo('App\Models\Caja');
		 
	}





}
