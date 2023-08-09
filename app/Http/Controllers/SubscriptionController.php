<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SubscriptionConfirmation;

class SubscriptionController extends Controller
{
//    public function subscribe(Request $request)
//    {
//        $request->validate([
//            'email' => 'required|email|unique:subscriptions',
//        ]);
//
//        $subscribe =new Subscription();
//        $subscribe->email=$request['email'];
//        //dd($subscribe);
//        $subscribe->save();
//
//        Mail::to($request->email)->send(new SubscriptionConfirmation());
//
//        return redirect()->back()->with('success', 'You have successfully subscribed!');
//    }
}
