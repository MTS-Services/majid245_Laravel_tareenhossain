<?php

namespace App\Livewire\Backend\Admin\Faq;

use App\Enums\ActiveInactiveStatus;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Create extends Component
{
    // Initialize the form property as an array
    public array $form = [];

    // Or if using Livewire Forms, initialize it properly
    public function mount()
    {
        $this->form = [
            'question' => '',
            'answer' => '',
            'status' => true,
            // Add other fields
        ];
    }
    
    #[Validate([
        'form.question' => 'required|string|max:255',
        'form.answer' => 'required|string',
        'form.status' => 'boolean',
    ])]
    public function save()
    {
        $validated = $this->validate();

        try {
            $this->service->createData($validated['form']);

            $this->dispatch('FaqCreated');
            $this->success('Data created successfully');
            $this->resetForm();

            return $this->redirect(route('admin.faq.index'), navigate: true);
        } catch (\Exception $e) {
            Log::error('Failed to create FAQ: '.$e->getMessage());
            $this->error('Failed to create FAQ');
        }
    }

    public function resetForm()
    {
        $this->form = [
            'question' => '',
            'answer' => '',
            'status' => true,
        ];
        $this->resetValidation();
    }

    public function render()
    {
        return view('livewire.backend.admin.faq.create', [
            'statuses' => ActiveInactiveStatus::options(),
        ]);
    }
}
