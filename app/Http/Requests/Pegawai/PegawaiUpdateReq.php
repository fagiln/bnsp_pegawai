<?php

namespace App\Http\Requests\Pegawai;

use Illuminate\Foundation\Http\FormRequest;

class PegawaiUpdateReq extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nip' => 'required|string|max:18',
            'first_name' => 'required|string|max:10',
            'last_name' => 'nullable|string|max:10',
            'jk' => 'required|in:L,P',
            'alamat' => 'required|string',
            'no_hp' => 'required|regex:/^[0-9]+$/|digits_between:10,13',
        ];
    }
}
