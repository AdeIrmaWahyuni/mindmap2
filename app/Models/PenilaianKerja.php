<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class PenilaianKerja extends Model
{
     public $table = 'penilaian_kerja';

    public $fillable = [
        'bobot_penilaian',
        'elemen_penilaian',
        'deskriptor',
        'baik_jika',
        'hasil_esesmen',
        'pemisah_id',
        'users_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'bobot_penilaian' => 'string',
        'elemen_penilaian' => 'string',
        'deskriptor' => 'string',
        'baik_jika' => 'string',
        'hasil_esesmen' => 'string',
        'pemisah_id' => 'integer',
        'users_id' => 'integer'
    ];

    public static array $rules = [
        
    ];

    
}
