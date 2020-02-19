<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieRequest extends FormRequest
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

            $id = $this->movie ? ',' . $this->movie->id : '';
            return 
            [
            'title' => 'required|string|max:50',
            'year' => 'required|numeric|max:2030|min:1900',
            'artist_id' => 'required|numeric|max:20',
            ];
        
        
    }
}