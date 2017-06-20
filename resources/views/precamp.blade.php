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
        <meta name="description" content="Pace University STEM Camp 2016 Pre-Camp HTML Exercise ">
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
                          <span class="logo-title">STEM Collaboratory 2016</span>
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
            <h2 class="title text-center">What is HTML?</h2>
            <div class="video-container text-center"><iframe width="560" height="315" src="https://www.youtube.com/embed/wL2ZY3BWEa0?rel=0" frameborder="0" allowfullscreen></iframe></div>
            
          </div>
          <!--//container-->
        </section>
        <!--//about-->
        <!-- ******FEATURES****** -->
        <section id="features" class="features section">
          <div class="container text-left">
            <h2 class="title text-center">Overview Of Lessons</h2>
            <br />
            <ul class="feature-list list-unstyled text-center">
              <div class="row">
                <div class="item col-md-3">
                  <li ><a class="scrollto btn btn-cta-secondary" style="background-color:#00337f !important;width:100%;color: white !important" href="#taae">Tags, Attributes & Elements</a></li>
                </div>
                <div class="item col-md-3">
                  <li> <a class="scrollto btn btn-cta-secondary" style="background-color:#00337f !important;width:100%;color: white !important" href="#commontags">Common Tags</a></li>
                </div>
                <div class="item col-md-3">
                  <li> <a class="scrollto btn btn-cta-secondary" style="background-color:#00337f !important;width:100%;color: white !important" href="#pagestruct">HTML Page Sturcture</a></li>
                </div>
                <div class="item col-md-3">
                  <li> <a class="scrollto btn btn-cta-secondary" style="background-color:#00337f !important;width:100%;color: white !important" href="#hip">HTML In Practice</a></li>
                </div>
                <div class="item col-md-3">
                  <li><a class="scrollto btn btn-cta-secondary" style="background-color:#00337f !important;width:100%;color: white !important" href="cssi">CSS Intro</a></li>
                </div>
                <div class="item col-md-3">
                  <li> <a class="scrollto btn btn-cta-secondary" style="background-color:#00337f !important;width:100%;color: white !important" href="cip">CSS In Practice</a></li>
                </div>
                <div class="item col-md-3">
                  <li> <a class="scrollto btn btn-cta-secondary" style="background-color:#00337f !important;width:100%;color: white !important" href="#exer1">Exercise 1</a></li>
                </div>
                <div class="item col-md-3">
                  <li> <a class="scrollto btn btn-cta-secondary" style="background-color:#00337f !important;width:100%;color: white !important" href="#exer2">Exercise 2</a></li>
                </div>
                
              </div>
            </ul>
          </div>
          <!--//container-->
        </section>
        <!--//features-->
     
        <section id="tools" class="docs section">
          <div class="container">
            <div class="docs-inner">
              <h1 class="title text-center">Tools</h1>
              <div class="block">
                <h3 class="text-center"><a href="https://www.sublimetext.com/download"><img src="https://upload.wikimedia.org/wikipedia/en/4/4c/Sublime_Text_Logo.png" style="width:75px;height:75px;"></a></h3>
                <p>The only tool which we will be using for this exercise is <a href="https://www.sublimetext.com/download">Sublime Text</a>. It is a text editor which you will use to  code. Download the tool form  <a href="https://www.sublimetext.com/download" traget="_blank">this link</a> and you are all set to go. </p>
                <br>
                <p class="text-center"><span>Good job on downloading  Sublime text.</span></p>
              </div>
              <!--//block-->
            </div>
            <!--//docs-inner-->
          </div>
          <!--//container-->
        </section>
        <!--//features-->
    
        <section id="taae" class="docs section">
          <div class="container">
            <div class="docs-inner">
              <h2 class="title text-center">Tags,Elements and Attributes</h2>
              <div class="block">
                <p>The three HTML terms you should begin with are elements, tags, and attributes</p>
                <h3 class="sub-title text-left">Tags and Elements</h3>
                <p>
                <ul>
                  <li>HTML is made up of elements and tags.</li>
                  <li>Elements are enclosed within angled brackets <code>&#60;...&#62;</code>. Together they are called tags.</li>
                </ul>
                </p>
                <p>
                <ul>
                <li>
                  Some commonly used tags are: <code>&#60;h1&#62;</code> through <code>&#60;h6&#62;</code>,<code>&#60;a&#62;</code>, <code>&#60;div&#62;</code>,<code>&#60;ul&#62;</code>, <code>&#60;ol&#62;</code>, <code>&#60;li&#62;</code>. </li><li>HTML elements are written with a start tag, with an end tag, with the content in between <code>&#60;a&#62;</code>content<code>&#60;/&#62;</code>. ** Notice the forward slash (/) on the closing tag.</li><li>Not all elements consist of opening and closing tags.  The <code>&#60;img&#62;</code> tag is one of these tags. Other common selfclosing tags include:
                    <code>&#60;br&#62;</code>
                    ,
                    <code>&#60;embed&#62;</code>
                    ,
                    <code>&#60;hr&#62;</code>
                    ,
                    <code>&#60;img&#62;</code>
                    ,
                    <code>&#60;input&#62;</code>
                    ,
                    <code>&#60;link&#62;</code>
                    ,
                    <code>&#60;meta&#62;</code>
                    ,
                    <code>&#60;param&#62;</code>
                    ,
                    <code>&#60;source&#62;</code>
                    ,
                    <code>&#60;wbr&#62;</code>
                    .</li></ul>
                  </p>
                  <br>
                  <h3 class="sub-title text-left">Attributes</h3>
                  <p>
                  <ul>
                    <li>Every tag has Attributes. Attributes provide additional information about the tag also called properties which come in name and value pair.</li>
                    <li><em>Attributes</em> are properties used to provide additional information about an element.Attributes are defined within the opening tag, after an element&#8217;s name.</li>
                    <li>Generally attributes include a name and a value. The format for these attributes consists of the attribute name followed by an equals sign and then a quoted attribute value.</li>
                  </ul>
                  For example, an <code>&#60;a&#62;</code> element including an <code>href</code> attribute would look like the following:</p>
                  <pre><code class="language-markup">&lta href="http://www.pace.edu/seidenberg/"&gtGo to Seidenberg &lt/a&gt</code></pre>
                  <br>
                  <p>photoshop image to be made.</p>
                  </p>
                  <p data-height="265" data-theme-id="dark" data-slug-hash="GqNxEx" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/GqNxEx/">HTML Terms Demo</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
                  <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
                  <br>
                  <p>The preceding code will display the text <b>&#8220;Go to Seidenberg&#8221;</b> on the web page and will take users to <b>http://www.pace.edu/seidenberg/</b>  upon clicking the <b>&#8220;Go to Seidenberg&#8221;</b> text. The anchor element is declared with the opening <code>&#60;a&#62;</code> and closing <code>&#60;/a&#62;</code> tags encompassing the text, and the hyperlink reference attribute and value are declared with <code>href="http://www.pace.edu/seidenberg/"</code> in the opening tag.</p>
              </div>
              <!--//block-->
            </div>
            <!--//docs-inner-->
          </div>
          <!--//container-->
        </section>
        <!--//features-->
        <!--Lesson 2  -->
        <section id="commontags" class="docs section">
        <div class="container">
        <div class="docs-inner">
        <h2 class="title text-center">Common Tags</h2>
        <div class="block">
        <h4 class="sub-title text-left">Heading Tag:<code>&#60;h1&#62;</code> through <code>&#60;h6&#62;</code></h4>
        <p>
        <code>&#60;h1&#62;</code> being the biggest and <code>&#60;h6&#62;</code> being the smallest.
        The results for the tags can be seen below.
        <p data-height="265" data-theme-id="dark" data-slug-hash="LZWEBd" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/LZWEBd/">Heading HTML</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
        </p><br>
        <h4 class="sub-title text-left">Image Tag: <code>&#60;img&#62;</code> </h4>
        <p>
        The <code>&#60;img&#62;</code> tag defines an image in an HTML page.
        The <code>&#60;img&#62;</code> tag has two required attributes: src and alt.width and height are optional which specifies the height and width of the image.
        <span>Note:</span> Images are not technically inserted into an HTML page, images are linked to HTML pages. The <code>&#60;img&#62;</code> tag creates a holding space for the referenced image. <code>src=" "</code> is the link to the image. <code>alt=" "</code> is the text displayed when you hover over the image.
        <p data-height="265" data-theme-id="dark" data-slug-hash="JKWogZ" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/JKWogZ/">HTML Image</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
        </p><br>
        <h4 class="sub-title text-left">Paragraph: <code>&#60;p&#62;</code> </h4>
        <p>The <code>&#60;p&#62;</code> tag defines a paragraph.
        Browsers automatically add some space (margin) before and after each <code>&#60;p&#62;</code> element.
        </p>
        <p data-height="265" data-theme-id="dark" data-slug-hash="RRpPrz" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/RRpPrz/">Paragraph HTML</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="//assets.codepen.io/assets/embed/ei.js"></script>
        </p><br>
        <h4 class="sub-title text-left">Lists</h4>
        <p>HTML lists are of two types:
        <ul><li><span>Ordered List </span><code>&#60;ol&#62;</code></li><li>Unordered List <code>&#60;ul&#62;</code></li></ul>
        <p>
        <span>Ordered List:</span>-
        An ordered list starts with the <code>&#60;ol&#62;</code> tag. Each list item starts with the <code>&#60;li&#62;</code> (list item) tag.The list items in ordered list will be marked with numbers.<br>
        <span>Unordered List:</span>
        An unordered list starts with the <code>&#60;ul&#62;</code>tag. Each list item starts with the <code>&#60;li&#62;</code> tag.The list items will be marked with bullets (small black circles)</p></p>.
        <p data-height="265" data-theme-id="dark" data-slug-hash="vKxOxo" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/vKxOxo/">List HTML</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="//assets.codepen.io/assets/embed/ei.js"></script><br>

        <h4 class="sub-title text-left">Anchor Tag: <code>&#60;a&#62;</code></h4>
        <p>
          <ul><li>The <code>&#60;a&#62;</code> tag defines a hyperlink, which is used to link from one page to another.</li>

