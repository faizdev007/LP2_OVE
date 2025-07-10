<?php

namespace App\Livewire\SiliconValley;

use App\Facades\LandingPagePatch;
use Livewire\Component;

class TextSlider extends Component
{
    public $lp_data,$sliding_text,$paragraph;
    public $successMessage = '';
    public $errorMessage = '';

    public function mount($lp_data)
    {
        $this->lp_data = isset($lp_data) ? $lp_data : [];
        $jsonData = isset($lp_data['page_contect']) ? json_decode($lp_data['page_contect'],true) : [];
        $textslide = $jsonData['textslide'] ?? [];
        $this->sliding_text = $textslide['sliding_text'] ?? 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text';
        $this->paragraph = $textslide['paragraph'] ?? "< Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. />";
    }

    public function save()
    {
        try {
            //code...
            $this->validate([
                'sliding_text' => 'required|max:255',
                'paragraph' => 'required',
            ]);

            $contentdata['textslide'] = [
                'sliding_text' => $this->sliding_text,
                'paragraph' => $this->paragraph,
            ];

            LandingPagePatch::update($this->lp_data,$contentdata);
            
            $this->successMessage = 'Hero section updated successfully!';
        } catch (\Throwable $th) {
            //throw $th;
            $this->errorMessage = $th->getMessage();
        }
        // Here you can save the data to the database or perform any other action
        // For example, you can dispatch an event or call a service
        session()->flash('message', 'Hero section updated successfully!');
    }

    public function render()
    {
        return view('livewire.silicon-valley.text-slider');
    }
}
