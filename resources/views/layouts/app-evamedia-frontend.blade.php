<!DOCTYPE html>
<html lang="en">
<?php
$baseurl = 'https://dev.goodeva.co.id/';
?>

@inject('request', 'Illuminate\Http\Request')

<head>

  <title>Evamedia | @yield('title')</title>

  <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


  <?php
  $arr_keywords = [
    'evamedia',
    'evamedia goodeva',
    'goodeva',
    'grapich design',
    'social media handling',
    'ui/ux design',
    'video editing',
  ];
  $meta_keywords = implode(",", $arr_keywords);

  $meta_title = "Evamedia";
  $meta_description = "FORWADING INDONESIAN DIGITAL & CREATIVE";
  ?>

  <meta name="description" content="{{ $meta_description }}">
  <meta name="keywords" content="{{ $meta_keywords }}">
  <meta name="author" content="GOODEVA TECHNOLOGY">
  <meta name="google-site-verification" content="dgs_kEmsV7BacRvNxGDSWZ9k87AvyMi4HSMlRLlYPbM" />



  <!-- Favicons -->
  <link rel="shortcut icon" href="{{ $baseurl }}public/assets/img/">
  <link href="{{ $baseurl }}public/assets/img/" rel="icon">
  <link href="{{ $baseurl }}public/assets/img/" rel="apple-touch-icon">


  <!-- slick js -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


  <!----- Google Fonts ----->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- font nunito -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- font inter -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <!----- end Google Fonts ----->



  <!-- Vendor CSS Files -->
  <link href="{{ $baseurl }}public/evamedia-vendor/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/evamedia-vendor/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/evamedia-vendor/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/evamedia-vendor/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/evamedia-vendor/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{ $baseurl }}public/evamedia-vendor/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ $baseurl }}public/evamedia-style-n-script/css/evamedia-style.css?v=1.0.0" rel="stylesheet">

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-R8YY326R33"></script>
  <script>
    // window.dataLayer = window.dataLayer || [];
    // 
    // function gtag() {
    // dataLayer.push(arguments);
    // }
    // gtag('js', new Date());
    // 
    // gtag('config', 'G-R8YY326R33');
  </script>



  <!-- =======================================================
  * Template Name: Logis - v1.1.0
  * Template URL: https://bootstrapmade.com/logis-bootstrap-logistics-website-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


  @yield('css-before')

  <!----------- for setting base background navbar in selected page ---------->
  <?php
  $selectedMenu = ['contact', 'partnership', 'features', 'privacy'];
  ?>

  @include('evamedia-frontend.style-blade.evamedia-style')


  @yield('css-after')

</head>


