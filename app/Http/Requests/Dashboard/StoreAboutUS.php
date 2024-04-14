<?php

namespace App\Http\Requests\Dashboard;

use App\Models\About;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAboutUS extends FormRequest
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
            'image' => ['nullable','image','mimes:png,jpg,jpeg',Rule::requiredIf(function(){ return !isset(About::first()->id);})],
            'ar.title' => ['required','string'],
            'ar.description' => ['required'],
            'ar.short_description' => ['required'],
            'en.title' => ['required','string'],
            'en.description' => ['required'],
            'en.short_description' => ['required'],
        ];
    }
}
