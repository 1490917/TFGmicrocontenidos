<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Faq
 *
 * @property $titol
 * @property $resposta
 * @property $categoria
 * @property $codi_assignatura
 * @property $nom_grau
 * @property $titol_tema
 * @property $id
 * @property $updated_at
 * @property $created_at
 *
 * @property Assignatura $assignatura
 * @property Consultum $consultum
 * @property Consultum[] $consultas
 * @property Consultum2[] $consultas2
 * @property Grau $grau
 * @property Tema $tema
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Faq extends Model
{
    
    static $rules = [
		'titol' => 'required',
		'resposta' => 'required',
		'categoria' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['titol','resposta','categoria','codi_assignatura','nom_grau','titol_tema'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function assignatura()
    {
        return $this->hasOne('App\Models\Assignatura', 'codi', 'codi_assignatura');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function consultum()
    {
        return $this->hasOne('App\Models\Consultum', 'titol_faq', 'titol');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas()
    {
        return $this->hasMany('App\Models\Consultum', 'codi_assignatura', 'codi_assignatura');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function consultas2()
    {
        return $this->hasMany('App\Models\Consultum2', 'nom_grau', 'nom_grau');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grau()
    {
        return $this->hasOne('App\Models\Grau', 'nom', 'nom_grau');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tema()
    {
        return $this->hasOne('App\Models\Tema', 'titol', 'titol_tema');
    }
    

}
