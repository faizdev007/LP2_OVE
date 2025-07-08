<?php

namespace App\Livewire\SiliconValley;

use Livewire\Component;

class QueryBlock extends Component
{
    public $devs,$technologies=[],$hirefor;
    public function submitForm()
    {
        dd($this);
        $this->validate([
            'devs' => 'required',
            'technologies' => 'required|array|min:1',
        ]);

        // Process the form data as needed
        // For example, you can save it to the database or send an email

        session()->flash('message', 'Form submitted successfully!');
    }   
    public function render()
    {
        return view('livewire.silicon-valley.query-block');
    }
}
