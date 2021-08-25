@extends('layouts.app')

@section('content')

<link href="/css/TestimonialsIndexStyles.css" rel="stylesheet" defer>

<div class="container px-0">

  <h3 class="title p-3">Testimonials</h3>

  <div id="separator" class="row">&nbsp;</div>

  <div class="d-flex justify-content-around">
    <div>
      <label class="col-form-label">Id</label>
      <input id="testimonial_id" type="text" class="form-control" name="testimonial_id" value="" placeholder="Example: 1234">
    </div>

    <div>
      <label class="col-form-label">Customer's Id</label>
      <input id="customer_id" type="text" class="form-control" name="customer_id" value="" placeholder="Example: 1234">
    </div>

    <div>
      <label class="col-form-label">Name</label>
      <input id="customer_name" type="text" class="form-control" name="customer_name" value="" placeholder="Example: Jon Goodman">
    </div>

    <div>
      <label class="col-form-label">Body</label>
      <input id="testimonial_body" type="text" class="form-control" name="testimonial_body" value="" placeholder="Example: abcd">
    </div>

    <div>
      <label class="col-form-label">Importance</label>
      <input id="testimonial_importance" type="text" class="form-control" name="testimonial_importance" value="" placeholder="Example: 1234">
    </div>

  </div>

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

      <?php
        $odd = true;
      ?>

      @foreach($testimonials as $testimonial)

      <tr class="{{ $odd ? 'odd' : '' }}">
        <th scope="row">{{ $testimonial->id }}</th>
        <td>{{ $testimonial->customer->id }}</td>
        <td>{{ $testimonial->customer->fullName() }}</td>
        <td>{{ $testimonial->body }}</td>
        <td>{{ $testimonial->importance }}</td>
        <td>{{ $testimonial->created_at }}</td>
        <td>{{ $testimonial->updated_at }}</td>
        <td>
          <input type="checkbox" id="testimonial_{{ $testimonial->id }}"
          name="testimonial_{{ $testimonial->id }}" value="{{ $testimonial->id }}">
        </td>
      </tr>

      <?php
        $odd = !$odd;
      ?>

      @endforeach
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
