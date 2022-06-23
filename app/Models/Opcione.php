<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Opcione
 *
 * @property $id_opcion
 * @property $id_microcontingut
 * @property $opcion
 * @property $correcta
 *
 * @property Microcontingut $microcontingut
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Opcione extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_opcion','id_microcontingut','opcion','correcta'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function microcontingut()
    {
        return $this->hasOne('App\Models\Microcontingut', 'id', 'id_microcontingut');
    }
    

}
