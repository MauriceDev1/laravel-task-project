<div class="bg-gray-200 py-2 text-gray-600 px-5 rounded-full border border-gray-400 flex gap-3">
    @if($weatherData)
        <h2>Weather for <span class="font-semibold">{{ $weatherData['name'] }}, {{ $weatherData['sys']['country'] }}</span></h2>
        <p>Temperature: <span class="font-semibold">{{ $weatherData['main']['temp'] }}°C</span></p>
        <p>Weather: <span class="font-semibold">{{ $weatherData['weather'][0]['description'] }}</span></p>
    @endif
</div>
