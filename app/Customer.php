<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
  //----------------------------------------------------------------------------------------------------------------------------
  // Attributes

  // $guarded is a built in array of Lavarel that has all the fields that are gonna be in the form. It prevents anyone from passing fields to the form that doesn't exist. Since
  // we validated all the fields previously and also we used request() and not requestAll(), we only get the data from the chosen fields so the user can't create new fields.
  // We turn off the security method "$guarded" by overwritting it setting an empty string
  protected $guarded = [];

  //----------------------------------------------------------------------------------------------------------------------------
  // Functions
  public function testimonial()
  {
    return $this->hasOne("App\Testimonial");
  }

  public function fullName()
  {
    return $this->first_name . " " . $this->last_name;
  }
}
