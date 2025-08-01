<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=> 'required|string|max:150|min:5',
            'slug'=>'required|string|max:20|min:2',
            'category_id'=>'required',
            'author_id'=>'required',
            'content'=>'required|string|max:500'

        ];
    }
    public function messages(): array
    {
        return [
            'title.required'=>'টাইটেল দিন',
            'title.string'=>'শুধুমাত্র অক্ষর ব্যবহার করুন',
            'title.max'=>'150 অক্ষরের বেশি হবে না',
            'title.min'=>'5 অক্ষরের বেশি দিন',

            'slug.required'=>'স্লাগ দিন',
            'slug.string'=>'স্লাগ অক্ষরের হতে হবে',
            'slug.max'=>'স্লাগ 20 অক্ষরের বেশি হবে না',
            'slug.min'=>'স্লাগ 2 অক্ষরের বেশি দিন',

            'category_id.required'=>'ক্যাটাগরি দিন',

            'author_id.required'=>'অথর দিন',

            'content.required'=>'কন্টেন্ট লিখুন',
            'content.string'=>'কন্টেন্ট অক্ষরের লিখুন',
            'content.max'=>'কন্টেন্ট 500 অক্ষরের কম লিখুন',
        ];
    }
}
