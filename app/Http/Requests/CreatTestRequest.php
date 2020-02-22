<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatTestRequest extends FormRequest
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
        return [
            'exam_name' => 'required|min:3|max:255',
            'article_name.*' => 'required|max:255',
            'article_detail.*' => 'required|max:5000',

            'text1_1.*' => 'required|max:255',
            'text1_2.*' => 'required|max:255',
            'text1_3.*' => 'required|max:255',
            'text1_4.*' => 'required|max:255',
            'text1_5.*' => 'required|max:255',
            'text1_6.*' => 'required|max:255',
            'text1_7.*' => 'required|max:255',
            'text1_8.*' => 'required|max:255',
            'text1_9.*' => 'required|max:255',
            'text1_10.*' => 'required|max:255',

            'set1_1_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/', 
            'set1_2_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',
            'set1_3_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',
            'set1_4_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',
            'set1_5_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',
            'set1_6_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',
            'set1_7_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',
            'set1_8_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',
            'set1_9_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',
            'set1_10_1.*' => 'required|max:3|regex:/([0-9][0-9][ADFH])/',

            'set1_1_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_2_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_3_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_4_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_5_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_6_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_7_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',            
            'set1_8_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_9_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_10_2.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',

            'set1_1_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_2_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_3_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_4_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_5_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_6_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_7_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',            
            'set1_8_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_9_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_10_3.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',

            'set1_1_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_2_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_3_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_4_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_5_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_6_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_7_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',            
            'set1_8_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_9_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            'set1_10_4.*' => 'max:3|nullable|regex:/([0-9][0-9][ADFH])/',
            
            

            
        ];
    }
}
