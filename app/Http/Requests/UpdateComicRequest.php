<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateComicRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "title" => ['required', 'min:2', 'max:100'],
            "thumb" => ['required', 'min:10'],
            "description" => ['min:2'],
            "price" => ['required', 'min:6', 'max:9'],
            "sale_date" => ['min:2', 'max:100'],
            "type" => ['min:2', 'max:100'],
        ];
    }
}
