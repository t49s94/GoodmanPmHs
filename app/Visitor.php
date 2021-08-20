<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
  //----------------------------------------------------------------------------------------------------------------------------
  // Attributes

  // $guarded is a built in array of Lavarel that has all the fields that are gonna be in the form. It prevents anyone from passing fields to the form that doesn't exist. Since
  // we validated all the fields previously and also we used request() and not requestAll(), we only get the data from the chosen fields so the user can't create new fields.
  // We turn off the security method "$guarded" by overwritting it setting an empty string
  protected $guarded = [];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id', 'ip', 'country_name', 'country_code', 'region_name', 'region_code', 'city', 'zipcode', 'latitude',
      'longitude',
  ];

  //----------------------------------------------------------------------------------------------------------------------------
  // Functions
}
