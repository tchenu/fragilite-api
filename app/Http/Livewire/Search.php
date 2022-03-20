<?php

namespace App\Http\Livewire;

use App\Models\City;
use App\Models\Iris;
use Livewire\Component;
use Illuminate\Support\Collection;

class Search extends Component
{
    public string $search = "";
    public Collection $result;
    public Collection $city;
    public string $cityName;
    public $scoreGlobal;
    public $informationAccessScore;
    public $accessToDigitalInterfacesScore;
    public $administrativeSkillsScore;
    public $digitalAcademicSkillsScore;
    public bool $visibility = false;

    public function __construct()
    {
        $this->result = new Collection();
    }

    public function searchable()
    {
        $this->visibility = true;
        $this->result = City::search($this->search)->get();
    }

    public function chooseCity($city)
    {
        $this->visibility = false;
        $this->cityName = $city;
        $this->city = Iris::where('city', $city)->get();

        $this->scoreGlobal = $this->city->avg('score_global');
        $this->informationAccessScore = $this->city->avg('information_access_score');
        $this->accessToDigitalInterfacesScore = $this->city->avg('access_to_digital_interfaces_score');
        $this->administrativeSkillsScore = $this->city->avg('administrative_skills_score');
        $this->digitalAcademicSkillsScore = $this->city->avg('digital_academic_skills_score');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
