<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HM Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Orbitron&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />    
    <link rel="stylesheet" href="css/common.css">
</head>


<body class="bg-light">
  <!-- navbar, login and register modal -->
<nav class="navbar navbar-expand-lg bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">HM Hotel</a>
    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link me-2 active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
   
     
      </ul>
        <div class="d-flex" role="search">
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-2" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
            </button>
            <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
            </button>
        </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h1 class="modal-title fs-5 d-flex align-items-center">
                <i class="bi bi-person-circle fs-3 me-2"></i> User Login
                </h1>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadw-none">
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadw-none">
                </div>
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <button type="submit" class="btn btn-dark shadow-none">
                      Login
                    </button>
                    <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forget password?</a>
                </div>
            </div>
   
        </form>

    </div>
  </div>
</div>

<div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
        <form action="">
            <div class="modal-header">
                <h1 class="modal-title fs-5 d-flex align-items-center">
                <i class="bi bi-person-lines-fill fs-3 me-2"></i> User Registeration
                </h1>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <span class="badge rounded-pill text-bg-light mb-3 text-wrap lh-base">
              Note: Your details must match with your ID (ID card, passport, driving license, etc)
              that will be required during check-in.
            </span>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control shadw-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control shadw-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Phone Number</label>
                    <input type="text" class="form-control shadw-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Picture</label>
                    <input type="file" class="form-control shadw-none">
                </div>
                <div class="col-md-12 mb-3 p-0 ">
                    <label class="form-label">Address</label>
                    <textarea class="form-control shadow-none"  row=1></textarea>
                </div>
                <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Pincode</label>
                    <input type="number" class="form-control shadw-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Date of birth</label>
                    <input type="date" class="form-control shadw-none">
                </div>
                <div class="col-md-6 ps-0 mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadw-none">
                </div>
                <div class="col-md-6 p-0 mb-3">
                    <label class="form-label">Confirm password</label>
                    <input type="password" class="form-control shadw-none">
                </div>
              </div>
            </div>
            <div class="text-center my-1">
                 <button type="submit" class="btn btn-dark shadow-none">
                      Register
                    </button>
            </div>
            </div> 
        </form>
    </div>
  </div>
</div>






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
<h2 class="mt-4 mb-4 pt-4 text-center fw-bold h-font">Our Rooms</h2>
<div class="container">
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
<div class="container">
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
<div class="container mt-5">
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



<br><br><br><br><br>


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