<?php

namespace App\Http\Controllers;

use App\Team;
use App\User;
use Illuminate\Http\Request;
use Mail;


class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::orderBy('id', 'desc')->get();
        return view('home.index', ['teams' => $teams]);


    }

    public function getContact()
    {

        return view('home.index');
    }

    public function postContact(Request $request)
    {

        $this->validate($request,
            [
                'name' => 'required',
                'email' => 'required|email',
                'subject' => 'min:3',
                'message' => 'min:5',
            ]);

        $data = array(

            'name'=> $request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'bodyMessage'=>$request->message

        );

        Mail::send('contact.email',$data, function($message) use ($data){


            $message->from($data['email']);
            $message->to('udrugaswitch-1eadae@inbox.mailtrap.io');
            $message->subject($data['subject']);
        });


    }


}
