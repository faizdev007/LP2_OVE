<?php

namespace App\Livewire\SiliconValley;

use App\Facades\LandingPagePatch;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class DevProfile extends Component
{
    use WithFileUploads;

    public $lp_data,$devProfile = [];
    public $successMessage = '';
    public $errorMessage = '';
    
    public function mount($lp_data)
    {
        $this->lp_data = isset($lp_data) ? $lp_data : [];
        $jsonData = isset($lp_data['page_contect']) ? json_decode($lp_data['page_contect'], true) : [];
        $this->devProfile = $jsonData['devProfile'] ?? [
            [
                'name'=> 'Isabella',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam.',
                'image' => 'assets/siliconvalley/devprofile/devprofile.webp',
                'projects' => [
                    ['image' => 'assets/siliconvalley/devprofile/whatwedid1.webp', 'title' => 'Project Management'],
                    ['image' => 'assets/siliconvalley/devprofile/whatwedid2.webp', 'title' => 'Web Development'],
                    ['image' => 'assets/siliconvalley/devprofile/whatwedid3.webp', 'title' => 'Mobile Apps'],
                    ['image' => 'assets/siliconvalley/devprofile/whatwedid4.webp', 'title' => 'AI Solutions'],
                ]
            ]
        ];
    }

    public function save()
    {
        dd($this);
        try {
            $this->validate([
                'devProfile.name' => 'required|max:255',
                'devProfile.description' => 'required',
                'devProfile.image' => 'nullable|image|max:2048', // Optional image validation
                'devProfile.projects' => 'required|array',
            ]);

            $contentdata = isset($this->lp_data['page_contect']) ? json_decode($this->lp_data['page_contect'], true) : [];
            
            $contentdata['devProfile'] = $this->devProfile;

            // Update the landing page content
            LandingPagePatch::update($this->lp_data, $contentdata);

            $this->successMessage = 'Developer profile updated successfully!';
        } catch (\Throwable $th) {
            $this->errorMessage = $th->getMessage();
        }
    }   

    public function render()
    {
        return view('livewire.silicon-valley.dev-profile');
    }
}
