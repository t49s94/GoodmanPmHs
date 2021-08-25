<!doctype html>

<!--

To make page-filler fill the window:
https://stackoverflow.com/questions/50262517/bootstrap-4-row-fill-remaining-height
-->

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>



    <!-- Scripts -->
    <script src="/js/app.js" defer></script>

<!--
    <script src="/jquery-3.5.1.min.js" type="text/javascript" ></script>
    <script src="/jquery-ui.min.js" type="text/javascript" ></script>
-->
    <script src="{{asset('jquery-3.5.1.min.js')}}" type="text/javascript" ></script>
    <script src="{{asset('jquery-ui.min.js')}}" type="text/javascript" ></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

    <link href="/css/AppStyles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

</head>

@stack('head')

<body>
    <div id="app" class="h-100">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
              <a id="logo" class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
                  <div><img src="/storage/images/Goodman-logo.png" alt="" style="width: 80px;"></div>
                  <div class="pl-3">
                    <div>Goodman Property management</div>
                    <div>& Handyman services</div>
                  </div>
              </a>


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown pr-3">
                          <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              <strong>About us</strong> <span class="caret"></span>
                          </a>

                          <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdown" style="">

                              <a class="dropdown-item text-primary" href="{{ url('/contact-us/create/') }}">
                                  {{ __('Contact us') }}
                              </a>

                              <a class="dropdown-item text-primary" href="{{ url('/services/index/') }}">
                                  {{ __('Services') }}
                              </a>

                              <a class="dropdown-item text-primary" href="{{ url('/employees/team/') }}">
                                  {{ __('Meet the team!') }}
                              </a>

                          </div>
                      </li>

                      <li class="nav-item pr-3">
                          <a class="nav-link text-primary" href="{{ url('/testimonials') }}">
                            <strong>{{ __('Testimonials') }}</strong>
                          </a>
                      </li>
                        <!-- Authentication Links -->
                        @guest

                        <li class="nav-item">
                            <a class="nav-link text-primary" href="{{ route('login') }}">
                              <strong>{{ __('Personnel') }}</strong>
                            </a>
                        </li>

                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-primary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <strong>{{ Auth::user()->name }}</strong><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right py-0" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item text-primary" href="{{ url('/contact-us/index') }}">
                                      {{ __('Mailbox') }}
                                  </a>

                                  <a class="dropdown-item text-primary" href="{{ url('/employees/index') }}">
                                      {{ __('Employees') }}
                                  </a>

                                  <a class="dropdown-item text-primary" href="{{ url('/customers/index') }}">
                                      {{ __('Customers') }}
                                  </a>

                                  <a class="dropdown-item text-primary" href="{{ url('/positions/index') }}">
                                      {{ __('Positions') }}
                                  </a>

                                  <a class="dropdown-item text-primary" href="{{ url('/testimonials/index') }}">
                                      {{ __('Testimonials') }}
                                  </a>

                                  <a class="dropdown-item text-primary"  href="{{ url('/visitors/index') }}">
                                      {{ __('Visitors') }}
                                  </a>

                                    <a class="dropdown-item text-primary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>

    <div id="footer" class="text-white bg-dark p-3">
      Copyright © 2021 Goodman Property Management and Handyman Services. All rights reserved.
    </div>




<!--
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
-->
<!--
    <script src="https://npmcdn.com/tether@1.2.4/dist/js/tether.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
  -->

<!--
<script defer>
(function($){
  $("#subNavbarDropdown").on({
    mouseenter: function () {
        //stuff to do on mouse enter
        alert("miau");
        $("#subNavbarDropdown").append("<span class='subSubmenu'>Add</span>");
    },
    mouseleave: function () {
        //stuff to do on mouse leave
        $(".subSubmenu").remove();
    }
});
})(jQuery);
</script>
-->




</body>
</html>
