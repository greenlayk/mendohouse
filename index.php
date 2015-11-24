<!DOCTYPE html>
<html>
  <head>
    <title>Sea & River House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.googleapis.com/css?family=Droid+Sans" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Ubuntu:400,500" rel="stylesheet" type="text/css">
    <link href="_/css/bootstrap.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="_/css/smoothslides.theme.css">
    <link href="_/css/custom.css" rel="stylesheet" media="screen">
  </head>
  <body id="home" data-spy="scroll" data-target="active">
  <section class="container">
    <div class="row logo-menu">
      <?php  include "_/components/php/header.php"; ?><!-- header-img -->
           <div class="smoothslides" id="myslideshow1">
            <img src="images/views-from-house/carousel/from-the-house-01.jpg"/>
            <img src="images/views-from-house/carousel/from-the-house-02.jpg"/>
            <img src="images/views-from-house/carousel/10.jpg"/>
            <img src="images/views-from-house/carousel/11.jpg"/>
           </div><!-- smoothslides -->
    </div>
    <section class="content row">


       <section class="main col col-lg-8">
         

       </section><!--main col col-lg-8  -->
       <section class="sidebar col col-lg-4">
       </section><!-- sidebar col col-lg-4 -->
    </section><!-- content row -->
  </section><!-- container -->
    

    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/jquery.js"></script>
    <script src="_/js/smoothslides-2.2.1.min.js"></script>
    <script>
      $(window).load( function() {
      $('#myslideshow1').smoothSlides();
      });
    </script>
    <script src="_/js/customScript.js"></script>
    <script>document.write('<script src="http://' + (location.host || 'localhost').split(':')[0] + ':35729/livereload.js?snipver=1"></' + 'script>')</script>
  </body>
</html>
