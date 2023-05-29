<?php

namespace App\Repositories;

use App\Models\PenilaianKerja;
use App\Repositories\BaseRepository;

class PenilaianKerjaRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'bobot_penilaian',
        'elemen_penilaian',
        'deskriptor',
        'baik_jika',
        'hasil_esesmen',
        'pemisah_id',
        'users_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return PenilaianKerja::class;
    }
}
