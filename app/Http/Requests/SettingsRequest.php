<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingsRequest extends FormRequest
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
        if(isset(request()->table)){
            return [
                'first_name' => 'required|string|max:255|min:3',
                'last_name' => 'required|string|max:255|min:3',
                'about_me' => 'string|max:255|nullable',
                'location' => 'string|max:255|nullable',
                'working_at' => 'string|max:255|nullable',
                'relationship' => 'string|max:30|nullable',
                'background_image' => 'nullable|image|max:1999',
                'profile_image' => 'nullable|image|max:1999'
            ];
        }else{
            return [
                'who_can_follow' => 'required|integer',
                'show_my_activities' => 'required|integer',
                'display_in_search_engine' => 'nullable',
            ];
        }
    }
}
