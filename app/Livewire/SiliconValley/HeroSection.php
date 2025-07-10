<?php

namespace App\Livewire\SiliconValley;

use App\Facades\LandingPagePatch;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

use function PHPUnit\Framework\isObject;
use function PHPUnit\Framework\isString;

class HeroSection extends Component
{
    use WithFileUploads;

    public $lp_data,$hero_subtitle,$hero_shorttext,$hero_title,$buttonText,$heroPortfolio=[],$floatingIcons = [],$removeImg = [];
    public $successMessage = '';
    public $errorMessage = '';

    public function mount($lp_data)
    {
        $this->lp_data = isset($lp_data) ? $lp_data : [];
        $jsonData = isset($lp_data['page_contect']) ? json_decode($lp_data['page_contect'],true) : [];
        $hero = $jsonData['hero'] ?? [];
        $this->hero_subtitle = $hero['hero_subtitle'] ?? 'Harness the power of cutting-edge technologies with';
        $this->hero_title = $hero['hero_title'] ?? 'Silicon Valley';
        $this->hero_shorttext = $hero['hero_shorttext'] ?? '< Converted Developers />';
        $this->buttonText = $hero['buttonText'] ?? 'Hire a Developer';
        $this->heroPortfolio =$hero['heroPortfolio'] ?? ['image' => 'assets/siliconvalley/herosection/heroimage.webp', 'name'=>'JennyDoe', 'title' => 'Sr. AI Engineer'];
        $this->floatingIcons = $hero['floatingIcons'] ?? ['assets/siliconvalley/herosection/nodejs.webp','assets/siliconvalley/herosection/python.webp','assets/siliconvalley/herosection/firebase.webp','assets/siliconvalley/herosection/react.webp'];
    }

    public function chnageportfolio()
    {
        if(isString($this->heroPortfolio['image'])){
            $this->removeImg[] = $this->heroPortfolio['image'];
        }
    }

    public function changefloatingIcon($key)
    {
        if(isString($this->flotifloatingIconsngIcons[$key])){
            $this->removeImg[] = $this->floatingIcons[$key];
        }
    }

    public function save()
    {
        // dd($this);
        try {
            //code...
            $this->validate([
                'hero_shorttext' => 'required|max:255',
                'hero_title' => 'required',
                'hero_subtitle' => 'nullable|max:255',
                'buttonText' => 'nullable|max:50',
            ]);

            $contentdata['hero'] = [
                'hero_shorttext' => $this->hero_shorttext,
                'hero_title' => $this->hero_title,
                'hero_subtitle' => $this->hero_subtitle,
                'buttonText' => $this->buttonText,
                'heroPortfolio' => $this->heroPortfolio,
                'floatingIcons' => $this->floatingIcons,
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
        return view('livewire.silicon-valley.hero-section');
    }
}
