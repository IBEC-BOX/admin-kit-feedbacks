<?php

namespace AdminKit\Feedbacks\UI\API\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Collection;

class FeedbackStoreRequest extends FormRequest
{
    public function rules(): array
    {
        return collect(config('admin-kit-feedbacks.fields'))
            ->mapWithKeys(fn (array $item, string $key) => [
                $key => __($item['rules']),
            ])
            ->when(
                app()->environment('production'),
                fn (Collection $rules) => $rules->merge([
                    recaptchaFieldName() => recaptchaRuleName(),
                ])
            )
            ->toArray();
    }

    public function attributes(): array
    {
        return collect(config('admin-kit-feedbacks.fields'))
            ->filter(fn (array $item) => isset($item['label']))
            ->mapWithKeys(fn (array $item, string $key) => [
                $key => __($item['label']),
            ])
            ->toArray();
    }

    public function messages(): array
    {
        return [
            'required' => __('admin-kit-feedbacks::feedbacks.api.messages.required'),
            'string' => __('admin-kit-feedbacks::feedbacks.api.messages.string'),
            'max' => __('admin-kit-feedbacks::feedbacks.api.messages.max'),
            'min' => __('admin-kit-feedbacks::feedbacks.api.messages.min'),
            'recaptcha' => __('admin-kit-feedbacks::feedbacks.api.messages.recaptcha'),
        ];
    }
}
