<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Weather extends Component
{
    public $city = "Cape Town";
    public $weatherData;

    public function mount()
    {
        $this->getWeather();
    }

    public function getWeather()
    {
        $response = Http::get("https://api.openweathermap.org/data/2.5/weather", [
            'q' => $this->city,
            'appid' => '30489a925988dc5dc18fc62674264aae',
        ]);

        $this->weatherData = $response->json();
    }

    public function render()
    {
        return view('livewire.weather', [
            'weater' => $this->weatherData
        ]);
    }
}
