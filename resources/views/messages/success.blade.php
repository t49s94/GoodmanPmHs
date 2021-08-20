@extends('layouts.app')

@section('content')

<link href="/css/MessagesSuccessStyles.css" rel="stylesheet" defer>

<div class="container px-0">

  <div class="d-flex flex-column py-5">
    <div class="d-flex justify-content-center"><h3>We'll contact you pretty soon!</h3></div>
    <div class="d-flex justify-content-center pt-5"><img src='/storage/images/success-message-hunk.jpg' style="max-height: 500px;"></div>
  </div>

  <div class="row d-flex justify-content-center py-4">
    <a href="/">
      <button class="btn btn-primary">
        {{ __('Go back') }}
      </button>
    </a>
  </div>

  <div id="page-filler" class="row flex-grow-1">
    <div>&nbsp;</div>
  </div>

</div>
@endsection