<li>he most important attribute of the <code>&#60;a&#62;</code> element is the <code>&#60;href=" "&#62;</code> attribute, which indicates the link's destination.</li>

<li>By default, links will appear as follows in all browsers:

<ul><li>An unvisited link is underlined and blue</li>
<li>A visited link is underlined and purple</li>
<li>An active link is underlined and red</li></ul></ul>
        </p>
       <p data-height="265" data-theme-id="dark" data-slug-hash="GqNxEx" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/GqNxEx/">HTML Terms Demo</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
<script async src="https://assets.codepen.io/assets/embed/ei.js"></script><br>

        <h4 class="sub-title text-left">Some Stying Tags</h4>
        <p>
          <ul>
            <li><code>&#60;b&#62;</code> - Bold text</li>
            <li><code>&#60;strong&#62;</code> - Important text</li>
            <li><code>&#60;i&#62;</code> - Italic text</li>
            <li><code>&#60;em&#62;</code> - Emphasized text</li>
            <li><code>&#60;mark&#62;</code> - Marked text</li>
            <li><code>&#60;small&#62;</code> - Small text</li>
            <li><code>&#60;del&#62;</code> - Deleted text</li>
            <li><code>&#60;ins&#62;</code> - Inserted text</li>
            <li><code>&#60;sub&#62;</code> - Subscript text</li>
            <li><code>&#60;sup&#62;</code> - Superscript text</li>

          </ul>
          <p data-height="391" data-theme-id="dark" data-slug-hash="MepwRX" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/MepwRX/">Text Editing</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
