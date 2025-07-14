<?php

namespace App\Livewire\SiliconValley;

use App\Facades\HelperFacade;
use App\Facades\LandingPagePatch;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

use function PHPUnit\Framework\isObject;

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
                'starts'=> 4.5,
                'techStack'=> 'PHP, Laravel, Vue.js',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam.',
                'image' => 'assets/siliconvalley/devprofile/devprofile.webp',
                'projects' => [null,null,null,null]
            ],
            [
                'name'=> 'Ethan',
                'starts'=> 5,
                'techStack'=> 'PHP, Laravel, Vue.js',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam.',
                'image' => 'assets/siliconvalley/devprofile/Ethan.webp',
                'projects' => [null,null,null,null]
            ],
            [
                'name'=> 'Isla',
                'starts'=> 4,
                'techStack'=> 'Django, React, AWS',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam.',
                'image' => 'assets/siliconvalley/devprofile/Isla.webp',
                'projects' => [null,null,null,null]
            ],
            [
                'name'=> 'Alexander',
                'starts'=> 4.3,
                'techStack'=> 'Go, Kubernetes, PostgreSQL',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit sed do eiusmod tempor incididunt ut labore dolore magna aliqua. Ut enim ad minim veniam.',
                'image' => 'assets/siliconvalley/devprofile/Alexander.webp',
                'projects' => [null,null,null,null]
            ]
        ];
    }

    public function defaultProfile()
    {
        return [
            'name' => '',
            'starts'=> 4.5,
            'techStack' => '',
            'description' => '',
            'image' => null,
            'projects' => [null,null,null,null]
        ];
    }

    public function addProfile()
    {
        $this->devProfile[] = $this->defaultProfile();
    }

    public function removeProfile($index)
    {
        unset($this->devProfile[$index]);
        $this->devProfile = array_values($this->devProfile); // Reindex
    }

    public function save()
    {
        try {
            foreach ($this->devProfile as $key => $value) {
                $this->validate([
                    "devProfile.$key.name" => 'required|max:255',
                    "devProfile.$key.description" => 'required',
                    "devProfile.$key.image" => 'nullable|max:200', // Optional image validation
                    "devProfile.$key.projects" => 'required|array',
                ]);



                if(isObject($value['image'])){
                    $this->devProfile[$key]['image'] = HelperFacade::uploadFile($value['image'], 'siliconvalley/devprofile/photo');
                }
                
                foreach($value['projects'] as $projectKey => $projectImage) {
                    if (isObject($projectImage)) {
                        $this->devProfile[$key]['projects'][$projectKey] = HelperFacade::uploadFile($projectImage, 'siliconvalley/devprofile/projects');
                    }
                }
            }

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
