
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">
    <link href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/slick/slick.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('frontend/assets/slick/slick-theme.css')}}"/>
    <title>Rave</title>
  </head>
  <body>
    <header data-aos="fade-down">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="assets/images/black-logo.gif" class="img-fluid" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Our Services</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Customers</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Members</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Contact Rave</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    @yield('content')
    <footer>
      <div class="footer-up">
        <div class="container">
          <div class="row">
            <div class="col-lg-4">
              <img src="assets/images/white-logo.gif" class="img-fluid" alt="">
              <ul class="footer-ul-1">
                <li><a href="#"><i class="fas fa-phone-alt"></i>123 - 4567 - 890</a></li>
                <li><a href="#"><i class="fas fa-envelope"></i>lorem@info.com</a></li>
              </ul>
              <ul class="socialicon">
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              </ul>
            </div>
            <div class="col-lg-8">
              <div class="row">
                <div class="col-lg-4">
                  <h3 class="sec-h3">Usefull Links</h3>
                    <ul class="footer-menu-1">
                      <li><a href="#">Home</a></li>
                      <li><a href="#">About Us</a><li>
                      <li><a href="#">Our Services</a><li>
                      <li><a href="#">Customers</a><li>
                      <li><a href="#">Members</a><li>
                    </ul>
                </div>
                <div class="col-lg-4">
                  <h3 class="sec-h3">Services</h3>
                    <ul class="footer-menu-1">
                      <li><a href="#">Gasoline</a></li>
                      <li><a href="#">Delivery</a><li>
                      <li><a href="#">Goods</a><li>
                      <li><a href="#">Gasoline</a><li>
                      <li><a href="#">Delivery</a><li>
                    </ul>
                </div>
                <div class="col-lg-4">
                  <h3 class="sec-h3">Payments Option</h3>
                    <ul class="footer-menu-1">
                      <li><a href="#"><img src="assets/images/paypal.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/MasterCard.png" alt=""></a></li>
                      <li><a href="#"><img src="assets/images/paypal.png" alt=""></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-down">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <p>© 2021. Rave - All Rights Reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="frontend/assets/bootstrap/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
      <script type="text/javascript" src="frontend/assets/slick/slick.min.js"></script>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    @stack('scripts')
      <script>
      jQuery( document ).ready(function($) {
      $('#gallery').slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 2000,
      slidesToShow: 3,
      loop: true,
      slidesToScroll: 1,
      autoplay: false,
      autoplaySpeed: 2000,
      pauseOnHover: false,
      });
      });
      </script>
      <script>
          AOS.init();
      </script>
    </body>
  </html>
