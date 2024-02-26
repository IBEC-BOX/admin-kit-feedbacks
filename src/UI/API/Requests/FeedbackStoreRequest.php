<?php

namespace AdminKit\Feedbacks\UI\API\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FeedbackStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'phone' => 'required|string|min:18|max:18',
        ];
    }

    public function messages(): array
    {
        return [
            'required' => __('admin-kit-feedbacks::feedbacks.api.messages.required'),
            'string' => __('admin-kit-feedbacks::feedbacks.api.messages.string'),
            'max' => __('admin-kit-feedbacks::feedbacks.api.messages.max'),
            'min' => __('admin-kit-feedbacks::feedbacks.api.messages.min'),
        ];
    }

    public function attributes(): array
    {
        return [
            'name' => __('admin-kit-feedbacks::feedbacks.api.attributes.name'),
            'phone' => __('admin-kit-feedbacks::feedbacks.api.attributes.phone'),
        ];
    }
}
