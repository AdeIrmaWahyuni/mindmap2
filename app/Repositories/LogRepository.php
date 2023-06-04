<?php

namespace App\Repositories;

use App\Models\Log;
use App\Repositories\BaseRepository;

class LogRepository extends BaseRepository
{
    protected $fieldSearchable = [
        'pesan',
        'users_id'
    ];

    public function getFieldsSearchable(): array
    {
        return $this->fieldSearchable;
    }

    public function model(): string
    {
        return Log::class;
    }
}
