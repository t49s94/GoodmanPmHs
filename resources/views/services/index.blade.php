@extends('layouts.app')

@section('content')

<!--
https://bootsnipp.com/snippets/Q6nrr
-->

<link href="/css/ServicesIndexStyles.css" rel="stylesheet" defer>

<div class="container px-0">

  <h3 class="title p-3">Get to know our services!</h3>

  <div id="separator" class="row">&nbsp;</div>

  <h1> Click Me </h1>
<!-- Large modal -->
<button class="btn btn-default" data-toggle="modal" data-target=".bs-example-modal-lg">Large modal</button>

<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Button to close the modal -->
      <div id="close-carousel">
        <button id="close-carousel-button" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div id="headcarouselid" class="carousel slide" data-ride="carousel">



  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_3.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_4.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_5.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_6.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_7.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_8.jpg" alt="Third slide">
    </div>
  </div>


</div>
    </div>

  </div>
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#headcarouselid" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headcarouselid" role="button" data-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


</div>
@endsection
