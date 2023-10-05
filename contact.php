<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HM Hotel - CONTACT</title>
    <?php require("components/links.php")?>

</head>


<body class="bg-light">
  <!-- navbar, login and register modal -->
<?php require("components/nav.php") ?>

<div class="my-5 px-4">
<h2 class="fw-bold text-center h-font">CONTACT US</h2>
<div class=" bg-dark h-line" style="width:150px;height:1.7px;margin:0 auto;"></div>
<p class="text-center mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
  Harum repellendus quisquam, tempora vero nemo, voluptatem ducimus saepe,<br>
  dolor qui sequi velit quam reiciendis quaerat?
  Consequatur ullam fuga ipsa aliquam quidem.</p>
</div>

<div class="container">
  <div class="row">

    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white p-4 shadow rounded">
        <iframe class="w-100 rounded mb-4" height="320" src="https://www.google.com/maps/d/embed?mid=1nn96wcV-vjE0UrTBZ6FW9i6Cef0&hl=en&ehbc=2E312F"></iframe>
        <h5>Address</h5>
        <a href="https://maps.app.goo.gl/kvLNg4mtSpXKop3C8" target="_blank" class="text-decoration-none d-inline-block text-dark mb-2">
          <i class="bi bi-geo-alt-fill"></i> XYZ, Alexandria, Egypt</a>
          <h5 class="mt-4">Call us</h5>
          <a href="tel: +2010262785" class="d-inline-block mb-2 text-decoration-none text-dark">
            <i class="bi bi-telephone-fill"></i> +2010262785</a>
            <br>
            <a href="tel: +2010262785" class="d-inline-block mb-2 text-decoration-none text-dark">
              <i class="bi bi-telephone-fill"></i> +2010200085</a>
        <h5 class="mt-4">Email</h5>
        <a href="mailto:hagarahmed00999@gmail.com" class="d-inline-block mb-2 text-decoration-none text-dark">
          <i class="bi bi-envelope-fill"></i> hagarahmed00999@gmail.com</a>
          <h5 class="mt-4">Follow us</h5>
          <a href="#" class="d-inline-block mb-3 fs-5 me-2 text-dark">
              <i class="bi bi-twitter me-1"></i>
          </a>
          <a href="#" class="d-inline-block mb-3 fs-5 me-2 text-dark">
              <i class="bi bi-facebook me-1"></i> 
          </a>
          <a href="#" class="d-inline-block mb-3 fs-5 me-2 text-dark">
              <i class="bi bi-instagram me-1"></i> 
          </a> 
      </div>
    </div>
    <div class="col-lg-6 col-md-6 mb-5 px-4">
      <div class="bg-white p-4 shadow rounded ">
        <form action="">
          <h5>Send a message</h5>
          <div class="mt-3">
            <label class="form-label" style="font-weight: 500;">Name</label>
            <input type="text" class="form-control shadw-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight: 500;">Email</label>
            <input type="email" class="form-control shadw-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight: 500;">Subject</label>
            <input type="text" class="form-control shadw-none">
          </div>
          <div class="mt-3">
            <label class="form-label" style="font-weight: 500;">Message</label>
            <textarea class="form-control shadow-none"  rows="5" style="resize: none;"></textarea>
          </div>
          <button type="submit" class="btn text-white  custom-bg mt-3">
            Send
          </button>
        </form>
      
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