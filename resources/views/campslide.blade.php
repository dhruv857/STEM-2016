<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Pace University STEM Camp 2016 Pre-Camp HTML Exercise ">
    <meta name="author" content="Dhruvil Gandhi,Virali Jhaveri">
     <script type="text/javascript" src="assets/plugins/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="assets/js/slides.js"></script>
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
       
               -webkit-font-smoothing: antialiased;
    font-weight: 400;
    height: auto !important;
    height: 100%;
    min-height: 100%;
    text-rendering: optimizeLegibility;
    overflow: hidden;

        }
        
        * {
    margin: 0;
    padding: 0;
    outline: none;
    
 /*   -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;*/
}
div.progress{
  width:100%;
  height:12%;
  margin-top: 1%
}

div.content{
  width:70%;
  float:left;

}

div.wrapper {
  
  width: 30%;
  float:left;
}

p {
  font-family: georgia;
  font-size: 1rem;
  line-height: 25px;
  margin: 24px 0;
  text-align: center;
}

nav.vertical {
  border-radius: 4px;
  box-shadow: 0 0 10px rgba(0,0,0,.15);
  overflow: hidden;
  text-align: center;
  height:90%;
  background-color: #ffc61e;
  font-family: 'Montserrat', sans-serif;

}

  nav.vertical > ul {
    list-style-type: none;
  }

    nav.vertical > ul > li {
      display: block;
    }

      nav.vertical > ul > li
      {
         background-color: #ffc61e;
        
        border-bottom: 1px solid rgba(255,255,255,.1);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.1), 0 1px 1px rgba(0,0,0,.1);
        color: rgb(0,0,0);
        display: block;
        font-size: 1.5rem;
        font-weight: 500;
        height: 80px;
        /*letter-spacing: .5rem;*/
        line-height: 80px;
        text-shadow: 0 1px 1px rgba(0,0,0,.1);
        text-transform: uppercase;
        transition: all .1s ease;
      }

      nav.vertical > ul > li > a {
        
        
        border-bottom: 1px solid rgba(255,255,255,.1);
        box-shadow: inset 0 1px 1px rgba(0,0,0,.1), 0 1px 1px rgba(0,0,0,.1);
        color: rgb(0,0,0);
        display: block;
        font-size: 2rem;
        font-weight: 500;
        height: 80px;
        /*letter-spacing: .5rem;*/
        line-height: 80px;
        text-shadow: 0 1px 1px rgba(0,0,0,.1);
        text-transform: uppercase;
        transition: all .1s ease;
      }

        nav.vertical > ul > li:hover,
        nav.vertical > ul > li > a:hover {
                 background-color: #70bf44;

         
         cursor: pointer;
        }

       
          nav.vertical > ul > li > div {
            background-color: rgb(255,255,255);
            max-height: 0;
            overflow: hidden;
            transition: all .5s linear;
          }

            nav.vertical > ul > li > label + input:checked + div {
              max-height: 500px;
            }
 
          nav.vertical > ul > li > div > ul {
            list-style-type: none;
          }

            nav.vertical > ul > li > div > ul > li > a {
             background-color: rgb(255,255,255);
             border-bottom: 1px solid rgba(0,0,0,.05);
             color: #333331;
             display: block;
             font-size: 1.1rem;
             padding: 10px 0;
             text-decoration: none;
             transition: all 0.15s linear;
            }

              nav.vertical > ul > li > div > ul > li:hover > a {
                background-color: lightBlue;
                color: rgb(255,255,255);
                padding: 10px 0 10px 50px;
              }
    </style>
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>


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
                              <li class="nav-item"><a href="/">Home</a></li>
                              
                              <li class="nav-item"><a href="/logout">Logout</a>
                              <li class="nav-item"><a href="#"> <img src="{{ Auth::user()->picture }}" width="30px" height="30px">
</a>
                              </li>
                              

                          </ul><!--//nav-->
                      </div><!--//navabr-collapse-->
                  </nav><!--//main-nav-->
              </div>
          </header><!--//header-->
          
