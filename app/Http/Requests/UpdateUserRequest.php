<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Hash;

class UpdateUserRequest extends FormRequest
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
            'name'=>'required|string|max:50|min:3',
            'email'=>'required|email|max:30|min:3',
            'password'=>'nullable|max:20|min:8',
            'user_role'=>'in:admin,editor,user'
        ];
    }

    // ভ্যালিডেশনের পরে ডেটা প্রস্তুত করা
    public function validated($key = null, $default = null): array
    {
        $validated = parent::validated();

        // পাসওয়ার্ড ফিল্ড ভরা থাকলে হ্যাশ করুন, অন্যথায় আনসেট করুন
        if ($this->filled('password')) {
            $validated['password'] = Hash::make($this->input('password'));
        } else {
            unset($validated['password']);
        }

        return $validated;
    }

    public function message():array
    {
        return [
            'name.required'=>'নাম দিন',
            'name.string'=>'নাম অক্ষরের দিন',
            'name.max'=>'নাম ৫০ অক্ষরের বেশি হবেনা',
            'name.min'=>'নাম ৩ অক্ষরের কম হবেনা',

            'email.required'=> 'ইমেইল দিন',
            'email.email'=> 'সঠিক ইমেইল দিন',
            'email.max'=> 'ইমেইল ৩০ অক্ষরের বেশি হবেনা',
            'email.min'=> 'ইমেইল ৩ অক্ষরের কম হবেনা',

            'password.max'=>'পাসওয়ার্ড ২০ অক্ষরের বেশি হবেনা',
            'password.min'=>'পাসওয়ার্ড ৮ অক্ষরের কম হবেনা'
        ];
    }
}
