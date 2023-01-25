<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
                'title'=>'required|string|min:1|max:50',
                'description' => 'nullable|string',
                'thumb' => 'nullable|url|max:255',
                'price' => 'required|decimal:2|max:1000',
                'series' => 'required|string|max:100',
                'sale_date' => 'required|date|before:tomorrow',
                'type' => 'required|string|max:50'
        ];
    }
}