<script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
        </p>


        </p>
        </div><!--//block-->
        </div><!--//docs-inner-->
        </div><!--//container-->
        </section><!--//features-->





       
        <section id="pagestruct" class="docs section">
        <div class="container">
        <div class="docs-inner">
        <h2 class="title text-center">HTML Page Structure</h2>
        <div class="block">
        <h3 class="sub-title text-center">Let's get started with the page structure !</h3>
        <ul><li><p>HTML documents are plain text documents saved with an <code>.html</code> file extension rather than a <code>.txt</code> file extension. </p></li>
        <li><p>All HTML documents have a required structure that includes the following declaration and elements: <code>&#60;!DOCTYPE html&#62;</code>, <code>&#60;html&#62;</code>, <code>&#60;head&#62;</code>, and <code>&#60;body&#62;</code>.</p></li>
        <li><p>The document type declaration, or <code>&#60;!DOCTYPE html&#62;</code>, informs web browsers which version of HTML is being used and is placed at the very beginning of the HTML document.</p>.</li><br>
        <li>
        <p><h4 class="title text-left"><code>&#60;html&#62;</code>...<code>&#60;/html&#62;</code></h4>
        <p>Every HTML document begins and ends with the <code>&#60;html&#62;</code> tag. This tells the browser that the following document is an html file.</p></p></li><br>

        <li><p><h4 class="title text-left"><code>&#60;head&#62;</code>...<code>&#60;/head&#62;</code></h4>
        <p>The <code>&#60;head&#62;</code> tag contains the title of the document along with general information about the file, like the author, copyright, keywords and/or a description of what appears on the page.The content inside the <code>&#60;head&#62;</code> element is not displayed on the web page itself.</p></p></li><br>

        <li><p><h4 class="title text-left"><code>&#60;body&#62;</code>...<code>&#60;/body&#62;</code></h4>
        <p>The main content of your page is placed within the <code>&#60;body&#62;</code> tags: your text, images, links, tables and so on.</p></p></li><br>

        <li><p><h4 class="title text-left"><code>&#60;title&#62;</code>...<code>&#60;/title&#62;</code></h4>
        <p>It appears within the <code>&#60;head&#62;</code> tags and gives the title of the page. It is the title of the browser tab or window.</p></p></li></ul>


        <p data-height="265" data-theme-id="dark" data-slug-hash="gMLvem" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/gMLvem/">gMLvem</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
        <script async src="//assets.codepen.io/assets/embed/ei.js"></script></p>
        </div><!--//block-->
        </div><!--//docs-inner-->
        </div><!--//container-->
        </section><!--//features-->
 
        <!--Lesson 5 -->
        <section id="hip" class="docs section">
        <div class="container">
        <div class="docs-inner">
        <h2 class="title text-center">HTML In Practice</h2>
        <div class="block">
        <ol><li>
                  <p>Let&#8217;s open our text editor, create a new file named <code>index.html</code>, and save it to a location we won&#8217;t forget. I&#8217;m going to create a folder on my Desktop named &#8220;STEMCAMP&#8221; and save this file there; feel free to do the same.</p>
                </li><br>
                <li>
                  <p>Within the index.html file, let&#8217;s add the document structure, including the <code>&#60;!DOCTYPE html&#62;</code> document type and the <code>&#60;html&#62;</code>, <code>&#60;head&#62;</code>, and <code>&#60;body&#62;</code> elements.</p>
                  <div class="code-block">
                <!--//Use Prismjs - http://prismjs.com/index.html#basic-usage -->
                <pre><code class="language-markup">
