<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'admin_id' => 'required|integer'. $this->id,
            'user_id' => 'required',
            'title' => 'required',
            'description' => 'required',
            'date_line' => 'required|date',
            'status' => 'nullable|boolean',
        ];
    }
}
