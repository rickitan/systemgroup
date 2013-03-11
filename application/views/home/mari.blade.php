
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SYSTEM GROUP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
  {{HTML::style('css/vendors/bootstrap.css')}}
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
  {{HTML::style('css/vendors/bootstrap-responsive.css')}}
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>

  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          {{HTML::link_to_route('home','SYSTEM GROUP','',array('class'=>'brand'))}}
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li> {{HTML::link_to_route('home','Ventas','','')}}</li>
              <li>{{HTML::link_to_route('mari','MARI','','')}}</li>
              <li>{{HTML::link_to_route('ema','EMA','','')}}</li>

            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container-fluid">

          <h3>Herramienta para toma de decisiones utilizando MARI</h3>
          <div class='span12' style='margin-left:-10px;' >

      <iframe width="1200" height="800" frameborder="0" scrolling="no" src="https://skydrive.live.com/embed?cid=717EC79DB82638A7&resid=717EC79DB82638A7%21158&authkey=ALP7eHkWP1Zn0AA&em=2&wdAllowInteractivity=False&AllowTyping=True&ActiveCell='Sheet1'!C4&Item='Sheet1'!B1%3AM9&wdHideGridlines=True"></iframe>          </div>
      </div>  




    </div> <!-- /container -->
  </body>
    {{ HTML:: script('js/vendors/jquery.js')}}
 
  </html> 