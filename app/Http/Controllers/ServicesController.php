<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
  //----------------------------------------------------------------------------------------------------------------------------
  // Functions

  // Shows Posts page.
  // @return view. View that contains Posts from Users followed by User.
  public function index()
  {
    return view('services.index');
  }
}
