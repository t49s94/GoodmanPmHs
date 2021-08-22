<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testimonial;

use Illuminate\Support\Facades\Auth;

class TestimonialsController extends Controller
{
  public function __construct()
  {
      $this->beforeFilter('force.ssl');
  }
  
  //----------------------------------------------------------------------------------------------------------------------------
  // Functions

  public function index()
  {
    if(!Auth::check())
      return redirect('/');

    $testimonials = Testimonial::all()->sortByDesc('created_at');
    return view('testimonials.index', compact('testimonials'));
  }

  // Shows Posts page.
  // @return view. View that contains Posts from Users followed by User.
  public function displayableTestimonials()
  {
    $testimonials = Testimonial::all()->sortByDesc('created_at');
    return view('testimonials.displayable', compact('testimonials'));
  }
}
