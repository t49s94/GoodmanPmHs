@extends('layouts.app')

@section('content')

<!--
https://bootsnipp.com/snippets/Q6nrr
-->

<link href="/css/ServicesIndexStyles.css" rel="stylesheet" defer>

<div class="container px-0">

  <h3 class="title p-3">Get to know our services!</h3>

  <div id="separator" class="row">&nbsp;</div>

<!-- Large modal -->
<div id="service-images" class="row d-flex justify-content-around">
  <a class="service-thumbnail p-3" href="#headcarouselid" data-slide-to="0">
    <img src="/storage/images/finished-projects/chuck_1.jpg" data-toggle="modal" data-target=".bs-example-modal-lg" alt="First slide">
  </a>
  <a class="service-thumbnail p-3" href="#headcarouselid" data-slide-to="1">
    <img src="/storage/images/finished-projects/chuck_2.jpg" data-toggle="modal" data-target=".bs-example-modal-lg" alt="Second slide">
  </a>
  <a class="service-thumbnail p-3" href="#headcarouselid" data-slide-to="2">
    <img src="/storage/images/finished-projects/chuck_3.jpg" data-toggle="modal" data-target=".bs-example-modal-lg" alt="Third slide">
  </a>
  <a class="service-thumbnail p-3" href="#headcarouselid" data-slide-to="3">
    <img src="/storage/images/finished-projects/chuck_4.jpg" data-toggle="modal" data-target=".bs-example-modal-lg" alt="First slide">
  </a>
  <a class="service-thumbnail p-3" href="#headcarouselid" data-slide-to="4">
    <img src="/storage/images/finished-projects/chuck_5.jpg" data-toggle="modal" data-target=".bs-example-modal-lg" alt="First slide">
  </a>
  <a class="service-thumbnail p-3" href="#headcarouselid" data-slide-to="5">
    <img src="/storage/images/finished-projects/chuck_6.jpg" data-toggle="modal" data-target=".bs-example-modal-lg" alt="First slide">
  </a>
  <a class="service-thumbnail p-3" href="#headcarouselid" data-slide-to="6">
    <img src="/storage/images/finished-projects/chuck_7.jpg" data-toggle="modal" data-target=".bs-example-modal-lg" alt="First slide">
  </a>
  <a class="service-thumbnail p-3" href="#headcarouselid" data-slide-to="7">
    <img id="wawa" src="/storage/images/finished-projects/chuck_8.jpg" data-toggle="modal" data-target=".bs-example-modal-lg" alt="First slide">
  </a>
</div>


<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">

      <!-- Button to close the modal -->
      <div id="close-carousel" class="d-flex justify-content-between">
        <div class="align-self-center pl-3"></div>
        <button id="close-carousel-button" type="button" class="close" data-dismiss="modal">&times;</button>
      </div>


      <!-- data-ride="false" prevents auto slide -->
      <div id="headcarouselid" class="carousel slide" data-ride="false">



  <!-- Wrapper for slides -->
  <div class="carousel-inner">

    <div class="carousel-item active">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_1.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_2.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_3.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_4.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_5.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_6.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_7.jpg">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="/storage/images/finished-projects/chuck_8.jpg">
    </div>
  </div>

  <!-- Left and right controls -->
  <!--
  <a class="carousel-control-prev" href="#headcarouselid" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headcarouselid" role="button" data-slide="next" >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
-->
  </div>

</div>
    </div>

  </div>

  <div id="listServices" class="row d-flex justify-content-around pt-3">
    <div class="font-weight-light align-self-center shadow-lg rounded mb-3 py-4 pr-3">
      <ul>
        <li>Replacement of hvac</li>
        <li>Water heaters</li>
        <li>Appliances </li>
        <li>And service on all of them</li>
        <li>Disposals</li>
        <li>Interior and exterior house painting</li>
        <li>Powerwashing </li>
        <li>Bathroom and kitchen remodeling </li>
        <li>Pool maintenance </li>
        <li>
          <div>Poolcage and lanai  screen repair</div>
          <div>and replacement</div>
        </li>
      </ul>
    </div>

    <div id="offer" class="text-primary font-weight-bold align-self-center shadow-lg rounded mb-3 py-4 px-2">
      <div>We Offer These Property</div>
      <div class="pt-3">Management &</div>
      <div class="pt-3">Handyman Services</div>
      <div class="pt-3">At The Lowest Price!</div>
    </div>

    <div class="font-weight-light align-self-center shadow-lg rounded mb-3 py-4 pr-3">
      <ul>
        <li>Poolcage painting  </li>
        <li>Deck and porch painting</li>
        <li>Full house maintenance </li>
        <li>Monthly and biweekly service </li>
        <li>
          <div>Property management for part</div>
          <div>time Florida residents</div>
        </li>
        <li>
          <div>Electric and plumbing  and  home</div>
          <div>cleaning services as well </div>
        </li>
        <li>
          <div>Pre and Post home inspection</div>
          <div>repair services</div>
        </li>
      </ul>
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

  $(".service-thumbnail img").click( function(){
    var alt = $(this).attr("alt");
    $("#close-carousel div").text(alt);
  });

});

})(jQuery);


/*
  jQuery(document).ready(checkContainer);

function checkContainer () {
//if($('#service-images').is(':visible')){ //if the container is visible on the page

  console.log("miau");
    $(".title").addClass("on");

    $(".service-thumbnail img").click( function(){
      var alt = $(this).attr("alt");
      $("#close-carousel div").text(alt);
    });


} else {
  setTimeout(checkContainer, 50); //wait 50 ms, then try again
}
}
*/


</script>

@endpush
