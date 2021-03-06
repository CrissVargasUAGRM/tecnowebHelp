<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'nombre',
        'apellido',
        'ci',
        'correo',
        'password',
        'rol_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rol(){
        return $this->hasOne(role::class);
    }
    
    /* relacion uno a muchos */
    public function viaticos(){
        return $this->hasMany(viatico::class);
    }

    public function telefonos(){
        return $this->hasMany(telefonouser::class);
    }

    /* relacion muchos a muchos */
    /* public function servicios(){
        return $this->BelongsToMany(servicio::class);
    } */

    /* relacion uno a muchos con servicios */

    public function servicios(){
        return $this->hasMany(servicio::class);
    }
}
