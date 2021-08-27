@extends('layouts.app')

@section('content')

<link href="/css/TestimonialsIndexStyles.css" rel="stylesheet" defer>

<div class="container px-0">

  <h3 class="title p-3">Testimonials</h3>

  <div id="separator" class="row">&nbsp;</div>



  <table class="table shadow-lg rounded">
    <thead>
      <tr>
        <th scope="col">Id</th>
        <th scope="col">Customer's Id</th>
        <th scope="col">Name</th>
        <th scope="col">Body</th>
        <th scope="col">Importance</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Check</th>
      </tr>
    </thead>

    <tbody>


    </tbody>
  </table>

  <div id="page-filler" class="row flex-grow-1">
    <div>&nbsp;</div>
  </div>

</div>
@endsection

@push('head')

<script>

(function($){

$(window).on('load', function() {

  // Adds a class to the compoment
  $(".title").addClass("on");

});

})(jQuery);


</script>

@endpush
