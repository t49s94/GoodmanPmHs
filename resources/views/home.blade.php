@extends('layouts.app')

@section('content')
<link href="/css/HomeStyles.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.css" rel="stylesheet">

<div class="container px-0">


  <div class="input-group date" data-provide="datepicker">
    <input type="text" class="form-control">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>


    <div  class="container-fluid" id="headcarousel_container" style="padding: 0;">
      <div id="headcarouselid" class="carousel slide" data-ride="carousel">

        <!-- indicators -->
        <ol class="carousel-indicators pb-5">
          <li data-target="#headcarouselid" data-slide-to="0" class="active"></li>
          <li data-target="#headcarouselid" data-slide-to="1" class=""></li>
          <li data-target="#headcarouselid" data-slide-to="2"></li>
          <li data-target="#headcarouselid" data-slide-to="3"></li>
          <li data-target="#headcarouselid" data-slide-to="4"></li>
          <li data-target="#headcarouselid" data-slide-to="5"></li>
          <li data-target="#headcarouselid" data-slide-to="6"></li>
          <li data-target="#headcarouselid" data-slide-to="7"></li>
        </ol>

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

    <div id="intro" class="row d-flex justify-content-around shadow-lg rounded m-2">
      <div class="p-3 mb-3">
        <div class="text-center">
          <strong>WELCOME TO FLORIDA WEST COAST PROPERTY MANAGEMENT</strong>
        </div>
        <div class="text-justify py-3">
          We offer owners and investors a full service Property Management company that serves Southwest Florida. We offer over 33 years of
          Property Management experience with a concentration in single family homes and condominiums, and townhomes. We believe
          communication is a key ingredient when watching over your most precious asset. We will streamline all maintenance items, decrease
           vacancy, and maximize your rent potential with ease.
        </div>
        <div class="text-justify">
          Our professional Property Managers are highly trained, licensed and insured individuals. The Florida West Coast Property
          Management team strives for Trust, Confidence, and Value for both owners, investors and tenants alike. Florida West Coast
          Property Management understands how valuable your rental home truly is. As an owner you will have the confidence from the
          beginning that the professionals are managing your home with a full spectrum of cutting edge technology and Property Management
          Services. We operate our business in aspects based on the Platinum Rule: “Treat others the way they want to be treated.”
        </div>
      </div>

      <div class="p-3">
        <div class="text-center pb-3">
          <strong>AREAS WE SERVICE</strong>
        </div>
        <div class="text-justify">
          We offer Property Management Services in the following areas: Manatee County and Sarasota County. This includes • Bradenton,
          FL • Lakewood Ranch, FL • Palmetto, FL • Ellenton, FL • Parrish, FL • Sarasota, FL • North Port, FL • Nokomis, FL • Venice,
          FL.
        </div>
      </div>

      <div class="p-3">
        <div class="text-center pb-3">
          <strong>CLIENT TESTIMONIALS</strong>
        </div>
        <div class="text-justify">
          OUR MISSION IS SIMPLE. We help our clients reach their goals with their investment properties while delivering exceptional
          service to our tenants. Visit our <a href="{{ url('/testimonials') }}">testimonials</a> page to see what others have to say about Florida West Coast Property
          Management.
        </div>
      </div>
    </div>


    <div id="contactUs" class="row d-flex justify-content-center pt-3">

      <div id="phone" class="shadow-lg border rounded-circle mr-4 p-2">
        <img src="/storage/images/Phone.png" alt="" style="width: 40px;">
      </div>

      <div class="font-weight-light align-self-center shadow-lg rounded mb-3 py-5 px-3">
        <div class="text-center font-weight-bold py-3">
          CONTACT US
        </div>
        <div class="text-center">5030 Central Sarasota Parkway Unit 208</div>
        <div class="text-center">Sarasota, FL 34238</div>
        <div class="text-center">Phone: (941) 549-7420</div>
        <div class="text-center">E-mail: jongoodman1968@gmail.com</div>
      </div>
    </div>

</div>
@endsection

@push('head')

<script src="{{asset('moment.js')}}" type="text/javascript" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>

<script>

(function($){


  $( window ).on('load', function( event ) {

    $.fn.datepicker.defaults.format = "mm/dd/yyyy";
    $('.datepicker').datepicker({
        startDate: '-3d'
    });

    console.log("entro");


});

})(jQuery);


</script>

@endpush
