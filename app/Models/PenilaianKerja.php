<?php

namespace App\Models;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

use Illuminate\Database\Eloquent\Model;
class PenilaianKerja extends Model implements HasMedia
{
    use InteractsWithMedia;
    public $table = 'penilaian_kerja';

    public $fillable = [
        'no_butir',
        'bobot_penilaian',
        'elemen_penilaian',
        'deskriptor',
        'baik_jika',
        'penilaian',
        'link',
        'hasil_asesmen',
        'lokasi_penyimpanan',
        'pemisah_id',
        'users_id'
    ];

    protected $casts = [
        'id' => 'integer',
        'no_butir' => 'string',
        'bobot_penilaian' => 'integer',
        'elemen_penilaian' => 'string',
        'deskriptor' => 'string',
        'baik_jika' => 'string',
        'penilaian' => 'integer',
        'link' => 'string',
        'hasil_asesmen' => 'string',
        'lokasi_penyimpanan' => 'string',
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
