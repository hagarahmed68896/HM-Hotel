<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HM Hotel - ABOUT</title>
    <?php require("components/links.php")?>
    <style>
      .box{
        border-top-color:var(--teal) !important;
      }
    </style>
</head>


<body class="bg-light">
  <!-- navbar, login and register modal -->
<?php require("components/nav.php") ?>


<div class="my-5 px-4">
<h2 class="fw-bold text-center h-font">ABOUT US</h2>
<div class=" bg-dark h-line" style="width:150px;height:1.7px;margin:0 auto;"></div>
<p class="text-center mt-3">
  Lorem ipsum dolor sit amet consectetur,
  adipisicing elit. Aliquam eaque nihil commodi aspernatur repudiandae quod! Qui.
</p>
</div>



<div class="container">
  <div class="row justify-content-between align-items-center">
    <div class="cl-lg-6 col-md-5 mb-4 order-lg-1 order-md-1 order-2">
      <h3 class="mb-3">Lorem ipsum dolor sit</h3>
      <p>
        Lorem ipsum,dolor sit amet consectetur adipisicing elit.
        Mollitia ea ex eos delectus! Accusamus, deleniti aliquam?
      </p>
    </div>
    <div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-2 order-1">
      <img src="images/about/about.jpg" class="w-100">
    </div>
  </div>
</div>


<div class="container mt-5">
  <div class="row">
    <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="box rounded shadow border-top text-center p-4 border-4">
        <img src="images/about/hotel.svg" width="70px">
        <h4 class="mt-3">100+ ROOMS</h4>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="box rounded shadow border-top text-center p-4 border-4">
        <img src="images/about/customers.svg" width="70px">
        <h4 class="mt-3">200+ CUSTOMERS</h4>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="box rounded shadow border-top text-center p-4 border-4">
        <img src="images/about/rating.svg" width="70px">
        <h4 class="mt-3">150+ REVIEWS</h4>
      </div>
      </div>
      <div class="col-lg-3 col-md-6 mb-4 px-4">
      <div class="box rounded shadow border-top text-center p-4 border-4">
        <img src="images/about/staff.svg" width="70px">
        <h4 class="mt-3">200+ STAFFS</h4>
      </div>
    </div>
  </div>
</div>


<h3 class="text-center h-font my-5 fw-bold">MANAGEMENT TEAM</h3>
<div class="container px-4">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Mohamed Mustafa</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Mohamed Mustafa</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Ahmed Mustafa</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Ali Mahmoud</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Omar Ahmed</h5>
      </div>
      <div class="swiper-slide bg-white rounded overflow-hidden text-center">
        <img src="images/about/IMG_17352.jpg" class="w-100">
        <h5 class="mt-2">Zeiad Mohamed</h5>
      </div>
    </div>
    <div class="swiper-pagination "></div>
  </div>
</div>






<!-- footer -->
<?php require("components/footer.php") ?>


<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 40,
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
          slidesPerView:3,
        },
        1024:{
          slidesPerView:3,
        }
      }
    });
    
</script>
</body>
</html>