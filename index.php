<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HM Hotel - HOME</title>
    <?php require("components/links.php")?>
</head>


<body class="bg-light">
  <!-- navbar, login and register modal -->
<?php require("components/nav.php") ?>


<!-- carousel -->
<div class="container-fluid px-lg-4 mt-4">
  <div class="swiper swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/carousel/IMG_15372.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_40905.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_55677.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_62045.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_93127.png" class="w-100 d-block"/>
        </div>
        <div class="swiper-slide">
          <img src="images/carousel/IMG_99736.png" class="w-100 d-block"/>
        </div>
      </div>
    
    </div>
</div>


<!-- check availability form  -->
<div class="container availability-form">
  <div class="row">
    <div class="col-lg-12 bg-white p-4 rounded">
      <h5 class="mb-4">
      Check Booking Availability
      </h5>
      <form action="">
        <div class="row align-items-end">
          <div class="col-lg-3 mb-3">
            <label style="font-weight:500">Check-in</label>
            <input type="date" class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label style="font-weight:500">Check-out</label>
            <input type="date"  class="form-control shadow-none">
          </div>
          <div class="col-lg-3 mb-3">
            <label style="font-weight:500">Adult</label>
            <input type="number"  class="form-control shadow-none">
          </div>
          <div class="col-lg-2 mb-3">
            <label style="font-weight:500">Children</label>
            <input type="number"  class="form-control shadow-none">
          </div>
          <div class="col-lg-1 mb-lg-3 mt-2">
            <button type="submit" class="btn text-white shadow-none custom-bg">Submit</button>
          </div>
          
        </div>
      </form>
    </div>
  </div>
</div>



<!--  Rooms-->
<h2 class="mt-5 mb-4 pt-4 text-center fw-bold h-font">Our Rooms</h2>
<div class="container mt-5 mb-5">
  <div class="row">
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-8 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/1.jpg" class="card-img-top" >
        <div class="card-body">
          <h5>Simple Room</h5>
          <h6 class="mb-4">500 LE per neight</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
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
          <div class="facilities mb-6">
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
          <div class="guests mb-6 mt-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill text-bg-light  text-wrap">
              5 Adults
             </span>
             <span class="badge rounded-pill text-bg-light  text-wrap">
               4 Children
              </span>
          </div>
          <div class="rating mb-4 mt-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light" >
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
     
          </div>
          <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-8 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/IMG_11892.png" class="card-img-top" >
        <div class="card-body">
          <h5>Simple Room</h5>
          <h6 class="mb-4">700 LE per neight</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
            <span class="badge rounded-pill text-bg-light  text-wrap">
             2 Rooms
            </span>
            <span class="badge rounded-pill text-bg-light  text-wrap">
              2 Bathroom
             </span>
             <span class="badge rounded-pill text-bg-light  text-wrap">
              1 Balcony
             </span>
             <span class="badge rounded-pill text-bg-light  text-wrap">
              2 Sofa
             </span>
          </div>
          <div class="facilities mb-6">
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
          <div class="guests mb-6 mt-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill text-bg-light  text-wrap">
              5 Adults
             </span>
             <span class="badge rounded-pill text-bg-light  text-wrap">
               4 Children
              </span>
          </div>
          <div class="rating mb-4 mt-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light" >
                       <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>

            </span>
     
          </div>
          <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-8 shadow" style="max-width: 350px; margin: auto;">
        <img src="images/rooms/IMG_39782.png" class="card-img-top" >
        <div class="card-body">
          <h5>Simple Room</h5>
          <h6 class="mb-4">500 LE per neight</h6>
          <div class="features mb-4">
            <h6 class="mb-1">Features</h6>
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
          <div class="facilities mb-6">
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
          <div class="guests mb-6 mt-4">
            <h6 class="mb-1">Guests</h6>
            <span class="badge rounded-pill text-bg-light  text-wrap">
              5 Adults
             </span>
             <span class="badge rounded-pill text-bg-light  text-wrap">
               4 Children
              </span>
          </div>
          <div class="rating mb-4 mt-4">
            <h6 class="mb-1">Rating</h6>
            <span class="badge rounded-pill bg-light" >
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
     
          </div>
          <div class="d-flex justify-content-evenly mb-2">
                      <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book now</a>
                      <a href="#" class="btn btn-sm btn-outline-dark shadow-none">More details</a>

          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-12 text-center mt-4">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadw-none">More Rooms >>></a>
    </div>
  </div>
</div>



