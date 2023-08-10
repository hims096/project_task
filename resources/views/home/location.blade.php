@extends('master')

@section('location')
    {{-- <pre>{{ print_r($weather) }} </pre> --}}

    <div class="container my-4">
        <center>
            <h3>Weather Deatils Of Location</h3>
        </center>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">location </th>
                        <th scope="col"> Time Zone </th>
                        <th scope="col">Country</th>
                        <th scope="col">temperature</th>
                        <th scope="col">humidity</th>
                        <th scope="col">wind</th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr class="">
                        <td scope="row">{{ $weather['name'] }}</td>
                        <td scope="row">{{ $weather['timezone'] }}</td>
                        <td scope="row">{{ $weather['sys']['country'] }}</td>
                        <td>{{ $weather['main']['temp'] }}'C</td>
                        <td>{{ $weather['main']['humidity'] }}</td>
                        <td>{{ $weather['wind']['speed'] }}'km</td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
@endsection