&lt!Doctype HTML&gt
&lthtml&gt
  &lthead&gt
  &lt/head&gt 
  &ltbody&gt
  &lt/body&gt
&lt/html&gt
                 </code></pre>
            </div><!--//code-block-->
                </li><br>
                <li>
                  <p>Inside the <code>&#60;head&#62;</code> element, let&#8217;s add <code>&#60;meta&#62;</code> and <code>&#60;title&#62;</code> elements. The <code>&#60;meta&#62;</code> element should include the proper charset attribute and value, while the <code>&#60;title&#62;</code> element should contain the title of the page&#8212;let&#8217;s say &#8220;STEM CAMP.&#8221;</p>
                  <div class="code-block">
                <!--//Use Prismjs - http://prismjs.com/index.html#basic-usage -->
                <pre><code class="language-markup">
&lthead&gt
  &ltmeta charset="utf-8"&gt
  &lttitle&gt STEMcCAMP &lt/title&gt
&lt/head&gt 
                 </code></pre>
            </div><!--//code-block-->
                </li><br>
                <li>
                  <p>Inside the <code>&#60;body&#62;</code> element, let&#8217;s add <code>&#60;h1&#62;</code> and <code>&#60;p&#62;</code> elements. The <code>&#60;h1&#62;</code> element should include the heading we wish to include&#8212;let&#8217;s use &#8220;STEM CAMP&#8221; again&#8212;and the <code>&#60;p&#62;</code> element should include a simple paragraph to introduce our conference.</p>
                  <div class="code-block">
                <!--//Use Prismjs - http://prismjs.com/index.html#basic-usage -->
                <pre><code class="language-markup">
