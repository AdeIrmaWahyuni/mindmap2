<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Pemisah extends Model
{
    public $table = 'pemisah';

    public $fillable = [
        'nama'
    ];

    protected $casts = [
        'id' => 'integer',
        'nama' => 'string'
    ];

    public static array $rules = [
        
    ];


    public function penilaianKerjas(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\PenilaianKerja::class, 'pemisah_id');
    }
    
}
