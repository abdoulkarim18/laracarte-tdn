<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use\App\Models\Message;

class PagesController extends Controller
{
    public function home(){

        return view('pages.home');
    }

    public function about(){

        return view('pages.about');
    }

    public function create(){

        return view('contacts.create');
    }

    public function store(ContactRequest $request){
        
      $message = Message::create($request->only('name', 'email', 'message'));
      $message->name = $request->name;
      $message->email = $request->email;
      $message->message = $request->message;
      $message->save();
      
      $mailable = new ContactMessageCreated($message);
      Mail::to(config('laracarte.admin_support_email'))->send($mailable);

      return redirect('contact')->with('message', 'Votre messsage a bien été envoyé.');

      return 'Done!';
    }

}
