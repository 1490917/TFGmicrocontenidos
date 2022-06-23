<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Assignatura
 *
 * @property $codi
 * @property $curs
 * @property $semestre
 * @property $nom_grau
 * @property $nom
 * @property $password
 *
 * @property Estudiant $estudiant
 * @property Faq[] $faqs
 * @property Grau $grau
 * @property Notificacio[] $notificacios
 * @property Professor[] $professors
 * @property Sequenciatemari[] $sequenciatemaris
 * @property Tema[] $temas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Assignatura extends Model
{
    
    static $rules = [
		'codi' => 'required',
		'curs' => 'required',
		'semestre' => 'required',
		'nom' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codi','curs','semestre','nom_grau','nom'];
    protected $primaryKey = 'codi';
    public $incrementing=false;
    public $keyType='int';


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estudiant()
    {
        return $this->hasOne('App\Models\Estudiant', 'codi_assignatura', 'codi');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function faqs()
    {
        return $this->hasMany('App\Models\Faq', 'codi_assignatura', 'codi');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grau()
    {
        return $this->hasOne('App\Models\Grau', 'nom', 'nom_grau');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function notificacios()
    {
        return $this->hasMany('App\Models\Notificacio', 'codi_assignatura', 'codi');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function professors()
    {
        return $this->hasMany('App\Models\Professor', 'codi_assignatura', 'codi');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sequenciatemaris()
    {
        return $this->hasMany('App\Models\Sequenciatemari', 'codi_assignatura', 'codi');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function temas()
    {
        return $this->hasMany('App\Models\Tema', 'codi_assignatura', 'codi');
    }
    

}
