<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 use Spatie\Permission\Traits\HasRoles;
 use Illuminate\Foundation\Auth\User as Authenticatable;
 use Illuminate\Notifications\Notifiable;
class User extends Authenticatable
{
     use SoftDeletes, HasRoles, Notifiable;   
     
     public $table = 'users';

    public $fillable = [
        'name',
        'email',
        'password',
        'remember_token'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',
        'remember_token' => 'string'
    ];

    public static array $rules = [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required'
    ];


    public function logs(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\Log::class,'users_id');
    }

    public function penilaianKerja(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(\App\Models\PenilaianKerja::class, 'users_id');
    }

}
