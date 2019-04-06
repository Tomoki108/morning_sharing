<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Mail;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */

    public function index()
    {

        $cnt = User::Where('shared', 0)->count();
        if($cnt == 1){
            
            $lastUser = User::Where('shared',0);

            $lastUser->update([
                'volunteer' => 1,
            ]);

            User::where('shared', 1)->update(['shared' => 0]);
        }



        $users = User::Where('shared', 0)->orderByDesc('volunteer')->orderByDesc('shared')->orderBy('id')->get();

        $firstUser = $users->first();

        return view('welcome')->withUsers($users)->withFirstUser($firstUser);

    }

    public function finished(Request $request, $id)
    {
        $user = User::where('id', $id);

        $user->update([
            'shared' => 1,
            'volunteer' => 0,
        ]);

        $notifyNext = User::Where('shared', 0)->orderByDesc('shared')->orderBy('id')->first();

        Mail::raw("You're the Sun Bear for the next morning sharing, please prepare for your presentation:)", function($message) use ($notifyNext)
        {
            $message->from('shinonome81@gmail.com');
            $message->to($notifyNext->email)->subject('Morning Sharing Notification');
        });

        $checkIfReset = User::where('shared', 0)->count();


        if($checkIfReset == 0){
        User::where('shared', 1)->update(['shared' => 0]);

        }

        return redirect('/');
    }

    public function volunteered(Request $request, $id)
    {
        $user = User::where('id', $id);

        $user->update([
            'volunteer' => 1,
        ]);

        return redirect('/');
    }

    public function cancel(Request $request, $id)
    {
        $user = User::where('id', $id);

        $user->update([
            'volunteer' => 0,
        ]);

        return redirect('/');
    }
}



