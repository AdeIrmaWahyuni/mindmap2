<?php

namespace App\Http\Requests;

use App\Models\PenilaianKerja;
use Illuminate\Foundation\Http\FormRequest;

class CreatePenilaianKerjaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return PenilaianKerja::$rules;
    }
}
