<?php

namespace App\Console\Commands;

use App\Mail\SubscriptionConfirmation;
use http\Env\Request;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use App\Models\User;
use App\Providers\WeatherService;

class SendWeatherForecast extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'email:daily';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Daily weather forecas';

    /**
     * Execute the console command.
     */
    public function handle($location)
    {
        $weatherservice = new WeatherService();
        $weatherforcast = $weatherservice->getWeatherForecast($location);

        $subscribers = User::all('email');

        foreach ($subscribers as  $subscriber){

        Mail::to($subscriber->email)->send(new SubscriptionConfirmation($weatherforcast));
    }


        $this->info('Weather forecast email sent successfully.');


    }
}
