<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Transferencia
 *
 * @property $id
 * @property $empleado_ega
 * @property $empleado_ing
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
class Transferencia extends Model
{
    
    static $rules = [
		'empleado_ega' => 'required',
		'empleado_ing' => 'required',
		'fecha' => 'required',
		'hora' => 'required',
		'userid' => 'required',
		'estadoid' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['empleado_ega','empleado_ing','fecha','hora','userid','estadoid'];


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
