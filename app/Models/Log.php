<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Log extends Model
{
    public $table = 'log';

    public $fillable = [
        'pesan',
        'users_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'pesan' => 'string',
        'users_id' => 'integer'
    ];

    public static array $rules = [
        
    ];

    public function users(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'users_id');
    }

    
    
}
