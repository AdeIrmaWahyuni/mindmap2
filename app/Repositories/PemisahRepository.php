<?php

namespace App\Repositories;

use App\Models\Pemisah;
use App\Repositories\BaseRepository;

class PemisahRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'nama'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Pemisah::class;
    }
}
