<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Expediente
 *
 * @property $id
 * @property $numSerie
 * @property $descripcion
 * @property $fechaApertura
 * @property $fechaCierre
 * @property $valorDocumental_id
 * @property $valorInformacion_id
 * @property $vigConcentracion_id
 * @property $vigTramite_id
 * @property $totalVigencia
 * @property $destinoFinal_id
 * @property $signatura
 * @property $observaciones
 * @property $contrato_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Contrato $contrato
 * @property Destinofinal $destinofinal
 * @property Valordocumental $valordocumental
 * @property Valorinformacion $valorinformacion
 * @property Vigconcentracion $vigconcentracion
 * @property Vigtramite $vigtramite
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Expediente extends Model
{
    
    static $rules = [
		'numSerie' => 'required',
		'descripcion' => 'required',
		'fechaApertura' => 'required',
		'fechaCierre' => 'required',
		'valorDocumental_id' => 'required',
		'valorInformacion_id' => 'required',
		'vigConcentracion_id' => 'required',
		'vigTramite_id' => 'required',
		'totalVigencia' => 'required',
		'destinoFinal_id' => 'required',
		'signatura' => 'required',
		'observaciones' => 'required',
		'contrato_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numSerie','descripcion','fechaApertura','fechaCierre','valorDocumental_id','valorInformacion_id','vigConcentracion_id','vigTramite_id','totalVigencia','destinoFinal_id','signatura','observaciones','contrato_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function contrato()
    {
        return $this->hasOne('App\Models\Contrato', 'id', 'contrato_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function destinofinal()
    {
        return $this->hasOne('App\Models\Destinofinal', 'id', 'destinoFinal_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function valordocumental()
    {
        return $this->hasOne('App\Models\Valordocumental', 'id', 'valorDocumental_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function valorinformacion()
    {
        return $this->hasOne('App\Models\Valorinformacion', 'id', 'valorInformacion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vigconcentracion()
    {
        return $this->hasOne('App\Models\Vigconcentracion', 'id', 'vigConcentracion_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function vigtramite()
    {
        return $this->hasOne('App\Models\Vigtramite', 'id', 'vigTramite_id');
    }
    

}
