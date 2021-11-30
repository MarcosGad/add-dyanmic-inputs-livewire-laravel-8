<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DyanmicInputs extends Component
{
    public $inputs;

    public function addInput()
    {
        $this->inputs->push(['email' => '']);
    }

    public function removeInput($key)
    {
        $this->inputs->pull($key);
    }

    public function mount()
    {
        $this->fill([
            'inputs' => collect([['email' => '']]),
        ]);
    }

    protected $rules = [
        'inputs.*.email' => 'required',
    ];
    
    protected $messages = [
        'inputs.*.email.required' => 'This email field is required.',
    ];
    
    public function submit()
    {
        $this->validate();
    }

    public function render()
    {
        return view('livewire.dyanmic-inputs');
    }
}