<div class="wrapper" style="margin-top:80px;">
  <nav class="vertical">
    <ul>
      <li id="html1" style="background-color:#70bf44">
        <a onclick="loadslides(0)">HTML DETAILED</a>
      </li>
      <li id="data2">
      <a onclick="loadslides(1)">Data Visulization</a>
      </li>
      <li id="ui3">
        <a onclick="loadslides(2)">UI DESIGN</a>
      </li>
      <li id="js4"><a onclick="loadslides(3)">JAVASCRIPT I</a></li>
      <li id="js5"><a onclick="loadslides(4)">JAVASCRIPT II</a></li>
      <li id="d36"><a onclick="loadslides(5)">INTRO TO D3</a></li>
      <li id="rf7"><a onclick="loadslides(6)">REFERRENCES</a></li>
      
    </ul>
  </nav>
 
</div>
<div class="content" style="margin-top:80px;" id="contentplace">
<iframe id="slidedeck" src="https://docs.google.com/presentation/d/1rwr9ZEwKEFH8_KKKcMpwO4KB__nkKRmhjK0RWxPiqqA/embed?start=false&loop=false&delayms=3000" frameborder="0" style="min-width:90%;height:65%;margin-left:5%;margin-top:3%" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" align="center" margin="0 auto"></iframe>
  <div class="progress" style="background:white;">
  <h5 class="text-center">
  <h5 class="text-center" style="float:left;width:33%"><a id="prevc" class="btn btn-cta-primary" data-count="0">PREV</a></h5>
  <h5 class="text-center" style="float:left;width:33%"><a id="curc" class="btn btn-cta-secondary">1/8</a></h5>
  <h5 class="text-center" style="float:left;width:33%"><a id="nextc" class="btn btn-cta-primary" data-count="1">NEXT</a></h5>
  </h5></div>
</div>
<script type="text/javascript">
function loadslides(deckno){
      var links=['https://docs.google.com/presentation/d/1rwr9ZEwKEFH8_KKKcMpwO4KB__nkKRmhjK0RWxPiqqA/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/17VsliANiNc-twnSNtfuKm2-9KCICBbMbqIyXgNzNVm4/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1EJBRyxLIwd-F3Smc7A1w2Ju2du6gUJpKsCHSeFTydFI/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1IOs3Z8agFK3Q30bQPaxiZV0sOTq6KWrtn7s9tMdpbtE/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1lkGXmy0LU2o9-2IDTvyBjNkt86A2e3m__2v1NS1G9hE/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1hWzw5B2pRju-TBS6l53_xEXFf3kjiFVguW5Mg-qg2aI/embed?start=false&loop=false&delayms=3000','https://docs.google.com/presentation/d/1ZqmU2b5teBt-x8pI2GEXXDrpOSeVTFGPtOSWxZ6DQug/embed?start=false&loop=false&delayms=3000'];
var id=['html1','data2','ui3','js4','js5','d36','rf7'];
 

       $("#prevc").data("count", deckno-1);
        var stringval=(deckno+1)+"/8";
        $("#curc").html(stringval);
        $("#nextc").data("count",deckno+1);
        
      $("#slidedeck").attr('src',links[deckno]);
      
      for(i in id){

        $("#"+id[i]).css({'background-color':'#ffc61e '});
      }
      $("#"+id[deckno]).css({'background-color':'#70bf44 '});
  }</script>
@else
<script type="text/javascript">
    
    window.location.href = "{{URL::to('/')}}";
    </script>
@endif
    <!-- ******FOOTER****** -->
    <footer class="footer" style="position:fixed;bottom:0px;width:100%">
        <div class="container text-center">
            <small class="copyright">Designed with <i class="fa fa-heart"></i> at <a href="http://pace.edu/seidenberg" target="_blank">Seidenberg School of Computer Science and Informartion Systems</a> for STEM Collab.</small>
        </div><!--//container-->
    </footer><!--//footer-->


</body>
</html>