<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pace University STEM Camp 2016 Pre-Camp HTML Exercise ">
    <meta name="author" content="Dhruvil Gandhi,Virali Jhaveri">

    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="assets/plugins/prism/prism.css">
    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
    <style>
        body{
            background-image: url('homebackground.jpg'); 
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
        }
        button.a0-primary{
            background-color:#3e6ab3 !important;
        }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<h1></h1>

<!-- @yield('content') -->

@if (Auth::check())
    <!-- ******HEADER****** -->
          <header id="header" class="header" style="position:fixed !important;top:0px;">
              <div class="container">
                  <h1 class="logo pull-left">
                      <a class="scrollto" href="#promo">
                          <span class="logo-title">STEM Collaboratory 2017</span>
                      </a>
                  </h1><!--//logo-->
                  <nav id="main-nav" class="main-nav navbar-right" role="navigation">
                      <div class="navbar-header">
                          <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                          </button><!--//nav-toggle-->
                      </div><!--//navbar-header-->
                      <div class="navbar-collapse collapse" id="navbar-collapse">
                          <ul class="nav navbar-nav">
                              <li class="nav-item"><a href="/precamp">PreCamp Lessons</a></li>
                              <!-- <li class="nav-item"><a href="/">Camp Slides</a></li> -->
                              
                              <li class="nav-item"><a href="/logout">Logout</a><li class="nav-item"><a href="#"> <img src="{{ Auth::user()->picture }}" width="30px" height="30px">
</a>
                              </li>
                              </li>

                          </ul><!--//nav-->
                      </div><!--//navabr-collapse-->
                  </nav><!--//main-nav-->
              </div>
          </header><!--//header-->

<br>
<br>
<br>
<br>
<br>
<br>


<!-- Welcome  {{ Auth::user()->nickname }}   
 -->
<div class="row">
    <div class="col-md-4 col-md-offset-4 text-center" style="line-height:100px;font-size:2em;letter-spacing:.2em;background:#70bf44;"><a style="color:white !important;" href="/precamp">Pre-Camp Lessons</a>
    </div>
</div>
<br>
<br>

<!-- <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center" style="line-height:100px;font-size:2em;letter-spacing:.2em;background:#70bf44;"><a style="color:white !important;" href="/campslide" >Camp Slides</a>
    </div>
</div> --!>
<br>
<br>

<!-- <div class="row">
    <div class="col-md-4 col-md-offset-4 text-center" style="line-height:100px;font-size:2em;letter-spacing:.2em;background:red;"><i class="fa fa-lock"></i><a style="color:white !important;" href="/">Location</a>
    </div>
</div> -->
<br>


    
@else
    
    <h1 class="text-center" style="color:#3e6ab3 !important;font-size:2em;">STEM COLLABORATORY NYC<h1><br>
    <div id="hiw-login-container"></div>
    <script src="https://cdn.auth0.com/js/lock-9.2.min.js"></script>
    <script type="text/javascript">
        var margintobe = (window.innerWidth - 300)/2;
        document.getElementById("hiw-login-container").style.marginLeft= margintobe;
        var lock = new Auth0Lock('{{ env("AUTH0_CLIENT_ID") }}', '{{ env("AUTH0_DOMAIN") }}');

        
        lock.show({
            icon: 'logo.png',
            callbackURL: '{{ env ("AUTH0_CALLBACK_URL" )}}',
                response_type: 'code',
    container: 'hiw-login-container'
  });
    </script>
@endif

</body>
</html>

