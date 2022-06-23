<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Microcontingut
 *
 * @property $id
 * @property $title
 * @property $content
 * @property $type
 * @property $texto
 * @property $imagen
 * @property $video
 * @property $pregunta
 * @property $microleccio_id
 * @property $updated_at
 * @property $created_at
 *
 * @property LeitnerSystem[] $leitnerSystems
 * @property Microleccion $microleccion
 * @property Opcione[] $opciones
 * @property Respuestum[] $respuestas
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Microcontingut extends Model
{
    
    static $rules = [
		'title' => 'required',
		'content' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title','content','texto','imagen','video','pregunta','microleccio_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function leitnerSystems()
    {
        return $this->hasMany('App\Models\LeitnerSystem', 'id_microcontingut', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function microleccion()
    {
        return $this->hasOne('App\Models\Microleccion', 'id', 'microleccio_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function opciones()
    {
        return $this->hasMany('App\Models\Opcione', 'id_microcontingut', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function respuestas()
    {
        return $this->hasMany('App\Models\Respuestum', 'id_microcontingut', 'id');
    }
    

}
