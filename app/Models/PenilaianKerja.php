<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class PenilaianKerja extends Model
{
    public $table = 'penilaian_kerja';

    public $fillable = [
        'no_butir',
        'bobot_penilaian',
        'elemen_penilaian',
        'deskriptor',
        'baik_jika',
        'hasil_asesmen',
        'pemisah_id',
        'users_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'no_butir' => 'string',
        'bobot_penilaian' => 'string',
        'elemen_penilaian' => 'string',
        'deskriptor' => 'string',
        'baik_jika' => 'string',
        'hasil_asesmen' => 'string',
        'pemisah_id' => 'integer',
        'users_id' => 'integer'
    ];

    public static array $rules = [
        
    ];


    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(\App\Models\User::class, 'user_id');
    }

    public function pemisah(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(\App\Models\Profile::class, 'pemisah_id');
    }

}
