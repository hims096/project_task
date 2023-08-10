<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;
use App\Providers\WeatherService;

class WeatherController extends Controller
{
    public function index()
    {


        return view('home.home');

    }

    public function adduser(Request $request)
    {


        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'location' => 'required',
        ]);

        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->location = $request['location'];
        //dd($user);
        $user->save();

        Mail::to($request->email)->send(new SubscriptionConfirmation());

        return redirect() > back()->with('success', 'You have successfully subscribed! you will get daily update ');
    }


    public function weather(Request $request)
    {
        $search = $request['search_temp'] ?? "";

        if ($search) {

            $location = $search;
            $apikey = config('services.openweather.key');

            $user = Http::get("https://api.openweathermap.org/data/2.5/weather?q={$location}&units=metric&cnt=7&appid={$apikey}");
//dd($user);

        }
        return view('home.location', ['weather' => $user->json()]);

    }

}
