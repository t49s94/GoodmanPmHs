<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Testimonial;

class TestimonialsController extends Controller
{
  //----------------------------------------------------------------------------------------------------------------------------
  // Functions

  public function index()
  {
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
