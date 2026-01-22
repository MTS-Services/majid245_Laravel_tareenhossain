<?php

namespace App\Livewire\Backend\Admin\Faq;

use Livewire\Component;

class View extends Component
{
    public $model;

    public $form = [];

    public $statuses;

    public function mount($model)
    {
        $this->model = $model;

        // Initialize form with model data
        $this->form = [
            'question' => $model->question ?? '',
            'answer' => $model->answer ?? '',
            'status' => $model->status ?? 'active',
            // Add other fields as needed
            'eight_seater_price' => $model->eight_seater_price ?? '',
        ];

        // Define status options
        $this->statuses = [
            ['value' => 'active', 'label' => 'Active'],
            ['value' => 'inactive', 'label' => 'Inactive'],
            ['value' => 'draft', 'label' => 'Draft'],
        ];
    }

    public function resetForm()
    {
        $this->form = [
            'question' => $this->model->question ?? '',
            'answer' => $this->model->answer ?? '',
            'status' => $this->model->status ?? 'active',
            'eight_seater_price' => $this->model->eight_seater_price ?? '',
        ];
    }

    public function save()
    {
        $this->validate([
            'form.question' => 'required|string|max:255',
            'form.answer' => 'required|string',
            'form.status' => 'required|in:active,inactive,draft',
            // Add other validation rules
        ]);

        $this->model->update($this->form);

        session()->flash('message', 'FAQ updated successfully.');
    }

    public function render()
    {
        return view('livewire.backend.admin.faq.view');
    }
}
