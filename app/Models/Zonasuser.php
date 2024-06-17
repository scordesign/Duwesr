<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Zonasuser
 *
 * @property $id
 * @property $id_usu
 * @property $id_muni
 * @property $created_at
 * @property $updated_at
 *
 * @property Zona $zona
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Zonasuser extends Model
{
    
    static $rules = [
		'id_usu' => 'required',
		'id_zon' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['id_usu','id_zon'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function zona()
    {
        return $this->hasOne('App\Models\Zona', 'id', 'id_zon');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'id_usu');
    }
    

}
