@extends('layouts.app')

@section('content')

<link href="/css/TestimonialsDisplayableStyles.css" rel="stylesheet" defer>

<div class="container px-0">

  <h3 class="title p-3">Testimonials</h3>

  <div id="separator" class="row">&nbsp;</div>

  <?php
    $reverse = false;
  ?>

  @foreach($testimonials as $testimonial)

    <div class="row d-flex font-weight-light testimonial {{ $reverse  ? 'flex-row-reverse' : '' }}">
      <div class="justify-content-center col-3">
        <img src="{{ $testimonial->image }}" class="rounded-circle" alt="" style="width: 90px; height: 90px;">
        <p class="font-weight-bold customer pt-2">{{ $testimonial->customer->fullName() }}</p>
      </div>

      <div class="col-9">
        <p class="text-justify p-2">
          {{ $testimonial->body }}
        </p>
      </div>
    </div>

    <?php
      $reverse = ! $reverse;
    ?>

  @endforeach

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
