<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class ComicRequest extends FormRequest
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
            'title' => 'required|min:3|max:100',
            'thumb' => 'required|min:3|max:255',
            'price' => 'required|min:3|max:10',
            'series' => 'required|min:3|max:30',
            'type' => 'required|min:2|max:20',
            'description' => 'required|min:2|max:20'
        ];
    }
}
