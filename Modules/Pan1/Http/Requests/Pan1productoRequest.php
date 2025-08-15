<?php

namespace App\Http\Requests;

use Modules\Pan1\Models\{pan1producto};
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class Pan1productoRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {

        return true;
    }
}
