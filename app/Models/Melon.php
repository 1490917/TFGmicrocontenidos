<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Melon
 *
 * @property $id
 * @property $nom
 * @property $cognoms
 * @property $email
 * @property $password
 * @property $idioma
 * @property $niu
 * @property $tipus
 * @property $admin
 * @property $remember_token
 * @property $email_verified_at
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Melon extends Model
{
    
    static $rules = [
		'nom' => 'required',
		'cognoms' => 'required',
		'email' => 'required',
		'idioma' => 'required',
		'niu' => 'required',
		'tipus' => 'required',
		'admin' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nom','cognoms','email','idioma','niu','tipus','admin'];



}
