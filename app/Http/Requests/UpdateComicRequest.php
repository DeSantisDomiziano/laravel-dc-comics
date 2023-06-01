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

    public function messages()
    {
        return [
            'title.min' => 'il titolo del fumetto è troppo corto, minimo 2 caratteri',
            'title.max' => 'il titolo del fumetto è troppo lungo, massimo 100 caratteri',
            'thumb.min' => 'il percorso all\'immagine del fumetto è troppo corto, minimo 10 caratteri',
            'description.min' => 'la descrizione è troppo corta, minimo 2 caratteri',
            'price.min' => 'il prezzo è troppo basso',
            'price.max' => 'il prezzo è troppo alto',
        ];
    }
}