<?php
$baseFeatures = [
  [
    'title' => 'Sales Order',
    'kode_module' => 'sales-order',
    'icon' => 'omsetku-accordion-on-transaction.png',
    'icon-off' => 'omsetku-accordion-off-transaction.png',
  ],
  [
    'title' => 'Quotation',
    'kode_module' => 'quotation',
    'icon' => 'omsetku-accordion-on-market-insight2.png',
    'icon-off' => 'omsetku-accordion-off-market-insight.png',
  ],
  [
    'title' => 'Invoice',
    'kode_module' => 'invoice',
    'icon' => 'omsetku-accordion-on-prospect-monitor.png',
    'icon-off' => 'omsetku-accordion-off-prospect-monitor.png',
  ],
  [
    'title' => 'Group Sales',
    'kode_module' => 'group-sales',
    'icon' => 'omsetku-accordion-on-group-sales.png',
    'icon-off' => 'omsetku-accordion-off-group-sales.png',
  ],
  [
    'title' => 'Budgeting',
    'kode_module' => 'budgeting',
    'icon' => 'omsetku-accordion-on-sales-monitoring.png',
    'icon-off' => 'omsetku-accordion-off-sales-monitoring.png',
  ],
  [
    'title' => 'Customer',
    'kode_module' => 'customer',
    'icon' => 'omsetku-accordion-on-dashboard-analytic.png',
    'icon-off' => 'omsetku-accordion-off-dashboard-analytic.png',
  ],
  [
    'title' => 'Komisi',
    'kode_module' => 'komisi',
    'icon' => 'omsetku-accordion-on-sales-automation.png',
    'icon-off' => 'omsetku-accordion-off-sales-automation.png',
  ],
  [
    'title' => 'CRM',
    'kode_module' => 'crm',
    'icon' => 'omsetku-accordion-on-crm2.png',
    'icon-off' => 'omsetku-accordion-off-crm.png',
  ],
  [
    'title' => 'Reimburse',
    'kode_module' => 'reimburse',
    'icon' => 'omsetku-accordion-on-sales-automation.png',
    'icon-off' => 'omsetku-accordion-off-sales-automation.png',
  ],
  [
    'title' => 'Sales Target',
    'kode_module' => 'sales-target',
    'icon' => 'omsetku-accordion-on-sales-monitoring.png',
    'icon-off' => 'omsetku-accordion-off-sales-monitoring.png',
  ],
  [
    'title' => 'Brand',
    'kode_module' => 'brand',
    'icon' => 'omsetku-accordion-on-dashboard-analytic.png',
    'icon-off' => 'omsetku-accordion-off-dashboard-analytic.png',
  ],
  [
    'title' => 'Product',
    'kode_module' => 'product',
    'icon' => 'omsetku-accordion-on-crm2.png',
    'icon-off' => 'omsetku-accordion-off-crm.png',
  ],
  [
    'title' => 'Master Data User',
    'kode_module' => 'master-data-user',
    'icon' => 'omsetku-accordion-on-group-sales.png',
    'icon-off' => 'omsetku-accordion-off-group-sales.png',
  ],
];
?>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top py-0 desktop-show">

    <div class="container d-flex align-items-center justify-content-between ">


      <ul class="px-0">
        <a href="{{ url('evamedia-home') }}" class="logo ">

          <img class="logo mx-0" src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-logo.png" alt="">

        </a>
      </ul>

      <nav id="navbar" class="navbar w-75">

        <ul class="list-menu w-100 d-flex justify-content-between">
          <li name-class="heros">
            <a href="#" class="heros ">Home <i class="fa fa-chevron-down"></i></a>
          </li>
          <li name-class="heros">
            <a href="#uiuxDesign" class="heros ">UI/UX Design <i class="fa fa-chevron-down"></i></a>
          </li>
          <li name-class="heros">
            <a href="#graphicDesign" class="heros ">Graphic Design <i class="fa fa-chevron-down"></i></a>
          </li>
          <li name-class="heros">
            <a href="#videoEditing" class="heros ">Video Editing <i class="fa fa-chevron-down"></i></a>
          </li>
          <li name-class="heros">
            <a href="#socialMedia" class="heros ">Social Media Editing <i class="fa fa-chevron-down"></i></a>
          </li>
          <li class="d-flex">
            <div class="btn-banners" name-class="btn-banner">
              <a href="#formSendMail" class="btn-coba nav-button-img bg-329FAF fs-desc2 p-2 text-white brd-r-desk2 d-flex justify-content-center">
                GET IT TOUCH
              </a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- .navbar -->

    </div>
  </header>
  <!-- End Header -->

  <!--Second button-->


  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top mobile-show">

    <div class="container">

      <div class="row">

        <div class="col-9 col-sm-9 col-md-10">
          <a href="{{ url('evamedia-home') }}">
            <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-logo.png" alt="" class="gambar">
          </a>
        </div>

        <div class="col-3 col-sm-3 col-md-2 d-flex align-items-center justify-content-end">
          <div onclick="openPopup()" class="d-flex justify-content-center">

            <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-hamburger.png" class="w-50" style="">

          </div>
        </div>
      </div>

      <div id="popup" class="popup">
        <div class="popup-content">
          <div class="row d-flex ">
            <div class="col-8 omsetku-icon">
              <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-logo.png" style="width: 70%;">
            </div>

            <div class="col-4 d-flex" style="justify-content: flex-end; align-items: center;">
              <i class="fa-solid fa-xmark fs-md-1" onclick="closePopup()" style="color: #f25058;"></i>
            </div>

          </div>
          <div class="mt-5">
            <div class="mb-4" style="font-size: 18px;">
              <a href="#" style="color: #000;">Home</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="#uiuxDesignMob" style="color: #000;">UI/UX Design</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="#graphicDesignMob" style="color: #000;">Graphic Design</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="#videoEditingMob" style="color: #000;">Video Editing</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="#socialMediaMob" style="color: #000;">Social Media Editing</a>
            </div>
            <div class="mb-4" style="font-size: 18px;">
              <a href="#formSendMail" style="color: #000;">GET IT TOUCH</a>
            </div>
          </div>

        </div>
      </div>
    </div>

  </header>
  <!-- End Header -->



  <!----- Main content ----->

  <main id="main">
    <!----- pengecekan untuk menampilkan sidebar page fitur ----->
    @yield('content')
  </main>

  <!----- End #main ----->


  <!------- footer desktop ------->
  <footer id="footer" class="footer desktop-show">
    <div class="container">
      <div class="row gy-4">
        <div class="col-5 col-lg-5 col-xl-5">
          <div class="row">
            <div class="col-lg-12 footer-describe">
              <a href="#">
                <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-logo.png" alt="" class="footer-logo">
              </a>
              <p>
                Evamedia have much planned for the future, working with <br>
                great clients and continued software development.
              </p>
              <div class="sosmed">
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-twitter.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-facebook.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-google-plus.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-pinterest.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-linkedin.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-7 col-lg-7 col-xl-7 footer-info d-flex justify-content-center align-items-center">
          <div class="row w-desk1">
            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
              <div class="menu-omsetku">
                <h4 class="c-000">
                  <a href="#uiuxDesign" class="c-000">
                    UI/UX DESIGN <i class="fa fa-chevron-right"></i>
                  </a>
                </h4>
              </div>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
              <div class="menu-omsetku">
                <h4 class="c-000">
                  <a href="#grapichDesign" class="c-000">
                    GRAPHIC DESIGN <i class="fa fa-chevron-right"></i>
                  </a>
                </h4>
              </div>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3">
              <div class="menu-omsetku">
                <h4 class="c-000">
                  <a href="#videoEditing" class="c-000">
                    VIDEO EDITING <i class="fa fa-chevron-right"></i>
                  </a>
                </h4>
              </div>
            </div>
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 px-0">
              <div class="menu-omsetku">
                <h4 class="c-000">
                  <a href="#socialMedia" class="c-000">
                    SOCIAL MEDIA HANDLING <i class="fa fa-chevron-right"></i>
                  </a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="separate mt-5" style="color: #848484">
      <div class="bottom-footer">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12 col-lg-12">
            <div class="copyrights text-center">
              <p>
                &copy; {{ date('Y') }} - All Rights Reserved
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!------- end footer desktop ------->


  <!------- footer mobile ------->
  <footer id="footermobile" class="footer mobile-show">
    <div class="container">
      <div class="row gy-4">
        <div class="col-12 col-sm-12 col-md-12">
          <div class="row">
            <div class="col-12 col-sm-12 col-12 footer-describe">
              <a href="#">
                <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-logo.png" alt="" class="footer-logo">
              </a>
              <p>
                Evamedia have much planned for the future, working with
                great clients and continued software development.
              </p>
            </div>
          </div>
        </div>
        <div class="col-12 col-sm-12 col-md-12 footer-info">
          <div class="row">

            <div class="col-12 col-sm-12 col-md-12">
              <div class="menu-omsetku">
                <h4 class="text-white">
                  <a href="#uiuxDesignMob" class="text-white">
                    UI/UX Design
                  </a>
                </h4>
              </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12">
              <div class="menu-omsetku">
                <h4 class="text-white">
                  <a href="#grapichDesignMob" class="text-white">
                    Graphic Design
                  </a>
                </h4>

              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12">
              <div class="menu-omsetku">
                <h4 class="text-white">
                  <a href="#VideoEditingMob" class="text-white">
                    Video Editing
                  </a>
                </h4>
              </div>
            </div>

            <div class="col-12 col-sm-12 col-md-12">
              <div class="menu-omsetku">
                <h4 class="text-white">
                  <a href="#socialMediaMob" class="text-white">
                    Social Media Handling
                  </a>
                </h4>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12 col-sm-12 col-md-12 d-flex align-items-end">
              <div class="sosmed">
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-twitter.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-facebook.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-google-plus.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-pinterest.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
                <a href="#" target="_blank" rel="noopener noreferrer">
                  <img src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-icon-linkedin.png" alt="" srcset="" class="icon-w-desk2 obj-fit-contain mr-desk1">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <hr class="separate" style="color: #fff">
      <div class="bottom-footer">
        <div class="row">
          <div class="col-12 col-sm-12 col-md-12">
            <div class="copyrights text-center">
              <p>
                &copy; {{ date('Y') }} Omsetku | All Rights Reserved
              </p>
            </div>
          </div>

          <!-- <div class="col-6 col-sm-6 col-md-6 d-flex justify-content-end"> -->
          <!-- <div class="sosmed"> -->
          <!-- <a href="https://www.facebook.com/Omsetku-100543845527563/" target="_blank" rel="noopener noreferrer"> -->
          <!-- <img src="{{ $baseurl }}public/omsetku-asset/omsetku-facebook-icon.png" alt="" srcset="" class="icon-w-desk1 mr-desk1"> -->
          <!-- </a> -->
          <!-- <a href="https://www.instagram.com/omsetku/" target="_blank" rel="noopener noreferrer"> -->
          <!-- <img src="{{ $baseurl }}public/omsetku-asset/omsetku-instagram-icon.png" alt="" srcset="" class="icon-w-desk1 mr-desk1"> -->
          <!-- </a> -->
          <!-- <a href="https://www.linkedin.com/company/goodeva-technology/mycompany/" target="_blank" rel="noopener noreferrer"> -->
          <!-- <img src="{{ $baseurl }}public/omsetku-asset/omsetku-linkedin-icon.png" alt="" srcset="" class="icon-w-desk1"> -->
          <!-- </a> -->
          <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
    </div>
  </footer>
  <!------- end footer mobile ------->

  <!-- ======= Footer ======= -->

  <!-- Chat Whatsapp -->
  <!-- <a href="//wa.me/+628818850663" class="back-to-top d-flex align-items-center justify-content-center" target="_blank"><i class="bi bi-whatsapp"></i></a> -->



  @yield('js-before')

  <!-- cdn JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <!-- Vendor JS Files -->
  <script src="{{ $baseurl }}public/evamedia-vendor/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{ $baseurl }}public/evamedia-vendor/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{ $baseurl }}public/evamedia-vendor/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{ $baseurl }}public/evamedia-vendor/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{ $baseurl }}public/evamedia-vendor/vendor/aos/aos.js"></script>
  <script src="{{ $baseurl }}public/evamedia-vendor/vendor/php-email-form/validate.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"></script>


  <!-- Template Main JS File -->
  <script src="{{ $baseurl }}public/evamedia-style-n-script/js/evamedia-script.js"></script>
  @yield('js-after')

  <script>
    $(document).ready(function() {

      // $('.heros').addClass('active');
    });

    var sections = document.querySelectorAll("section.desktop-show");

    var x = window.matchMedia("(max-width: 992px)");
    if (x.matches) {

      var sections = document.querySelectorAll("section.mobile-show");
      // console.log(sections);

      // alert('max-width: 920px');

      $('.list-menu').on('click', 'li', function() {

        $('li a').removeClass('active');

        var attr_class = $(this).attr('name-class');

        $('.' + attr_class).addClass('active');

        var get_section = document.querySelector("section#" + attr_class + ".mobile-show");

        window.scrollTo(0, get_section.offsetTop);
      })
    }

    const navLi = document.querySelectorAll("nav ul li a");

    // console.log(navLi);
    // console.log(sections);

    const selectHeader = document.querySelector('#header.mobile-show');
    if (selectHeader) {
      document.addEventListener('scroll', () => {
        window.scrollY > 100 ? selectHeader.classList.add('sticked') : selectHeader.classList.remove('sticked');
      });
    }


    //------------------ consume slick js
    $('.testimoni-h').slick({

      dots: true,
      infinite: true,
      autoplay: true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,
    });


    $('.testimoni-h-res').slick({

      dots: true,
      infinite: true,
      autoplay: true,
      speed: 1000,
      slidesToShow: 1,
      slidesToScroll: 1,

    });
    //------------------ end consume slick js


    function openPopup() {
      var popup = document.getElementById('popup');
      popup.style.display = 'block';
    }

    function closePopup() {
      var popup = document.getElementById('popup');
      popup.style.display = 'none';
    }

    function moveTab(id) {
      $('.nav-link').removeClass('active');
      $('.tab-pane').removeClass('show');
      $('.tab-pane').removeClass('active');
      $('#' + id + '-tab.nav-link').addClass('active');
      $('#' + id + '.tab-pane').addClass('show');
      $('#' + id + '.tab-pane').addClass('active');
    }
  </script>

</body>

</html>