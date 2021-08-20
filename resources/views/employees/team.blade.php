@extends('layouts.app')

@section('content')

<link href="/css/EmployeesTeamStyles.css" rel="stylesheet" defer>

<div class="container px-0">

  <h3 class="title p-3">Our expert team</h3>

  <div id="separator" class="row">&nbsp;</div>

  <div class="row d-flex justify-content-around">
    @foreach($employees as $employee)

      <div class="p-3 mb-5 shadow-lg rounded team-member">
        <div class="d-flex justify-content-center pb-2"><img src='{{ $employee->image }}' class="rounded"></div>
        <div class="font-weight-bold">{{ $employee->fullName() }}</div>
        <div class="font-weight-light pb-4 employee-position">
          @foreach($employee->positions as $position)
            <span>{{ $position->position_name }},</span>
          @endforeach
        </div>
        <div class="text-justify">{{ $employee->description }}</div>

      </div>

    @endforeach
  </div>


  </div>


</div>
@endsection

@push('head')

<script>

(function($){

$(window).on('load', function() {

  // Adds a class to the compoment
  $(".title").addClass("on");

  // Deletes the last ',' 
  $('.employee-position').each(function(){
    var text = $(this).children().last().text();
    text = text.substring(0, text.length-1);
    $(this).children().last().text(text);
  });

});

})(jQuery);


</script>

@endpush
