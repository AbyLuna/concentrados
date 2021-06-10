<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Location
 *
 * @property $id
 * @property $pasillo
 * @property $anaquel
 * @property $imagen
 * @property $created_at
 * @property $updated_at
 *
 * @property Expediente $expediente
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Location extends Model
{
    
    static $rules = [
		'pasillo' => 'required',
		'anaquel' => 'required',
		'imagen' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['pasillo','anaquel','imagen'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function expediente()
    {
        return $this->hasOne('App\Models\Expediente', 'location_id', 'id');
    }

}
