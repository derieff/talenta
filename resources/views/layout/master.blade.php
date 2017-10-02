<!DOCTYPE HTML>
<html>
  <head>
    <title>@yield('title') Talenta</title>
		<meta charset="utf-8">
		<meta name="author" content="Arief Fahrizon">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel='stylesheet' href="{{ url('public/bootstrap-3/css/bootstrap.css') }}" />
    <link rel='stylesheet' href="{{ url('public/bootstrap-3/css/bootstrap.min.css') }}" />
    <link rel='stylesheet' href="{{ url('public/font-awesome-4/css/font-awesome.css') }}" />
    <link rel='stylesheet' href="{{ url('public/font-awesome-4/css/font-awesome.min.css') }}" />
    <script src="{{ url('public/bootstrap-3/js/bootstrap.js') }}"></script>
    <script src="{{ url('public/bootstrap-3/js/bootstrap.min.js') }}"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <style>
      body{
        font-family: 'Lato', sans-serif;
      }
      nav .navbar-brand{
        margin-top:-7.5px;
      }
      .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover, .navbar-default .navbar-nav li a:hover{
        background:#990101 !important;
      }
      nav a{
        color:#fff !important;
      }
      .nav1{
        background:#55000a;
      }
      .nav2, .dropdown-menu li{
        background:#75000d;
      }

      .notification i{
        font-size:18px;
      }
      .notification i sup{
        background:#990101;
        padding:3px;
        font-size:10px;
        border-radius:50%;
        left:-3px;
        font-family: 'Lato', sans-serif;
        top:-10px;
      }

      /* desktop */
      @media only screen and (min-width: 768px) {
        .notification-mobile{
          display:none
        }
      }
      /* mobile */
      @media only screen and (max-width: 768px) {
        .notification-mobile{
          display:block;
          float:right;
          margin-top:10px;
          margin-right:10px;
        }
        .notification-mobile .notification{
          float:left;
          padding:5px;
        }
        .notification i{
          font-size:23px;
        }
        .notification-mobile .notification li.dropdown{
          text-decoration: none !important;
        }
        .notification-mobile .notification:hover{
          background:#990101 !important;
        }
      }

      .navbar-header button i{
        font-size:17px;
        color:#fff;
      }

      @yield('cssonpage')
    </style>
  </head>
  <body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <section class="nav1">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-bottom" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#">
              <img src="{{ url('public/image/talenta-logo.png') }}" />
            </a>
            <!-- Start of Only mobile view -->
            <div class="notification-mobile">
              <div class="notification">
                <a href="#">
                  <i class="fa fa-shopping-cart"><sup>2</sup></i>
                </a>
              </div>
              <div class="notification">
                <a href="#">
                  <i class="fa fa-bell-o"></i>
                </a>
              </div>
              <div class="notification">
                <div class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user"></i>
                    <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-right">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- End of Only mobile view -->
          </div>
          <div id="navbar-top" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li class="notification">
                <a href="#">
                  <i class="fa fa-shopping-cart"><sup>2</sup></i>
                </a>
              </li>
              <li class="notification">
                <a href="#">
                  <i class="fa fa-bell-o"></i>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  Joshua Kevin
                  <span class="caret"></span>
                </a>
                <ul class="dropdown-menu">
                  <li><a href="#">Action</a></li>
                  <li><a href="#">Another action</a></li>
                  <li><a href="#">Something else here</a></li>
                </ul>
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </section>
      <section class="nav2">
        <div class="container">
          <div id="navbar-bottom" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li>
                <a href="#">
                  <i class="fa fa-shopping-cart"></i>&nbsp;&nbsp;COURSE MARKETPLACE
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-shopping-bag"></i>&nbsp;&nbsp;PURCHASED COURSE
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-desktop"></i>&nbsp;&nbsp;MY COURSE
                </a>
              </li>
              <li class="active">
                <a href="#">
                  <i class="fa fa-user"></i>&nbsp;&nbsp;USERS
                </a>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-copy"></i>&nbsp;&nbsp;UPLOAD COURSE
                </a>
              </li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </section>
    </nav>

    @yield('content')

  </body>
  @yield('jsonpage')
</html>
