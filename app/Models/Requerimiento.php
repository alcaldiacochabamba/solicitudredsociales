<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Requerimiento
 *
 * @property $id
 * @property $funcionario
 * @property $fecha
 * @property $hora
 * @property $userid
 * @property $estadoid
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property User $user
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Requerimiento extends Model
{
    
    static $rules = [
		'funcionario' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['funcionario'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estado()
    {
        return $this->hasOne('App\Models\Estado', 'id', 'estadoid');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function user()
    {
        return $this->hasOne('App\Models\User', 'id', 'userid');
    }
    

}