&ltbody&gt 
  &lth1&gt STEMP CAMP &lt/h1&gt 
  &ltp&gt At STEM CAMP, we learn to make website, go around New York City, visit companies and most importantly have fun  &lt/p&gt
&lt/body&gt  
                 </code></pre>
            </div><!--//code-block-->
                </li><br>
                <li>
                  <p>Now it&#8217;s time to see how we&#8217;ve done! Let&#8217;s go find our index.html file (mine is within the &#8220;styles-conference&#8221; folder on my Desktop). Double-clicking this file or dragging it into a web browser will open it for us to review.</p>
                </li><br>
              </ol>
              <p data-height="265" data-theme-id="dark" data-slug-hash="Nrpmre" data-default-tab="html,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/Nrpmre/">HTML PAGE DEMO</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
<script async src="https://assets.codepen.io/assets/embed/ei.js"></script><br>
              <p class="text-center">Let’s switch gears a bit, moving away from HTML, and take a look at CSS.</p>


   
        </div><!--//block-->
        </div><!--//docs-inner-->
        </div><!--//container-->
        </section><!--//features-->
      
        <!--Lesson 7 -->
        <section id="cssi" class="docs section">
        <div class="container">
        <div class="docs-inner">
        <h2 class="title text-center">CSS intro</h2>
        <div class="block">
        
        <p class="text-center">
          <ul>
            <li>
              <h4>What is CSS?</h4>
            
                <ul>
                  <li><b>CSS</b> stands for <b>C</b>ascading <b>S</b>tyle <b>S</b>heets.</li>
                  <li>CSS describes <strong>how HTML elements are to be displayed on screen,  
                  paper, or in other media.</strong></li>
                  <li>CSS <strong>saves a lot of work</strong>. It can control the layout of 
                  multiple web pages all at once.</li>
                </ul>
            </li>
             <li>
              <h4>Selector</h4>
              <p>A selector designates exactly which element or elements within our HTML to target and apply styles (such as color, size, and position) to.<br>Within CSS, selectors are followed with curly brackets, {}, which encompass the styles to be applied to the selected element. The selector here is targeting all <code>&#60;p&#62;</code> elements.
              <pre><code class="language-css">p {....}</code></pre></p>
            </li>
            <li>
              <h4>Properties</h4>
              <p>a property determines the styles that will be applied to that element. Property names fall after a selector, within the curly brackets, <code>{}</code>, and immediately preceding a colon, <code>:</code>. There are numerous properties we can use, such as <code>background</code>, <code>color</code>, <code>font-size</code>, <code>height</code>, and <code>width</code>, and new properties are often added. In the following code, we are defining the <code>color</code> and <code>font-size</code> properties to be applied to all <code>&lt;p&gt;</code> elements.<br>
              <pre><code class="language-css">p {
color:......; 
font-size:.....; }</code></pre>
              </p>
            </li>

            <li>
              <h4>Values</h4>
              <p>Values can be identified as the text between the colon, <code>:</code>, and semicolon, <code>;</code>. Here we are selecting all <code>&lt;p&gt;</code> elements and setting the value of the <code>color</code> property to be <code>orange</code> and the value of the <code>font-size</code> property to be <code>16</code> pixels.<br>
<pre><code class="language-css">p {
color: orange ; 
font-size: 16px; }</code></pre>
              </p>
            </li>

            <li>
              <h4>ID & Class</h4>
              <p>The basic tags like <code>&lt;p&gt;</code>,<code>&lt;h1&gt;</code> etc. will do the job, but often we need to be more specific. For this we need ID's and Classes.<code>&lt;ul id="nav"&gt;</code> or <code>&lt;ul class="nav"&gt;</code>
                <ul>
                  <li><strong>ID:</strong><ul><li>Each element can have only one ID</li>
<li>Each page can have only one element with that ID</li>
<li>ID selectors use an element’s id attribute value as a selector.</li>
<li>Within CSS, ID selectors are denoted by a leading hash sign, <code>#</code>, followed by the <code>id</code> attribute value. Here the ID selector will only select the element containing the <code>id</code> attribute value of <code>stem</code>.</li></ul></li>
                  <li><strong>Class:</strong><ul>
                                <li>You can use the same class on multiple elements.</li>
