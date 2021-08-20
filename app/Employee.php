<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
  //----------------------------------------------------------------------------------------------------------------------------
  // Attributes

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'first_name', 'last_name', 'sex', 'dob', 'phone', 'email', 'address', 'image',
      'ssn', 'hiring_date', 'description',
  ];

  //----------------------------------------------------------------------------------------------------------------------------
  // Functions

  public function positions()
  {
      return $this->belongsToMany(Position::class)->orderBy('created_at', 'DESC');
  }

  public function fullName()
  {
    return $this->first_name . " " . $this->last_name;
  }
}
