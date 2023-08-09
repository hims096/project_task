@component('mail::message')
    <h2>Daily Weather Forecast for {{ $weather['name'] }}</h2>

    <ul>
        <li>
            Date: {{ $weather['date'] }}<br>
            Temperature: {{ $weather['main']['temp'] }} °C<br>
            Humidity: {{ $weather['main']['humidity'] }}
            Speed: {{ $weather['wind']['speed'] }}
        </li>
    </ul>
@endcomponent
    