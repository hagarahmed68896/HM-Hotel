<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HM Hotel - ROOMS</title>
    <?php require("components/links.php")?>
    <style>
    </style>
</head>


<body class="bg-light">
  <!-- navbar, login and register modal -->
<?php require("components/nav.php") ?>

<div class="my-5 px-4">
<h2 class="fw-bold text-center h-font">OUR ROOMS</h2>
<div class=" bg-dark h-line" style="width:150px;height:1.7px;margin:0 auto;"></div>
</div>

<div class="container">
  <div class="row">
    <div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-lg-0">
    <nav class="navbar navbar-expand-lg bg-white rounded shadow">
  <div class="container-fluid flex-lg-column align-items-stretch">
    <h4 class="mt-2">FILTERS</h4>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterdropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterdropdown">
        <div class="border bg-light p-3 rounded mb-3">
            <h5 class="mb-3" style="font-size: 18px;">CHECK AVAILABILITY</h5>
            <label style="font-weight:500">Check-in</label>
            <input type="date" class="form-control shadow-none mb-3">
            <label style="font-weight:500">Check-out</label>
            <input type="date" class="form-control shadow-none">
        </div>

        <div class="border bg-light p-3 rounded mb-3">
          <h5 class="mb-3" style="font-size: 18px;">FACILITIES</h5>
          <div class="mb-2">
              <input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
              <label class="form-check-label" style="font-weight:500" for="f1">Facility one</label><br>
              <input type="checkbox" id="f2" class="form-check-input shadow-none me-1">
              <label class="form-check-label" style="font-weight:500" for="f2">Facility two</label><br>
              <input type="checkbox" id="f3" class="form-check-input shadow-none me-1">
              <label class="form-check-label" style="font-weight:500" for="f3">Facility three</label>
          </div>
      </div>

      <div class="border bg-light p-3 rounded mb-3">
        <h5 class="mb-3" style="font-size: 18px;">GUESTS</h5>
        <div class="d-flex">
          <div class="me-2">
            <label style="font-weight:500">Adults</label>
            <input type="number" class="form-control shadow-none mb-3">
          </div>
          <div>
            <label style="font-weight:500">Children</label>
            <input type="number" class="form-control shadow-none mb-3">
          </div>
        </div>
     
    </div>
    </div>
  </div>
</nav>
      
    </div>

    <div  class="col-lg-9 col-md-12 px-4">
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/1.jpg" class="img-fluid rounded" >
          </div>
          <div class="col-md-5  px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Simple room</h5>
            <div class="features mb-4">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
               2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Bathroom
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Balcony
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                3 Sofa
               </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                Television
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                 Wifi
                </span>
                <span class="badge rounded-pill text-bg-light  text-wrap">
                 Room heater
                </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">GUESTS</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                4 Children
                </span>
          
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">500 LE per neight</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm  w-100  btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/1.jpg" class="img-fluid rounded" >
          </div>
          <div class="col-md-5  px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Simple room</h5>
            <div class="features mb-4">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
               2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Bathroom
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Balcony
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                3 Sofa
               </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                Television
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                 Wifi
                </span>
                <span class="badge rounded-pill text-bg-light  text-wrap">
                 Room heater
                </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">GUESTS</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                4 Children
                </span>
          
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">500 LE per neight</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm  w-100  btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/1.jpg" class="img-fluid rounded" >
          </div>
          <div class="col-md-5  px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Simple room</h5>
            <div class="features mb-4">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
               2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Bathroom
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Balcony
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                3 Sofa
               </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                Television
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                 Wifi
                </span>
                <span class="badge rounded-pill text-bg-light  text-wrap">
                 Room heater
                </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">GUESTS</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                4 Children
                </span>
          
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">500 LE per neight</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm  w-100  btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/1.jpg" class="img-fluid rounded" >
          </div>
          <div class="col-md-5  px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Simple room</h5>
            <div class="features mb-4">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
               2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Bathroom
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Balcony
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                3 Sofa
               </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                Television
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                 Wifi
                </span>
                <span class="badge rounded-pill text-bg-light  text-wrap">
                 Room heater
                </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">GUESTS</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                4 Children
                </span>
          
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">500 LE per neight</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm  w-100  btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
      <div class="card mb-4 border-0 shadow">
        <div class="row g-0 p-3 align-items-center">
          <div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
            <img src="images/rooms/1.jpg" class="img-fluid rounded" >
          </div>
          <div class="col-md-5  px-lg-3 px-md-3 px-0">
            <h5 class="mb-1">Simple room</h5>
            <div class="features mb-4">
              <h6 class="mb-3">Features</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
               2 Rooms
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Bathroom
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                1 Balcony
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                3 Sofa
               </span>
            </div>
            <div class="facilities mb-3">
              <h6 class="mb-1">Facilities</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                Television
               </span>
               <span class="badge rounded-pill text-bg-light  text-wrap">
                 Wifi
                </span>
                <span class="badge rounded-pill text-bg-light  text-wrap">
                 Room heater
                </span>
            </div>
            <div class="guests mb-3">
              <h6 class="mb-1">GUESTS</h6>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                5 Adults
              </span>
              <span class="badge rounded-pill text-bg-light  text-wrap">
                4 Children
                </span>
          
            </div>
          </div>
          <div class="col-md-2 text-center">
            <h6 class="mb-4">500 LE per neight</h6>
            <a href="#" class="btn btn-sm w-100 text-white custom-bg shadow-none mb-2">Book now</a>
            <a href="#" class="btn btn-sm  w-100  btn-outline-dark shadow-none">More details</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






<!-- footer -->
<?php require("components/footer.php") ?>




<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>