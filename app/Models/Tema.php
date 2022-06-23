<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tema
 *
 * @property $codi_assignatura
 * @property $titol
 * @property $id
 * @property $descripcio
 *
 * @property Assignatura $assignatura
 * @property Faq[] $faqs
 * @property Microleccion[] $microleccions
 * @property Sequenciatemari $sequenciatemari
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tema extends Model
{
    
    static $rules = [
		'titol' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codi_assignatura','titol','descripcio'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assignatura()
    {
        return $this->hasOne('App\Models\Assignatura', 'codi', 'codi_assignatura');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faqs()
    {
        return $this->hasMany('App\Models\Faq', 'titol_tema', 'titol');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function microleccions()
    {
        return $this->hasMany('App\Models\Microleccion', 'titol_tema', 'titol');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sequenciatemari()
    {
        return $this->hasOne('App\Models\Sequenciatemari', 'titol_tema', 'titol');
    }
    

}