<li>You can use multiple classes on the same element.</li>
<li>Within CSS, classes are denoted by a leading period, <code>.</code>, followed by the <code>class</code> attribute value. Here the class selector will select any element containing the <code>class</code> attribute value of <code>awesome</code>, including both division and paragraph elements.</li>
                              </ul></li>
                              <li>
                                <pre><code class="language-css">#stem {...}
.stemcamp {...}</code></pre>
<pre><code class="language-markup">&lth1 class="stemcamp"&gt .... &lt/h1&gt
&ltp class="stemcamp"&gt .... &lt/p&gt
&lth4 id="stem"&gt .... &lt/h4&gt</code></pre>
                              </li>
                </ul>
              </p>
            </li>
          <li>There are three ways of inserting a style sheet:
          <ul>
            <li>External style sheet:With an external style sheet, you can change the look of an entire website by changing just one file! Each page must include a reference to the external style sheet file inside the <code>&lt;link&gt;</code> element. The <code>&lt;link&gt;</code> element goes inside the <code>&lt;head&gt;</code> section:<br>
<pre><code class="language-markup">&lthead&gt
&ltlink rel="stylesheet" type="text/css" href="mystyle.css"&gt
&lt/head&gt</code></pre>
</li>
  <li>Internal style sheet:An internal style sheet may be used if one single page has a unique style.Internal styles are defined within the <code>&lt;style&gt;</code> element, inside the <code>&lt;head&gt;</code> section of an HTML page:<br>
  <pre><code class="language-markup">&lthead&gt
&ltstyle&gt

  p 
    {
      color:......; 
      font-size:.....;
    }

  #stem {...}

  .stemcamp {...}

&lt/style&gt
&lt/head&gt</code></pre></li>
  <li>Inline style:An inline style may be used to apply a unique style for a single element. To use inline styles, add the style attribute to the relevant element. The style attribute can contain any CSS property. The example below shows how to change the color of a <code>&lt;h1&gt;</code> element:<br>
  <pre><code class="language-markup">&lth1 style="color:red" &gt It is fun to learn web design. &lt/h1&gt</code></pre>
  </li>
          </ul></li>

          </ul>
        </p>
        
        </div><!--//block-->
        </div><!--//docs-inner-->
        </div><!--//container-->
        </section><!--//features-->
        <!--Lesson 8 -->
        <section id="cip" class="docs section">
        <div class="container">
        <div class="docs-inner">
        <h2 class="title text-center">CSS In Practice</h2>
        <div class="block">
        <h3 class="sub-title text-center">HTML</h3>
        <ol class="practice">
                <li>
                  <p>Inside of our STEMCAMP folder, let’s create a new folder named “assets.” We’ll store all of the assets for our website, such as our style sheets, images, videos, and so forth, in this folder. For our style sheets, let’s go ahead and add another folder named “stylesheets” inside the “assets” folder.</p>
                </li>
                <li>
                  <p>Using our text editor, let’s create a new file named <code>main.css</code> and save it within the “stylesheets” folder we just created.</p>
                </li>
                <li>
                  <p>Looking at our <code>index.html</code> file in a web browser, we can see that the <code>&lt;h1&gt;</code> and <code>&lt;p&gt;</code> elements each have default CSS styles. <br>
                  <pre><code class="language-css">h1 
  {
    text-align:center;
    color:green; 
  }

p
  {
    text-align:left;
    color:blue;
    font-size:30px;
  }</code></pre>

                </li>
                <li>
                  <p>With our <code>main.css</code> file starting to take shape, let’s connect it to our <code>index.html</code> file. Opening the <code>index.html</code> file in our text editor, let’s add the <code>&lt;link&gt;</code> element within our <code>&lt;head&gt;</code> element, just after the <code>&lt;title&gt;</code> element.</p>
                </li>
                <li>
                  <p>Because we’ll be referencing a style sheet within the <code>&lt;link&gt;</code> element, let’s add the relation attribute, <code>rel</code>, with a value of <code>stylesheet</code>.</p>
                </li>
                <li>
                  <p>We also want to include a hyperlink reference, using the <code>href</code> attribute, to our <code>main.css</code> file. Remember, our <code>main.css</code> file is saved within the “stylesheets” folder, which is inside the “assets” folder. Therefore, the <code>href</code> attribute value, which is the path to our <code>main.css</code> file, needs to be <code>assets/stylesheets/main.css</code>.</p>
                  <pre><code class="language-markup">&lthead&gt
  &ltlink rel="stylesheet" type="text/css" href="assets/stylesheets/main.css"&gt