<!-- facilitaies -->
<h2 class="mt-4 mb-4 pt-4 text-center fw-bold h-font">OUR FACILITIES</h2>
<div class="container mt-5 mb-5">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
    <div class="col-lg-2 col-md-2 bg-white rounded py-4 text-center my-3 shadow">
      <img src="images/facilities/IMG_27079.svg" alt="" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 bg-white rounded py-4 text-center my-3 shadow">
      <img src="images/facilities/IMG_41622.svg" alt="" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 bg-white rounded py-4 text-center my-3 shadow">
      <img src="images/facilities/IMG_43553.svg" alt="" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 bg-white rounded py-4 text-center my-3 shadow">
      <img src="images/facilities/IMG_47816.svg" alt="" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <div class="col-lg-2 col-md-2 bg-white rounded py-4 text-center my-3 shadow">
      <img src="images/facilities/IMG_49949.svg" alt="" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div>
    <!-- <div class="col-lg-2 col-md-2 bg-white rounded py-4 text-center my-3 shadow">
      <img src="images/facilities/IMG_96423.svg" alt="" width="80px">
      <h5 class="mt-3">Wifi</h5>
    </div> -->
    <div class="col-lg-12 text-center mt-5">
      <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadw-none">More Facilitaies >>></a>

    </div>
  </div>
</div>



<!-- testimonials -->
<h2 class="mt-4 mb-4 pt-4 text-center fw-bold h-font">TESTIMONIALS</h2>
<div class="container mt-5 mb-5">
  <div class="swiper Swiper-testimonials">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3" >
          <img src="images/facilities/" alt="" width="30px">
          <h6 class="m-0 ms-2">Random user1</h6>
        </div>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
           Sit dolore culpa similique velit voluptate a eveniet optio,
           ratione fugit soluta obcaecati harum vel labore nostrum 
           doloribus dolores quo asperiores molestiae.
        </p>
        <dv class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </dv>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3" >
          <img src="images/facilities/" alt="" width="30px">
          <h6 class="m-0 ms-2">Random user2</h6>
        </div>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
           Sit dolore culpa similique velit voluptate a eveniet optio,
           ratione fugit soluta obcaecati harum vel labore nostrum 
           doloribus dolores quo asperiores molestiae.
        </p>
        <dv class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </dv>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-items-center mb-3" >
          <img src="images/facilities/" alt="" width="30px">
          <h6 class="m-0 ms-2">Random user3</h6>
        </div>
        <p>
          Lorem ipsum dolor, sit amet consectetur adipisicing elit.
           Sit dolore culpa similique velit voluptate a eveniet optio,
           ratione fugit soluta obcaecati harum vel labore nostrum 
           doloribus dolores quo asperiores molestiae.
        </p>
        <dv class="rating">
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
          <i class="bi bi-star-fill text-warning"></i>
        </dv>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>
  <div class="col-lg-12 text-center mt-4">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadw-none">Know More >>></a>
  </div>
</div>



<!-- reach us -->
<h2 class="mt-4 mb-4 pt-4 text-center fw-bold h-font">REACH US</h2>
<div class="container mt-5">
  <div class="row">
    <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      <iframe class="w-100 rounded " height="320" src="https://www.google.com/maps/d/embed?mid=1nn96wcV-vjE0UrTBZ6FW9i6Cef0&hl=en&ehbc=2E312F"></iframe>
    </div>
    <div class="col-lg-4 col-md-4 ">
      <div class="bg-white rounded p-4 mb-4">
        <h5 class="">Call us</h5>
        <a href="tel: +2010262785" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-telephone-fill"></i> +2010262785</a>
          <br>
          <a href="tel: +2010262785" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +2010200085</a>
      </div>
      <div class="bg-white rounded p-4 mb-4">
        <h5 class="">Follow us</h5>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light  text-dark fs-6 p-2">
            <i class="bi bi-twitter me-1"></i>  Twitter
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light  text-dark fs-6 p-2">
            <i class="bi bi-facebook me-1"></i>  Facebook
          </span>
        </a>
        <br>
        <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light  text-dark fs-6 p-2">
            <i class="bi bi-instagram me-1"></i>  Instagram
          </span>
        </a>
      </div>
    </div>
  </div>
</div>



<!-- footer -->
<?php require("components/footer.php") ?>




<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay: {
        delay: 5000,
        disapleOnInteraction: false,
      },
    });

    var swiper = new Swiper(".Swiper-testimonials", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop:true,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints:{
        320:{
          slidesPerView:1,
        },
        640:{
          slidesPerView:1,
        },
        768:{
          slidesPerView:2,
        },
        1024:{
          slidesPerView:3,
        }
      }
    });
  </script>
</body>
</html>