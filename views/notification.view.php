<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver connect</title>

    <script src="https://unpkg.com/openlayers@latest/dist/ol.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://unpkg.com/openlayers@latest/dist/ol.css" type="text/css">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/maps/maps.css" />
  <link rel="stylesheet" type="text/css"
    href="https://api.tomtom.com/maps-sdk-for-web/cdn/plugins/SearchBox/2.23.1//SearchBox.css" />
  <link rel="stylesheet" type="text/css"
    href="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/maps/css-styles/traffic-incidents.css" />
  <link rel="stylesheet" type="text/css"
    href="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/maps/css-styles/routing.css" />
  <link rel="stylesheet" type="text/css"
    href="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/maps/css-styles/poi.css" />
  
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
      (function(c,l,a,r,i,t,y){
          c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)};
          t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i;
          y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y);
      })(window, document, "clarity", "script", "lnwxcqk5ie");
  </script>
  
</head>
<body>
<?php require('partials/header.php'); ?>
  <main>
      <section class="live-traffic">
          <div class="live-traffic-head">
            <h2>Live Traffic</h2>
          </div>
          <div class="container-fluid">
              <div class="row">
                <div class="sidebar col-sm-4">
                  <!-- <div id="first-row" class="row p-1">
                     <div class="col py-2">
                      <img src="img/logo.png" /> 
                    </div> 
                  </div> -->
                  <div id="secondary-row" class="row">
                    <div class="col pt-3 label">
                      <span>Choose your location</span>
                      <div id="search-panel-container" class="row">
                        <div id="search-panel" class="container-fluid pb-4"></div>
                      </div>
                    </div>
                  </div>
                  <div class="row row-border">
                    <div class="col py-3 label">
                      <span class="show-traffic-layers">Show traffic layers</span>
                      <div class="row align-items-center pt-2">
                        <div class="col-sm-2">
                          <img class="traffic-icon" src="img/traffic_lights.png" alt="" />
                        </div>
                        <div class="col pt-2">
                          <label for="incidents-toggle" class="traffic-text">Traffic incidents</label>
                        </div>
                        <div class="col-sm-3 pt-2 text-right">
                          <label class="switch">
                            <input id="incidents-toggle" type="checkbox" />
                            <span class="toggle round"></span>
                          </label>
                        </div>
                      </div>
                      <div class="row align-items-center pt-2">
                        <div class="col-sm-2">
                          <img class="traffic-icon" src="img/traffic-flow.png" alt="" />
                        </div>
                        <div class="col pt-2">
                          <label for="flow-toggle" class="traffic-text">Traffic flow</label>
                        </div>
                        <div class="col-sm-3 pt-2 text-right">
                          <label class="switch">
                            <input id="flow-toggle" type="checkbox" />
                            <span class="toggle round"></span>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="py-3 row row-border">
                    <div class="col">
                      <span class="show-traffic-layers">Bounding box for traffic incidents</span>
                      <button id="bounding-box-button" type="button" class="btn btn-block my-2">
                        DRAW BOUNDING BOX
                      </button>
                    </div>
                  </div>
                  <div id="incident-list-wrapper" class="row pt-0">
                    <div class="col">
                      <div id="incident-list-container" class="p-0">
                        <div class="list-group" id="incident-list">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="last-row" class="row mt-2 pt-4 row-border">
                    <div class="col">
                      <div class="row pb-1">
                        <div class="col">
                          <span class="show-traffic-layers">Speed intervals</span>
                        </div>
          
                        <!-- <div class="col">
                          <span class="style-relative">style = relative</span>
                        </div> -->
                      </div>
                      <div class="row py-2">
                        <div class="pl-3 col-sm-10">
                          <span class="legend-font">0 - 0.01</span>
                        </div>
                        <div class="col">
                          <span class="legend-font">1</span>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col">
                          <div class="row mx-0">
                            <div class="col">
                              <div class="row border py-2" style="background-color: #6e6e6e;"></div>
                            </div>
                            <div class="col ml-1">
                              <div class="row border py-2" style="background-color: rgba(245, 8, 2, 0.5);"></div>
                            </div>
                            <div class="col ml-1">
                              <div class="row border py-2" style="background-color: #ff2323;"></div>
                            </div>
                            <div class="col ml-1">
                              <div class="row border py-2" style="background-color: #fad900;"></div>
                            </div>
                            <div class="col ml-1">
                              <div class="row border py-2" style="background-color: #ffff37;"></div>
                            </div>
                            <div class="col ml-1">
                              <div class="row border py-2" style="background-color: #2bc82b;"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row pt-4">
                        <div class="col">
                          <label class="app-info-text"><a href="" data-toggle="modal" data-target="#help-modal">App
                              info</a></label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col" id="map"></div>
                <div id="popup-wrapper">
                </div>
              </div>
            </div>
            
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.2.1/bootstrap-slider.min.js"></script>
            <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/maps/maps-web.min.js"></script>
            <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/5.x/5.57.0/services/services-web.min.js"></script>
            <script src="https://api.tomtom.com/maps-sdk-for-web/cdn/plugins/SearchBox/2.23.1/SearchBox-web.js"></script>
          
            <script src="traffic.js"></script>
      </section>
      
      
  </main>
 
  <?php require('partials/footer.php'); ?>