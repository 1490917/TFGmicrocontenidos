<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grau
 *
 * @property $nom
 * @property $codi
 *
 * @property Assignatura[] $assignaturas
 * @property Faq[] $faqs
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grau extends Model
{
    
    static $rules = [
		'nom' => 'required',
		'codi' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','codi'];
    protected $primaryKey = 'nom';
    public $incrementing=false;
    public $keyType='string';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function assignaturas()
    {
        return $this->hasMany('App\Models\Assignatura', 'nom_grau', 'nom');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faqs()
    {
        return $this->hasMany('App\Models\Faq', 'nom_grau', 'nom');
    }
    

}
