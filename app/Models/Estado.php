<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Estado
 *
 * @property $id
 * @property $sigla
 * @property $descripcion
 * @property $created_at
 * @property $updated_at
 *
 * @property Asignacion[] $asignacions
 * @property Confiden[] $confidens
 * @property Requerimiento[] $requerimientos
 * @property Transferencia[] $transferencias
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Estado extends Model
{
    
    static $rules = [
		'sigla' => 'required',
		'descripcion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['sigla','descripcion'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function asignacions()
    {
        return $this->hasMany('App\Models\Asignacion', 'estadoid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function confidens()
    {
        return $this->hasMany('App\Models\Confiden', 'estadoid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function requerimientos()
    {
        return $this->hasMany('App\Models\Requerimiento', 'estadoid', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transferencias()
    {
        return $this->hasMany('App\Models\Transferencia', 'estadoid', 'id');
    }
    

}