&lt/head&gt</code></pre>
                </li>

              </ol>
        <p data-height="265" data-theme-id="dark" data-slug-hash="bZRQpZ" data-default-tab="css,result" data-user="dhruvaks" data-embed-version="2" class="codepen">See the Pen <a href="http://codepen.io/dhruvaks/pen/bZRQpZ/">CSS In Pracice</a> by Dhruvil R gandhi (<a href="http://codepen.io/dhruvaks">@dhruvaks</a>) on <a href="http://codepen.io">CodePen</a>.</p>
<script async src="https://assets.codepen.io/assets/embed/ei.js"></script>
        </div><!--//block-->
        </div><!--//docs-inner-->
        </div><!--//container-->
        </section><!--//features-->
   
        <!-- ******EXERCISE****** -->
        <section id="exer1" class="license section">
        <div class="container">
        <div class="license-inner">
        <h2 class="title text-center">Exercise 1</h2>
        <h3 class="sub-title text-center">Its all about "YOU" </h3>
        <div class="info">
      <ul><li>
<p>Create a HTML page in the same folder on your desktop and save it as "YourName.html" i.e with .html extension</p></li>
<li><p>Use HTML tags learnt so far to display all the information mentioned below: </p></li>

<ol type="number">
<li> Head shot image (hint: <code>&#60;img&#62;</code> tag)</li>
<li>Describe your dream career / future goals        (hint: <code>&#60;p&#62;</code>, variation of <code>&#60;h1&#62;</code> tags)</li>
<li>HOPES EXPECTATIONS and FEAR for Stem camp (hint: <code>&#60;li&#62;</code> tag)</li>
<li>Describe a meaningful/enjoyable learning experience/trip you've had in school (hint: <code>&#60;img&#62;</code>, <code>&#60;p&#62;</code>, <code>&#60;a&#62;</code>, <code>&#60;h1&#62;</code> through <code>&#60;h6&#62;</code> tags)</li></ol>
<li><span>** NOTE **</span>: To view "YourName.html" file Right click on the file and open with your browser for e.g. Google, Safari)</li></ul>

<p class="text-center">Congratulations on your first webpage you just did it!<p> 
</div><!--//info-->
        <div class="cta-container">
        <div class="speech-bubble">
                <p class="text-center">#BeCreativeGoCrazy</p>        

        </div><!--//speech-bubble-->
        <div class="btn-container  text-center">
        <!--//You need to generate your own PayPal button - https://www.paypal.com/us/cgi-bin/?cmd=_donate-intro-outside -->
        <!--PayPal generated code starts-->
        <!--//PayPal generated code ends-->
        </div><!--//btn-container-->
        </div><!--//cta-container-->
        </div><!--//license-inner-->
        </div><!--//container-->
        </section><!--//how-->
        <!-- ******LICENSE****** -->
        <section id="exer2" class="license section">
        <div class="container">
        <div class="license-inner">
        <h2 class="title text-center">Exercise 2</h2>
        <div class="info">
        <iframe src="https://docs.google.com/forms/d/1kvoAfqTAjwWmgifY7_fA7VUAukIQruwzV3K7_f3k_dE/viewform?embedded=true" style="width:100%" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading...</iframe>
        </div><!--//info-->
        <div class="cta-container">
        <div class="speech-bubble">
        <p class="intro">Pre welcome message</p>
        <div class="icon-holder  text-center"><i class="fa fa-smile-o"></i></div>
        </div><!--//speech-bubble-->
        </div><!--//cta-container-->
        </div><!--//license-inner-->
        </div><!--//container-->
        </section><!--//how-->
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
        <p>It is a pleasure to invite you to Pace University! The program is from July 18th to July 29th, Monday-Friday starting promptly at 10AM to approximately 4PM. On some days during the program, we will go on company visits and trips around New York City that will end after 4PM. You will learn how to visualize data using different tools, design user interfaces, working on live projects with other students and have LOTS & LOTS OF FUN!</p>
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