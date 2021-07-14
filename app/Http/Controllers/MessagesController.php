<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use Auth;

class MessagesController extends Controller
{
  // Shows Post creation page.
  // @return view. View that contains a form for User to make a Post.
  public function create()
  {
    return view('messages.create');
  }

  // Stores Post in DB.
  // @return. Redirects to User's Profile.
  public function store()
  {
    // We validate the request and then get the validated data.
    $data = request()->validate([
        'first-name' => 'required',
        'last-name' => 'required',
        'phone' => 'required|digits:10',
        'email'=>'required|email',
        'message-body' => 'required',
    ]);

    // We get the authenticated user, get his posts and use function create to create a post
    $message = Message::create([
        'first_name' => $data['first-name'],
        'last_name' => $data['last-name'],
        'phone' => $data['phone'],
        'email'=> $data['email'],
        'body' => $data['message-body'],
    ]);

    //return view('messages.success',compact('message'));
    return redirect('/contact-us/success')->with('message', $message);
  }

  public function success()
  {
    //aquiioooooooooooooooooooooooooooooooooooooooooooooooooooooooooo
    //dd(session('message'));

    if (is_null(session('message'))) {
      return redirect('/');
    }

    return view('messages.success');
  }
}
