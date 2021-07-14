@extends('layouts.app')

@section('content')

<link href="{{ asset('css/MessagesCreateStyles.css') }}" rel="stylesheet" defer>

<div class="container px-0">

  <h3 class="title p-3">Contact us!</h3>

  <div id="separator" class="row">&nbsp;</div>

  <div class="row justify-content-center py-4">
      <div class="col-md-8">
          <div class="card shadow-lg">
              <div class="card-header">{{ __('Send us an email') }}</div>

              <div class="card-body">
                  <form action="/contact-us/store" enctype="multipart/form-data" method="post">
                      @csrf

                      <div class="form-group row">
                          <label for="first-name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>

                          <div class="col-md-6">
                              <input id="first-name" type="text" class="form-control @error('first-name') is-invalid @enderror"
                              name="first-name" value="{{ old('first-name') }}" required autocomplete="first-name" autofocus>

                              @error('first-name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="last-name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>

                          <div class="col-md-6">
                              <input id="last-name" type="text" class="form-control @error('last-name') is-invalid @enderror"
                              name="last-name" value="{{ old('last-name') }}" required autocomplete="last-name" autofocus>

                              @error('last-name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>

                          <div class="col-md-6">
                              <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror"
                              name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>

                              @error('phone')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>
                                        {{ $message }}
                                      </strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail address') }}</label>

                          <div class="col-md-6">
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row">
                          <label for="message-body" class="col-md-4 col-form-label text-md-right">{{ __('How can we help you?') }}</label>

                          <div class="col-md-6">
                              <input id="message-body" type="text" class="form-control @error('message-body') is-invalid @enderror"
                              name="message-body" value="{{ old('message-body') }}" required autocomplete="message-body" autofocus>

                              @error('message-body')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                          </div>
                      </div>

                      <div class="form-group row mb-0">
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  {{ __('Submit') }}
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div>


</div>
@endsection
