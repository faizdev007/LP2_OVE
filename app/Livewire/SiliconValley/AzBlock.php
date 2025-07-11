<?php

namespace App\Livewire\SiliconValley;

use App\Facades\LandingPagePatch;
use Livewire\Component;

class AzBlock extends Component
{
    public $lp_data,$title;
    public $successMessage = '';
    public $errorMessage = '';

    public function mount($lp_data)
    {
        $this->lp_data = isset($lp_data) ? $lp_data : [];
        $jsonData = isset($lp_data['page_contect']) ? json_decode($lp_data['page_contect'],true) : [];
        $az_block = $jsonData['az_block'] ?? [];
        $this->title = $az_block['title'] ?? 'Whatever You Envision We Have { A To Z } Ready For You';
    }

    public function save()
    {
        // dd($this);
        try {
            //code...
            $this->validate([
                'title' => 'required|max:255',
            ]);

            $contentdata = isset($this->lp_data['page_contect']) ? json_decode($this->lp_data['page_contect'],true) : [];

            $contentdata['az_block'] = [
                'title' => $this->title,
            ];

            LandingPagePatch::update($this->lp_data,$contentdata);
            
            $this->successMessage = 'section updated successfully!';
        } catch (\Throwable $th) {
            //throw $th;
            $this->errorMessage = $th->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.silicon-valley.az-block');
    }
}
