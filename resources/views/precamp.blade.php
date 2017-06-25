<!DOCTYPE html>
<!--[if IE 8]> 
<html lang="en" class="ie8">
  <![endif]-->
  <!--[if IE 9]> 
  <html lang="en" class="ie9">
    <![endif]-->
    <!--[if !IE]><!--> 
    <html lang="en">
      <!--<![endif]-->
      <head>
        <title>STEM CAMP Pre-Camp Exercise</title>
        <!-- Meta -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pace University STEM Camp 2017 Pre-Camp HTML Exercise ">
        <meta name="author" content="Dhruvil Gandhi, Virali Jhaveri">
        <link href='https://fonts.googleapis.com/css?family=Lato:300,400,300italic,400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        
        <!-- Global CSS -->
        <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
        <!-- Plugins CSS -->
        <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">
        <link rel="stylesheet" href="assets/plugins/prism/prism.css">
        <!-- Theme CSS -->
        <link id="theme-style" rel="stylesheet" href="assets/css/styles.css">
        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->


        
      </head>
      <body data-spy="scroll">
        
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
                              <li class="nav-item"><a style="color:white !important" class="headnavitem" href="/">Home</a></li>
                              
                              <li class="nav-item"><a style="color:white !important" class="headnavitem" href="/logout">Logout</a>
                              <li class="nav-item"><a style="color:white !important" class="headnavitem" href="#"> <img src="{{ Auth::user()->picture }}" width="30px" height="30px">
</a>
                              </li>
                              

                          </ul><!--//nav-->
                      </div><!--//navabr-collapse-->
                  </nav><!--//main-nav-->
              </div>
          </header><!--//header-->
        <!-- ******PROMO****** -->
        <section id="promo" class="promo section offset-header" style="padding-bottom:40px;">
          <div class="container">
            <img src="left_banner" style="width:72%;float:left" />
            <img src="stemcamp.gif" style="width:28%;float:right" />
          </div>
        </section>
        <!--//promo-->

         <!-- aspect ratio  | padding-bottom value
                  16:9      |       56.25%
                  4:3       |       75%
                  3:2       |       66.66%
                  8:5       |       62.5% -->

        <!-- ******ABOUT****** -->
        <section id="about" class="about section">
          <div class="container">
            <h2 class="title text-center">(1/4) Uses for Python</h2>
            <div class="text-center">
                <h3>To continue learning about Python, please go through the slides below and complete the
                    exercises. There is a feedback form under the slides if you have any questions.</h3>
            </div>
            <div class="video-container text-center"><iframe width="560" height="315" src="https://www.youtube.com/embed/LlGeixbG8rw" frameborder="0" allowfullscreen></iframe></div>
            
          </div>
          <!--//container-->
        </section>
        <!--//about-->

        <div class="container">
            <h2 class="title text-center">(2/4) Learning Python</h2>
            <div class="video-container text-center"><iframe src="https://docs.google.com/presentation/d/1dXBtVBuSKboubV25NGWYW6Z7CMwciK_8pPEL4kK-T4g/embed?start=false&loop=false&delayms=5000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe></div>
            <br>
            <h2 class="title text-center">(3/4) Feedback Form</h2>
            <div class="video-container text-center" style="height: 750px;"><iframe src="https://docs.google.com/forms/d/e/1FAIpQLSeP6YIrZlqfzt8LlZb4ogDGxpzkAhrKP52JA0TVclo8gberig/viewform?embedded=true"
                                                             width="760" height="750" frameborder="0" marginheight="0"
                                                             marginwidth="0">Loading...</iframe></div>
            <br>
        </div>

        <section id="about" class="about section">
            <div class="container">
                <h2 class="title text-center">(4/4) Billion Oyster Project</h2>
                <div class="video-container text-center"><iframe width="854" height="480" src="https://www.youtube.com/embed/eKOBhp29RSI" frameborder="0" allowfullscreen></iframe></div>

            </div>
            <!--//container-->
            <br>
            <div class="title text-center">
                <a href="https://www.billionoysterproject.org/" target="_blank">Billion Oyster Project
                    Website</a>
            </div>
            <br>
        </section>



        <!-- ******CONTACT****** -->
        <section id="contact" class="contact section has-pattern">
        <div class="container">
        <div class="contact-inner">
        <h2 class="title  text-center">Message Incoming</h2>
        <div class="author-message">
        <div class="profile">
        <img class="img-responsive" src="stemcamp.gif" alt="" />
        </div><!--//profile-->
        <div class="speech-bubble">
        <h3 class="sub-title">Welcome STEM Collaboratory Students!</h3>
        <p>It is a pleasure to invite you to Pace University! The program is from July 7th to July 21st,
            Monday-Friday starting promptly at 10AM to approximately 4PM. On some days during the program, we will go on company visits and trips around New York City that will end after 4PM. You will learn how to visualize data using different tools, design user interfaces, working on live projects with other students and have LOTS & LOTS OF FUN!</p>
        <!-- <div class="source">
          <span class="name"><a href="https://twitter.com/3rdwave_themes" target="_blank">Xiaoying Riley</a></span>
          <br />
          <span class="title">UX/UI Designer</span>
          </div> -->
        <!--//source-->
        </div><!--//speech-bubble-->
        </div><!--//author-message-->
        <div class="clearfix"></div>
        <div class="info text-center">
        <h4 class="sub-title">Get Connected</h4>
        <ul class="social-icons list-inline">
        <li><a href="https://twitter.com/pace_seidenberg" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.facebook.com/seidenbergschool" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="http://instagram.com/pace_seidenberg"><i class="fa fa-instagram"></i></a></li>
        <li><a href="https://pace.edu/seidenberg"><i class="fa fa-globe"></i></a></li>
        </ul>
        </div><!--//info-->
        </div><!--//contact-inner-->
        </div><!--//container-->
        </section><!--//contact-->
        @else
        <script type="text/javascript">

          window.location.href = "{{URL::to('/')}}";

        </script>
        @endif
        <!-- ******FOOTER****** -->
        <footer class="footer">
        <div class="container text-center">
        <small class="copyright">Designed with <i class="fa fa-heart"></i> at <a href="http://pace.edu/seidenberg" target="_blank">Seidenberg School of Computer Science and Informartion Systems</a> for STEM Collab.</small>
        </div><!--//container-->
        </footer><!--//footer-->
        <!-- Javascript -->
        <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/plugins/jquery-scrollTo/jquery.scrollTo.min.js"></script>
        <script type="text/javascript" src="assets/plugins/prism/prism.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
      </body>
    </html>