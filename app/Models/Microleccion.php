<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Microleccion
 *
 * @property $id
 * @property $titol_tema
 * @property $descrip
 * @property $updated_at
 * @property $created_at
 *
 * @property Microcontingut[] $microcontinguts
 * @property Tema $tema
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Microleccion extends Model
{
    
    static $rules = [
		'descrip' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titol_tema','descrip'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function microcontinguts()
    {
        return $this->hasMany('App\Models\Microcontingut', 'microleccio_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tema()
    {
        return $this->hasOne('App\Models\Tema', 'titol', 'titol_tema');
    }
    

}
