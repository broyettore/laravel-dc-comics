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
            "title" => "required|max:60",
            "description" => "required",
            "thumb" => "required|url",
            "price" => "required|numeric|decimal:2",
            "series" => "required",
            "sale_date" => "required|date",
            "type" => "required",
            "artists" => "required",
            "writers" => "required",
        ];
    }

    public function messages() {
        return [
            "title.required" => "the title is a must have, write one",
            "description.required" => "write a description",
            "thumb.required" => "write a valid url or it won't work",
            "price.required" => "price should not be left blank, write one like 9.99",
            "series.required" => "you forgot to write a series",
            "sale_date.required" => "i know its a pain but write date like YYYY-MM-DD HH-MM-SS",
            "type.required" => "type is a must, write one like horror, action etc...",
            "artists.required" => "mention some artists please",
            "writers.required" => "mention some writers please",
        ];
    }
}

