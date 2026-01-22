<?php

namespace App\Livewire\Forms;

use Livewire\Form;

class FaqForm extends Form
{
    public ?int $id = null;

    public ?string $route_from = null;

    public ?string $answer = null;

    public ?string $status = null;

    // Add other properties as needed
    public ?string $question = null;

    public ?string $eight_seater_price = null;

    public function rules(): array
    {
        return [

            'answer' => 'required|string',
            'status' => 'required|string',
            'question' => 'nullable|string|max:500',
            // Add other validation rules as needed
        ];
    }

    public function messages(): array
    {
        return [
            'answer.required' => 'The answer field is required.',
            'status.required' => 'Please select a status.',
            // Add custom messages if needed
        ];
    }

    public function validationAttributes(): array
    {
        return [
            'route_from' => 'route from',
            'answer' => 'answer',
            'status' => 'status',
            // Add custom attribute names if needed
        ];
    }

    public function setData($data): void
    {
        $this->id = $data->id;
        $this->route_from = $data->route_from;
        $this->question = $data->question;
        $this->answer = $data->answer;
        $this->status = $data->status->value;
        $this->eight_seater_price = $data->eight_seater_price;
    }
}
