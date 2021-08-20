<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
  //----------------------------------------------------------------------------------------------------------------------------
  // Attributes

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'id', 'position_name',
  ];

  //----------------------------------------------------------------------------------------------------------------------------
  // Functions

  public function employees()
  {
      return $this->belongsToMany(Employee::class)->orderBy('created_at', 'DESC');
  }
}
