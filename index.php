<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="smoothslides/css/smoothslides.theme.css">
    <title>Sea & River House</title>
</head>
  <body>
      <p>The views are spectacular!</p>
      <div class="smoothslides" id="coveslides">
        <img src="images/views-from-house/01.jpg" />
        <img src="images/views-from-house/02.jpg" />
        <img src="images/views-from-house/03.jpg" />
        <img src="images/views-from-house/04.jpg" />
        <img src="images/views-from-house/05.jpg" />
        <img src="images/views-from-house/06.jpg" />
        <img src="images/views-from-house/07.jpg" />
        <img src="images/views-from-house/08.jpg" />
        <img src="images/views-from-house/09.jpg" />
        <img src="images/views-from-house/10.jpg" />
        <img src="images/views-from-house/11.jpg" />
      </div>


      <article>
        <div id="FK_Calendar_Widget53439ff4badb7" style="width:400px; margin:25px auto 0 auto; text-shadow:none;">
        <a href="http://www.flipkey.com/" mce_href="http://www.flipkey.com/"><img alt="FlipKey" src="http://www.flipkey.com/img/widgets/FlipKey-118x29.png" mce_src="http://www.flipkey.com/img/widgets/FlipKey-118x29.png" class="fk-calendar"></a>
    </div>
      </article>
      <article>
        <div class="col-sm-6">
          <div class="caption">
            <h3><span class="label label-info">Contact</span></h3>
              <iframe src="https://www.youtube.com/embed/5gydT0b1Lmw?rel=0" width="231" height="155" style="border: none;"></iframe>
          </div><!-- caption -->
        </div>
      </article>
    <article class=albion-map>
       <script> 
          function init_map() {
          var var_location = new google.maps.LatLng(45.430817,12.331516);
       
              var var_mapoptions = {
                center: var_location,
                zoom: 14
              };
       
          var var_marker = new google.maps.Marker({
            position: var_location,
            map: var_map,
            title:"Venice"});
       
              var var_map = new google.maps.Map(document.getElementById("map-container"),
                  var_mapoptions);
                  var_marker.setMap(var_map); 
              }
          google.maps.event.addDomListener(window, 'load', init_map);
        </script>
     </article>
    <footer>
      <div id="FK_Best_Of_Badge533b020ded110" class=" svg">
       <div class="fk-best-of-badge flipkey-reset">
        <div class="fk-star-icon">
         <img src="https://s1.fkimg.com/img/widgets/silver.png">
        </div>
            <div class="fk-badge-content">
             <div class="fk-header">
              Top Vacation Rental
             </div>
             <div class="fk-badge-text">
                 <p class="fk-property_title" onclick="<window class="FlipKey"></window>fk_frontdesk_link('25524')">SEA &amp; RIVER H o u s e
                 </p>
             </div>
               <span class="fk-logo">
                <a target="_blank" href="https://www.flipkey.com/">
                 <img alt="FlipKey" src="https://s1.fkimg.com/img/FK-logo-90x14.png">
                </a>
               </span>    
            </div><!-- fk-badge-content -->
            </div><!-- fk-best-of-badge -->
      </div><!-- FK_Best_Of_Badge533b020ded110 -->

<!-- smoothslides script -->
  <script type="text/javascript" src="jquery.js"></script>
      <script type="text/javascript" src="js/smoothslides-2.2.1.min.js"></script>
      <script type="text/javascript">
        $(window).load( function() {
          $('#coveslides').smoothslides();
        });
      </script>
    </footer>
  </body>
</html>