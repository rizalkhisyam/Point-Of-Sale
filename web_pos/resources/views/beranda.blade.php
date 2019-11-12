<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="no-js">

<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{url('image/beranda/fav.png')}}" />
  <!-- Author Meta -->
  <meta name="author" content="colorlib" />
  <!-- Meta Description -->
  <meta name="description" content="" />
  <!-- Meta Keyword -->
  <meta name="keywords" content="" />
  <!-- meta character set -->
  <meta charset="UTF-8" />
  <!-- Site Title -->
  <title>Qhuy</title>

  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:900|Roboto:400,400i,500,700" rel="stylesheet" />
  
    <link rel="stylesheet" href="{{url('assets/css/all.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/linearicons.css')}}" />
  <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}" />
  <link rel="stylesheet" href="{{url('assets/css/bootstrap.css')}}">
  <link rel="stylesheet" href="{{url('assets/css/magnific-popup.css')}}" />
  <link rel="stylesheet" href="{{url('assets/css/owl.carousel.css')}}" />
  <link rel="stylesheet" href="{{url('assets/css/nice-select.css')}}" />
  <link rel="stylesheet" href="{{url('assets/css/hexagons.min.css')}}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/themify-icons/0.1.2/css/themify-icons.css" />
  <link rel="stylesheet" href="{{url('assets/css/main.css')}}" />
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
  <!-- ================ Start Header Area ================= -->
  <header class="default-header">
    <nav class="navbar navbar-expand-lg  navbar-light">
      <div class="container">
        <a class="navbar-brand" href="index.html">
          <h3>Qhuy</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="lnr lnr-menu"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
          <ul class="navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
          
            <li><a href="contacts.html">Contacts</a></li>

            <li>
              <button class="search">
                <span class="fas fa-search" id="search"></span>
              </button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="search-input" id="search-input-box">
      <div class="container">
        <form class="d-flex justify-content-between">
          <input type="text" class="form-control" id="search-input" placeholder="Search Here" />
          <button type="submit" class="btn"></button>
          <span class="lnr lnr-cross" id="close-search" title="Close Search"></span>
        </form>
      </div>
    </div>
  </header>
  <!-- ================ End Header Area ================= -->

  <!-- ================ start banner Area ================= -->
  <section class="home-banner-area">
    <div class="container">
      <div class="row justify-content-center fullscreen align-items-center">
        <div class="col-lg-5 col-md-8 home-banner-left">
          <h1 class="text-white">
            Sistem Kasir Bagi <br />
            Penjualan Baju
          </h1>
          <p class="mx-auto text-white  mt-20 mb-40">
            Sistem Point of Sale yang dapat membantu mengelola
            pendataan penjualan pada suatu instansi
            seluruh penduduk bumi
          </p>
          <button class="btn text-uppercase"><a href="{{ route('login') }}">Mulai</a></button>
        </div>
        <div class="offset-lg-2 col-lg-5 col-md-12 home-banner-right">
          <img class="img-fluid" src="{{url('image/beranda/header-img.png')}}" alt="" />
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End banner Area ================= -->

  <!-- ================ Start Popular Course Area ================= -->
  <section class="popular-course-area section-gap">
    <div class="container-fluid">
      <div class="row justify-content-center section-title">
        <div class="col-lg-12">
          <h2>
            Popular Courses <br />
            Available Right Now
          </h2>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
      <div class="owl-carousel popuar-course-carusel">
        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="{{url('image/beranda/popular-course/p1.jpg')}}" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="#">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">25 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="{{url('image/beranda/popular-course/p2.jpg')}}" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="#">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">25 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="{{url('image/beranda/popular-course/p3.jpg')}}" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="#">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">25 Reviews</p>
            </div>
          </div>
        </div>

        <div class="single-popular-course">
          <div class="thumb">
            <img class="f-img img-fluid mx-auto" src="{{url('image/beranda/popular-course/p4.jpg')}}" alt="" />
          </div>
          <div class="details">
            <div class="d-flex justify-content-between mb-20">
              <p class="name">programming language</p>
              <p class="value">$150</p>
            </div>
            <a href="#">
              <h4>Learn Angular JS Course for Legendary Persons</h4>
            </a>
            <div class="bottom d-flex mt-15">
              <ul class="list">
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa fa-star"></i></a>
                </li>
              </ul>
              <p class="ml-20">25 Reviews</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Popular Course Area ================= -->

  <!-- ================ Start Feature Area ================= -->
  <section class="other-feature-area">
    <div class="container">
      <div class="feature-inner row">
        <div class="col-lg-12">
          <div class="section-title text-left">
            <h2>
              Features That <br />
              Can Avail By Everyone
            </h2>
            <p>
              If you are looking at blank cassettes on the web, you may be
              very confused at the difference in price. You may see some for
              as low as $.17 each.
            </p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="other-feature-item">
            <i class="ti-key"></i>
            <h4>Lifetime Access</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--160">
          <div class="other-feature-item">
            <i class="ti-files"></i>
            <h4>Source File Included</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--260">
          <div class="other-feature-item">
            <i class="ti-medall-alt"></i>
            <h4>Student Membership</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="other-feature-item">
            <i class="ti-briefcase"></i>
            <h4>35000+ Courses</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--160">
          <div class="other-feature-item">
            <i class="ti-crown"></i>
            <h4>Expert Mentors</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mt--260">
          <div class="other-feature-item">
            <i class="ti-headphone-alt"></i>
            <h4>Live Supports</h4>
            <div>
              <p>
                Lorem ipsum dolor sit amet consec tetur adipisicing elit, sed
                do eiusmod tempor incididunt labore. Lorem ipsum dolor sit
                amet consec tetur adipisicing elit, sed do eiusmod tempor
                incididunt labore.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Feature Area ================= -->

  <!-- ================ Start Testimonials Area ================= -->
  <section class="testimonials-area section-gap">
    <div class="container">
      <div class="testi-slider owl-carousel" data-slider-id="1">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="item">
              <div class="testi-item">
                <img src="{{url('image/beranda/quote.png')}}" alt="" />
                <div class="mt-40 text">
                  <p>
                    As conscious traveling Paup ers we must always be oncerned
                    about our dear Mother Earth. If you think about it, you
                    travel across her face and She is the host to your
                    journey.
                  </p>
                </div>
                <h4>Fanny Spencer</h4>
                <p>Chief Executive, Amazon</p>
              </div>
            </div>
          </div>

          <div class="offset-lg-1 col-lg-6">
            <img src="{{url('image/beranda/testimonial/t1.jpg')}}" alt="" />
          </div>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="item">
              <div class="testi-item">
                <img src="{{url('image/beranda/quote.png')}}" alt="" />
                <div class="mt-40 text">
                  <p>
                    As conscious traveling Paup ers we must always be oncerned
                    about our dear Mother Earth. If you think about it, you
                    travel across her face <br />
                    and She is the host to your journey.
                  </p>
                </div>
                <h4>Fanny Spencer</h4>
                <p>Chief Executive, Amazon</p>
              </div>
            </div>
          </div>

          <div class="offset-lg-1 col-lg-6">
            <img src="{{url('image/beranda/testimonial/t1.jpg')}}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ================ End Testimonials Area ================= -->

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="footer-bottom row align-items-center">
				<p class="footer-text m-0 col-lg-8 col-md-12">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->

  <script src="{{url('assets/vendor/jquery-2.2.4.min.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
    crossorigin="anonymous"></script>
  <script src="{url('assets/vendor/bootstrap.min.js')}}"></script>
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  <script src="{{url('assets/js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{url('assets/js/parallax.min.js')}}"></script>
  <script src="{{url('assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.sticky.js')}}"></script>
  <script src="{{url('assets/js/hexagons.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.counterup.min.js')}}"></script>
  <script src="{{url('assets/js/waypoints.min.js')}}"></script>
  <script src="{{url('assets/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{url('assets/js/main.js')}}"></script>
  <script src="{{url('assets/js/all.js')}}"></script>
</body>

</html>