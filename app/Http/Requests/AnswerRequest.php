<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AnswerRequest extends FormRequest
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

    public function messages(){
    return [
        'set1_1_1.0.required' => 'ข้อที่ 1 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_2_1.0.required' => 'ข้อที่ 2 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_3_1.0.required' => 'ข้อที่ 3 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_4_1.0.required' => 'ข้อที่ 4 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_5_1.0.required' => 'ข้อที่ 5 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_6_1.0.required' => 'ข้อที่ 6 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_7_1.0.required' => 'ข้อที่ 7 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_8_1.0.required' => 'ข้อที่ 8 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_9_1.0.required' => 'ข้อที่ 9 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_10_1.0.required' => 'ข้อที่ 10 บทความที่ 1 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',

        'set1_1_1.1.required' => 'ข้อที่ 11 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_2_1.1.required' => 'ข้อที่ 12 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_3_1.1.required' => 'ข้อที่ 13 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_4_1.1.required' => 'ข้อที่ 14 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_5_1.1.required' => 'ข้อที่ 15 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_6_1.1.required' => 'ข้อที่ 16 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_7_1.1.required' => 'ข้อที่ 17 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_8_1.1.required' => 'ข้อที่ 18 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_9_1.1.required' => 'ข้อที่ 19 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',
        'set1_10_1.1.required' => 'ข้อที่ 20 บทความที่ 2 คุณลืมเติมคำตอบ หากมันไม่เชื่อมกับอะไรเลยให้เติม 99H',

        'set1_1_1.0.regex' => 'ข้อที่ 1 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_2_1.0.regex' => 'ข้อที่ 2 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_3_1.0.regex' => 'ข้อที่ 3 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_4_1.0.regex' => 'ข้อที่ 4 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_5_1.0.regex' => 'ข้อที่ 5 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_6_1.0.regex' => 'ข้อที่ 6 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_7_1.0.regex' => 'ข้อที่ 7 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_8_1.0.regex' => 'ข้อที่ 8 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_9_1.0.regex' => 'ข้อที่ 9 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_10_1.0.regex' => 'ข้อที่ 10 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',

        'set1_1_2.0.regex' => 'ข้อที่ 1 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_2_2.0.regex' => 'ข้อที่ 2 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_3_2.0.regex' => 'ข้อที่ 3 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_4_2.0.regex' => 'ข้อที่ 4 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_5_2.0.regex' => 'ข้อที่ 5 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_6_2.0.regex' => 'ข้อที่ 6 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_7_2.0.regex' => 'ข้อที่ 7 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_8_2.0.regex' => 'ข้อที่ 8 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_9_2.0.regex' => 'ข้อที่ 9 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_10_2.0.regex' => 'ข้อที่ 10 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',

        'set1_1_3.0.regex' => 'ข้อที่ 1 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_2_3.0.regex' => 'ข้อที่ 2 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_3_3.0.regex' => 'ข้อที่ 3 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_4_3.0.regex' => 'ข้อที่ 4 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_5_3.0.regex' => 'ข้อที่ 5 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_6_3.0.regex' => 'ข้อที่ 6 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_7_3.0.regex' => 'ข้อที่ 7 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_8_3.0.regex' => 'ข้อที่ 8 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_9_3.0.regex' => 'ข้อที่ 9 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_10_3.0.regex' => 'ข้อที่ 10 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',

        'set1_1_4.0.regex' => 'ข้อที่ 1 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_2_4.0.regex' => 'ข้อที่ 2 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_3_4.0.regex' => 'ข้อที่ 3 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_4_4.0.regex' => 'ข้อที่ 4 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_5_4.0.regex' => 'ข้อที่ 5 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_6_4.0.regex' => 'ข้อที่ 6 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_7_4.0.regex' => 'ข้อที่ 7 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_8_4.0.regex' => 'ข้อที่ 8 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_9_4.0.regex' => 'ข้อที่ 9 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_10_4.0.regex' => 'ข้อที่ 10 บทความที่ 1 รูปแบบคำตอบไม่ถูกต้อง',

        'set1_1_1.1.regex' => 'ข้อที่ 11 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_2_1.1.regex' => 'ข้อที่ 12 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_3_1.1.regex' => 'ข้อที่ 13 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_4_1.1.regex' => 'ข้อที่ 14 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_5_1.1.regex' => 'ข้อที่ 15 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_6_1.1.regex' => 'ข้อที่ 16 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_7_1.1.regex' => 'ข้อที่ 17 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_8_1.1.regex' => 'ข้อที่ 18 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_9_1.1.regex' => 'ข้อที่ 19 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_10_1.1.regex' => 'ข้อที่ 20 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        
        'set1_1_2.1.regex' => 'ข้อที่ 11 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_2_2.1.regex' => 'ข้อที่ 12 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_3_2.1.regex' => 'ข้อที่ 13 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_4_2.1.regex' => 'ข้อที่ 14 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_5_2.1.regex' => 'ข้อที่ 15 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_6_2.1.regex' => 'ข้อที่ 16 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_7_2.1.regex' => 'ข้อที่ 17 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_8_2.1.regex' => 'ข้อที่ 18 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_9_2.1.regex' => 'ข้อที่ 19 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_10_2.1.regex' => 'ข้อที่ 20 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',

        'set1_1_3.1.regex' => 'ข้อที่ 11 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_2_3.1.regex' => 'ข้อที่ 12 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_3_3.1.regex' => 'ข้อที่ 13 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_4_3.1.regex' => 'ข้อที่ 14 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_5_3.1.regex' => 'ข้อที่ 15 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_6_3.1.regex' => 'ข้อที่ 16 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_7_3.1.regex' => 'ข้อที่ 17 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_8_3.1.regex' => 'ข้อที่ 18 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_9_3.1.regex' => 'ข้อที่ 19 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_10_3.1.regex' => 'ข้อที่ 20 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',

        'set1_1_4.1.regex' => 'ข้อที่ 11 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_2_4.1.regex' => 'ข้อที่ 12 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_3_4.1.regex' => 'ข้อที่ 13 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_4_4.1.regex' => 'ข้อที่ 14 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_5_4.1.regex' => 'ข้อที่ 15 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_6_4.1.regex' => 'ข้อที่ 16 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_7_4.1.regex' => 'ข้อที่ 17 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_8_4.1.regex' => 'ข้อที่ 18 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_9_4.1.regex' => 'ข้อที่ 19 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        'set1_10_4.1.regex' => 'ข้อที่ 20 บทความที่ 2 รูปแบบคำตอบไม่ถูกต้อง',
        
        
    ];
}
}