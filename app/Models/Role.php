<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
 use Illuminate\Database\Eloquent\SoftDeletes;
 
class Role extends \Spatie\Permission\Models\Role
{
     public $table = 'roles';

    public $fillable = [
        'name',
        'guard_name'
    ];

    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'guard_name' => 'string'
    ];

    public static array $rules = [
        'name' => 'required',
        'guard_name' => 'required'
    ];

    
}
