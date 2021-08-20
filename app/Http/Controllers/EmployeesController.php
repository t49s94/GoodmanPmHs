<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use App\Employee;

class EmployeesController extends Controller
{
  //----------------------------------------------------------------------------------------------------------------------------
  // Functions

  // Creates the view that displays the comments.
  public function team()
  {
    /*
    $employees = DB::table('employee_position')
            ->join('employees', 'employee_position.employee_id', '=', 'employees.id')
            ->join('positions', 'employee_position.position_id', '=', 'positions.id')
            ->select('employees.*', 'positions.position_name')
            ->get();
    */

    $employees = Employee::all();



    return view('employees.team', compact('employees'));

  }

  /*return view('employees.team');*/
}
