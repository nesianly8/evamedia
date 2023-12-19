@extends('layouts.app-evamedia-frontend')
<?php
$baseurl = 'https://dev.goodeva.co.id/';
?>

@section('title', 'Home')

@section('css-before')

@stop
@section('css-after')

<style>
  .modal-content {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
  }
  .modal-fullscreen {
      width: 100vw;
      max-width: none;
      height: 80% !important;
      margin: 70px 0px 0px 0px !important;
  }
  .modal {
      --bs-modal-margin: 2.20rem;
      --bs-modal-box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
  }
  .modal {
      --bs-modal-zindex: 1055;
      --bs-modal-width: 500px;
      --bs-modal-padding: 2rem;
      --bs-modal-margin: 0.5rem;
      --bs-modal-color: ;
      --bs-modal-bg: #fff;
      --bs-modal-border-color: var(--bs-border-color-translucent);
      --bs-modal-border-width: 1px;
      --bs-modal-border-radius: 0.5rem;
      --bs-modal-box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
      --bs-modal-inner-border-radius: calc(0.5rem - 1px);
      --bs-modal-header-padding-x: 2rem;
      --bs-modal-header-padding-y: 2rem;
      --bs-modal-header-padding: 2rem 2rem;
      --bs-modal-header-border-color: var(--bs-border-color);
      --bs-modal-header-border-width: 1px;
      --bs-modal-title-line-height: 1.5;
      --bs-modal-footer-gap: 0.5rem;
      --bs-modal-footer-bg: ;
      --bs-modal-footer-border-color: var(--bs-border-color);
      --bs-modal-footer-border-width: 1px;
      position: fixed;
      top: 0;
      left: 0;
      z-index: var(--bs-modal-zindex);
      display: none;
      width: 100%;
      height: 100%;
      overflow-x: hidden;
      overflow-y: auto;
      outline: 0;
  }
</style>
@stop


@section('content')
<!--============ HERO  ============-->
<section class="py-5 desktop-show" id="hero">
  <div class="container pt-5">
    <div class="row">
      <div class="col-6 col-lg-6 col-xl-6 d-flex align-items-center">
        <div class="content-text">
          <h1 class="fs-title1">
            EVAMEDIA : YOUR <br>
            DESIGN GRAPHICS <br>
            SOLUTION
          </h1>
          <p class="c-696687">
            Evamedia is a professional and creative graphic <br>
            design partner, providing the best visual <br>
            solution to improve your brand identity.
          </p>
          <div class="btn-hero mt-desk1">
            <a href="#formSendMail" class="btn-coba nav-button-img bg-329FAF p-3 text-white brd-r-desk3">
              CONTACT TODAY
            </a>
          </div>
        </div>
      </div>
      <div class="col-6 col-lg-6 col-xl-6">
        <div class="content-img w-100">
          <img src="{{ $baseurl }}public/evamedia-asset/home/evamedia-img-hero.png" alt="" srcset="" class="w-100">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="py-5 mobile-show" id="heroMob">
  <div class="container pt-5">
    <div class="row">
      <div class="col-12 col-lg-12 col-xl-12">
        <div class="content-img w-100">
          <img src="{{ $baseurl }}public/evamedia-asset/home/evamedia-img-hero.png" alt="" srcset="" class="w-100">
        </div>
      </div>
      <div class="col-12 col-lg-12 col-xl-12 d-flex align-items-center">
        <div class="content-text">
          <h1 class="text-center">
            EVAMEDIA : YOUR DESIGN GRAPHICS SOLUTION
          </h1>
          <p class="c-696687">
            Evamedia is a professional and creative graphic
            design partner, providing the best visual
            solution to improve your brand identity.
          </p>
          <div class="btn-hero mt-desk1">
            <a href="#formSendMail" class="btn-coba nav-button-img bg-329FAF p-3 text-white brd-r-desk3">
              CONTACT TODAY
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--============ end HERO  ============-->


<!--============ service  ============-->
<?php
$baseService = [
  [
    'icon' => 'evamedia-grapich-design-logo.png',
    'title' => '
    Graphic <br>
    Design
    ',
    'description' => '
    We make your design <br>
    project more professional
    ',
  ],
  [
    'icon' => 'evamedia-social-media-handling-logo.png',
    'title' => '
    Social Media <br>
    Handling
    ',
    'description' => '
    We help to handle your <br>
    social media platform
    ',
  ],
  [
    'icon' => 'evamedia-uiux-design-logo.png',
    'title' => 'UI/UX <br>
    Design
    ',
    'description' => '
    Make your UI/UX <br>
    interaction more <br>
    interesting with us
    ',
  ],
  [
    'icon' => 'evamedia-video-editing-logo.png',
    'title' => 'Video <br>
    Editing',
    'description' => '
    We help your video <br>
    become more creative
    ',
  ],
];
?>

<section class="py-5 desktop-show" id="service">
  <div class="container">
    <div class="list-card-service">
      <div class="row">
        @for($i = 0; $i < count($baseService); $i++) <!-- comment -->
          <div class="col-3 col-md-3 col-lg-3">
            <div class="card-item p-3 bg-fff brd-r-card1 box-shadow-card1 h-100">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="icon-service">
                    <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseService[$i]['icon'] }}" alt="" class="w-25">
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="content-text mt-3">
                    <h2 class="fs-title2">
                      <?php echo $baseService[$i]['title'] ?>
                    </h2>
                    <p class="fs-desc1">
                      <?php echo $baseService[$i]['description'] ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endfor
      </div>
    </div>
  </div>
</section>

<section class="py-5 mobile-show" id="service">
  <div class="container">
    <div class="list-card-service">
      <div class="row">
        @for($i = 0; $i < count($baseService); $i++) <!-- comment -->
          <div class="col-12 col-md-12 col-lg-12 mb-3">
            <div class="card-item p-3 bg-fff brd-r-card1 box-shadow-card1 h-100">
              <div class="row">
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="icon-service">
                    <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseService[$i]['icon'] }}" alt="" class="w-25">
                  </div>
                </div>
                <div class="col-12 col-md-12 col-lg-12">
                  <div class="content-text mt-3">
                    <h2 class="fs-title2">
                      <?php echo $baseService[$i]['title'] ?>
                    </h2>
                    <p class="fs-desc1">
                      <?php echo $baseService[$i]['description'] ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endfor
      </div>
    </div>
  </div>
</section>
<!--============ end service  ============-->


<!--============ tools ============-->
<?php
$baseTools = [
  [
    'img' => 'evamedia-leads-product-logo.png',
  ],
  [
    'img' => 'evamedia-leads-vertigo-logo.png',
  ],
  [
    'img' => 'evamedia-leads-proline-logo.png',
  ],
  [
    'img' => 'evamedia-leads-minty-logo.png',
  ],
];
?>

<section class="py-5 desktop-show" id="tools">
  <div class="list-img-tools infinite-slider d-flex w-100" id="list-img-tools" style="white-space: nowrap;">
    <!-- <div class="row"> -->
    <!-- <marquee behavior="scroll" direction="left" scrollamount="" loop="" style=""> -->

    @for($idx = 0; $idx < 3; $idx++) <!-- comment -->
      <!-- <div class="item-tools"> -->
      @for($i = 0; $i < (count($baseTools)); $i++) <!-- comment -->
        <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseTools[$i]['img'] }}" alt="" srcset="" class="w-img1 h-100 px-3">
        <!-- <div class="col-3 col-md-3 col-lg-3">
          </div> -->
      @endfor
        <!-- </div> -->
    @endfor
        <!-- </marquee> -->
  </div>
</section>

<section class="py-5 mobile-show" id="toolsMob">
  <div class="list-img-tools infinite-slider d-flex w-100" id="list-img-tools" style="white-space: nowrap;">
    <!-- <div class="row"> -->
    <!-- <marquee behavior="scroll" direction="left" scrollamount="" loop="" style=""> -->

    @for($idx = 0; $idx < 3; $idx++) <!-- comment -->
      <!-- <div class="item-tools"> -->
      @for($i = 0; $i < (count($baseTools)); $i++) <!-- comment -->
        <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseTools[$i]['img'] }}" alt="" srcset="" class="w-50 h-100 px-3">
        <!-- <div class="col-3 col-md-3 col-lg-3">
          </div> -->
        @endfor
        <!-- </div> -->
        @endfor
        <!-- </marquee> -->
  </div>
</section>
<!--============ end tools ============-->


<!--============ Service 1 ============-->
<?php
$baseGD = [
  [
    'cover' => 'evamedia-graphic-design-card1.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
    'by' => 'by evamedia digital',
    'cover_modal' => 'evamedia-asset/modal/evamedia-graphic-design-modal1.png',
    'cover_modal2' => 'evamedia-asset/modal/evamedia-graphic-design-modal2.png',
    'text-content-modal' => 'Evamedia is trusted for all your graphic design needs. Our experienced team is determined to provide creative and professional design solutions to help your brand appear more prominent. Starting from a unique logo to interesting marketing material, we are ready to help you create a superior identity. <br>  
    We understand that design is not only a matter of appearance, but also about how your message is delivered. Therefore, we not only focus on visual appearance, but also ensure our design is easy to use and provide good experiences for users. Our goal is simple: creating a design that is not only beautiful, but also useful for the growth of your business.
    Evamedia is the right choice if you are looking for a design team that is always up-to-date with the latest trends. We are committed to providing the best service, by responding to your every needs with creative and innovative solutions. With Evamedia, you can be sure that your graphic design will be done by a team who cares and is ready to give the best for you.',
  ],
  [
    'cover' => 'evamedia-graphic-design-card2.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
    'by' => 'by evamedia digital',
    'cover_modal' => 'evamedia-asset/modal/evamedia-graphic-design-modal1.png',
    'cover_modal2' => 'evamedia-asset/modal/evamedia-graphic-design-modal2.png',
    'text-content-modal' => 'Evamedia is trusted for all your graphic design needs. Our experienced team is determined to provide creative and professional design solutions to help your brand appear more prominent. Starting from a unique logo to interesting marketing material, we are ready to help you create a superior identity. <br>  
    We understand that design is not only a matter of appearance, but also about how your message is delivered. Therefore, we not only focus on visual appearance, but also ensure our design is easy to use and provide good experiences for users. Our goal is simple: creating a design that is not only beautiful, but also useful for the growth of your business.
    Evamedia is the right choice if you are looking for a design team that is always up-to-date with the latest trends. We are committed to providing the best service, by responding to your every needs with creative and innovative solutions. With Evamedia, you can be sure that your graphic design will be done by a team who cares and is ready to give the best for you.',
  ],
  [
    'cover' => 'evamedia-graphic-design-card3.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
    'by' => 'by evamedia digital',
    'cover_modal' => 'evamedia-asset/modal/evamedia-graphic-design-modal1.png',
    'cover_modal2' => 'evamedia-asset/modal/evamedia-graphic-design-modal2.png',
    'text-content-modal' => 'Evamedia is trusted for all your graphic design needs. Our experienced team is determined to provide creative and professional design solutions to help your brand appear more prominent. Starting from a unique logo to interesting marketing material, we are ready to help you create a superior identity. <br>  
    We understand that design is not only a matter of appearance, but also about how your message is delivered. Therefore, we not only focus on visual appearance, but also ensure our design is easy to use and provide good experiences for users. Our goal is simple: creating a design that is not only beautiful, but also useful for the growth of your business.
    Evamedia is the right choice if you are looking for a design team that is always up-to-date with the latest trends. We are committed to providing the best service, by responding to your every needs with creative and innovative solutions. With Evamedia, you can be sure that your graphic design will be done by a team who cares and is ready to give the best for you.',
  ],
  [
    'cover' => 'evamedia-graphic-design-card4.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
    'by' => 'by evamedia digital',
    'cover_modal' => 'evamedia-asset/modal/evamedia-graphic-design-modal1.png',
    'cover_modal2' => 'evamedia-asset/modal/evamedia-graphic-design-modal2.png',
    'text-content-modal' => 'Evamedia is trusted for all your graphic design needs. Our experienced team is determined to provide creative and professional design solutions to help your brand appear more prominent. Starting from a unique logo to interesting marketing material, we are ready to help you create a superior identity. <br>  
    We understand that design is not only a matter of appearance, but also about how your message is delivered. Therefore, we not only focus on visual appearance, but also ensure our design is easy to use and provide good experiences for users. Our goal is simple: creating a design that is not only beautiful, but also useful for the growth of your business.
    Evamedia is the right choice if you are looking for a design team that is always up-to-date with the latest trends. We are committed to providing the best service, by responding to your every needs with creative and innovative solutions. With Evamedia, you can be sure that your graphic design will be done by a team who cares and is ready to give the best for you.',
  ],
];

$baseUIUX = [
  [
    'cover' => 'evamedia-uiux-design-card1.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-uiux-design-card2.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-uiux-design-card3.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-uiux-design-card4.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
];
?>

<section class="py-5 desktop-show" id="service1">
  <div class="container">
    <div class="title-section-text">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12 text-center">
          <h1 class="fs-title1">
            Our Finished Project
          </h1>
          <p class="c-696687 mb-0">
            Explore our project portfolios. <br>
            We are proud to present our work results that reflect the dedication of innovative designs and Proffesional quality
          </p>
        </div>
      </div>
    </div>
    <div class="list-card-service mt-5" id="graphicDesign">
      <div class="title-list mb-4">
        <h3>
          Graphic design
        </h3>
      </div>
      <div class="card-list pb-2 ovr-flow-x-auto">
        <div class="d-flex">

          <!-- <div class="row"> -->
         {{-- @for($index = 0; $index < 5; $index++) <!-- comment --> --}}
          @for($idx = 0; $idx < count($baseGD); $idx++) <!-- comment -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- <div class="card-item w-25 px-3"> -->
              <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal{{$idx}}">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="cover-card">
                      <div class="img-cover">
                        <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseGD[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                      </div>
                    </div>
                    <!-- <div class="text-cover "> -->
                    <!-- <p> -->
                    {{--<?php echo $baseGD[$idx]['title'] ?>--}}
                    <!-- </p> -->
                    <!-- </div> -->
                  </div>
                  <div class="content-card d-flex justify-content-between mt-2">
                    <div class="creator-content">
                      <p class="fs-desc1 mb-0">
                        <span class="c-696687">by</span> <span class="fw-700">{{ $baseGD[$idx]['created_by'] }}</span>
                      </p>
                    </div>
                    <div class="date-content">
                      <p class="fs-desc1 mb-0">
                        {{ $baseGD[$idx]['date_publish'] }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endfor
            {{-- @endfor --}}
        </div>
        <!-- </div> -->
      </div>
    </div> 

    <div class="list-card-service mt-5" id="uiuxDesign">
      <div class="title-list mb-4">
        <h3>
          UI/UX Design
        </h3>
      </div>
      <div class="card-list pb-2 ovr-flow-x-auto">
        <div class="d-flex">

          <!-- <div class="row"> -->
          {{-- @for($index = 0; $index < 5; $index++) <!-- comment --> --}}
          @for($idx = 0; $idx < count($baseUIUX); $idx++) <!-- comment -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- <div class="card-item w-25 px-3"> -->
              <div class="card-item px-3">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="cover-card">
                      <div class="img-cover">
                        <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseUIUX[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                      </div>
                      <!-- <div class="text-cover"> -->
                      <!-- <p> -->
                      {{-- <?php echo $baseUIUX[$idx]['title'] ?> --}}
                      <!-- </p> -->
                      <!-- </div> -->
                    </div>
                  </div>
                  <div class="content-card d-flex justify-content-between mt-2">
                    <div class="creator-content">
                      <p class="fs-desc1 mb-0">
                        <span class="c-696687">by</span> <span class="fw-700">{{ $baseUIUX[$idx]['created_by'] }}</span>
                      </p>
                    </div>
                    <div class="date-content">
                      <p class="fs-desc1 mb-0">
                        {{ $baseUIUX[$idx]['date_publish'] }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endfor
            {{-- @endfor --}}
        </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
</section>


<section class="py-5 mobile-show" id="service1Mob">
  <div class="container">
    <div class="title-section-text">
      <div class="row">
        <div class="col-12 col-md-12 col-lg-12 text-center">
          <h1 class="">
            Our Finished Project
          </h1>
          <p class="c-696687 mb-0">
            Explore our project portfolios. <br>
            We are proud to present our work results that reflect the dedication of innovative designs and Proffesional quality
          </p>
        </div>
      </div>
    </div>
    <div class="list-card-service mt-5" id="graphicDesign">
      <div class="title-list mb-4">
        <h3>
          Graphic design
        </h3>
      </div>
      <div class="card-list pb-2 ">
        <div class="d-flex">

          <div class="row">
            {{-- @for($index = 0; $index < 5; $index++) <!-- comment --> --}}
            @for($idx = 0; $idx < count($baseGD); $idx++) <!-- comment -->
              <div class="col-12 col-md-12 col-lg-12 mb-3">
                <!-- <div class="card-item w-25 px-3"> -->
                <div class="card-item px-3">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                      <div class="cover-card">
                        <div class="img-cover">
                          <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseGD[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                        </div>
                      </div>
                      <!-- <div class="text-cover "> -->
                      <!-- <p> -->
                      {{--<?php echo $baseGD[$idx]['title'] ?>--}}
                      <!-- </p> -->
                      <!-- </div> -->
                    </div>
                    <div class="content-card d-flex justify-content-between mt-2">
                      <div class="creator-content">
                        <p class="fs-desc1 mb-0">
                          <span class="c-696687">by</span> <span class="fw-700">{{ $baseGD[$idx]['created_by'] }}</span>
                        </p>
                      </div>
                      <div class="date-content">
                        <p class="fs-desc1 mb-0">
                          {{ $baseGD[$idx]['date_publish'] }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endfor
              {{-- @endfor --}}
          </div>
        </div>
      </div>
    </div>

    <div class="list-card-service mt-5" id="uiuxDesign">
      <div class="title-list mb-4">
        <h3>
          UI/UX Design
        </h3>
      </div>
      <div class="card-list pb-2 ">
        <div class="d-flex">

          <div class="row">
            {{-- @for($index = 0; $index < 5; $index++) <!-- comment --> --}}
            @for($idx = 0; $idx < count($baseUIUX); $idx++) <!-- comment -->
              <div class="col-12 col-md-12 col-lg-12 mb-3">
                <!-- <div class="card-item w-25 px-3"> -->
                <div class="card-item px-3">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                      <div class="cover-card">
                        <div class="img-cover">
                          <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseUIUX[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                        </div>
                        <!-- <div class="text-cover"> -->
                        <!-- <p> -->
                        {{-- <?php echo $baseUIUX[$idx]['title'] ?> --}}
                        <!-- </p> -->
                        <!-- </div> -->
                      </div>
                    </div>
                    <div class="content-card d-flex justify-content-between mt-2">
                      <div class="creator-content">
                        <p class="fs-desc1 mb-0">
                          <span class="c-696687">by</span> <span class="fw-700">{{ $baseUIUX[$idx]['created_by'] }}</span>
                        </p>
                      </div>
                      <div class="date-content">
                        <p class="fs-desc1 mb-0">
                          {{ $baseUIUX[$idx]['date_publish'] }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endfor
              {{-- @endfor --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--============ end service 1  ============-->


<!--============ separate content  ============-->
<section class="py-0 bg-separate-section desktop-show" id="separateContent">
  <div class="content-text pos-absolute d-flex justify-content-center w-100 pt-desk1">
    <h1 class="text-center text-white fw-800 fs-title3 w-100 infinite-rtl-slider">
      Content Marketing Search Engine
    </h1>
  </div>
  <div class="content-separator d-flex justify-content-center align-items-end pos-relative z-index-2">
    <img src="{{ $baseurl }}public/evamedia-asset/home/evamedia-agancy-girl.png" alt="" srcset="" class="w-75">

    <h1 class="pos-absolute text-center text-white fw-800 fs-title3 pb-desk1 w-100 infinite-ltr-slider">
      Optimization Social Media
    </h1>
  </div>
  </div>
</section>

<section class="py-0 bg-separate-section mobile-show" id="separateContentMob">
  <div class="content-text pos-absolute d-flex justify-content-center w-100 pt-desk1">
    <h1 class="text-center text-white fw-800 w-100 infinite-rtl-slider">
      Content Marketing Search Engine
    </h1>
  </div>
  <div class="content-separator d-flex justify-content-center align-items-end pos-relative z-index-2">
    <img src="{{ $baseurl }}public/evamedia-asset/home/evamedia-agancy-girl.png" alt="" srcset="" class="w-75">

    <h1 class="pos-absolute text-center text-white fw-800 pb-desk1 w-100 infinite-ltr-slider">
      Optimization Social Media
    </h1>
  </div>
  </div>
</section>
<!--============ end separate content  ============-->


<!--============ Service 2 ============-->
<?php
$baseVE = [
  [
    'cover' => 'evamedia-video-editing-card1.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-video-editing-card2.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-video-editing-card3.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-video-editing-card4.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
];

$baseSMH = [
  [
    'cover' => 'evamedia-social-media-card1.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-social-media-card2.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-social-media-card3.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
  [
    'cover' => 'evamedia-social-media-card4.png',
    'title' => 'Interior Feeds Instagram Design',
    'created_by' => 'evamedia digital',
    'date_publish' => '23/Dec/2023',
  ],
];
?>

<section class="py-5 desktop-show" id="service2">
  <div class="container">
    <div class="list-card-service" id="videoEditing">
      <div class="title-list mb-4">
        <h3>
          Video Editing
        </h3>
      </div>
      <div class="card-list pb-2 ovr-flow-x-auto">
        <div class="d-flex">

          <!-- <div class="row"> -->
          {{-- @for($index = 0; $index < 5; $index++) <!-- comment --> --}}
          @for($idx = 0; $idx < count($baseVE); $idx++) <!-- comment -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- <div class="card-item w-25 px-3"> -->
              <div class="card-item px-3">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="cover-card">
                      <div class="img-cover">
                        <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseVE[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                      </div>
                    </div>
                    <!-- <div class="text-cover "> -->
                    <!-- <p> -->
                    {{--<?php echo $baseVE[$idx]['title'] ?>--}}
                    <!-- </p> -->
                    <!-- </div> -->
                  </div>
                  <div class="content-card d-flex justify-content-between mt-2">
                    <div class="creator-content">
                      <p class="fs-desc1 mb-0">
                        <span class="c-696687">by</span> <span class="fw-700">{{ $baseVE[$idx]['created_by'] }}</span>
                      </p>
                    </div>
                    <div class="date-content">
                      <p class="fs-desc1 mb-0">
                        {{ $baseVE[$idx]['date_publish'] }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endfor
            {{-- @endfor --}}
        </div>
        <!-- </div> -->
      </div>
    </div>

    <div class="list-card-service mt-5" id="socialMedia">
      <div class="title-list mb-4">
        <h3>
          Social Media Handling
        </h3>
      </div>
      <div class="card-list pb-2 ovr-flow-x-auto">
        <div class="d-flex">

          <!-- <div class="row"> -->
          {{--@for($index = 0; $index < 5; $index++) <!-- comment -->--}}
          @for($idx = 0; $idx < count($baseSMH); $idx++) <!-- comment -->
            <div class="col-3 col-md-3 col-lg-3">
              <!-- <div class="card-item w-25 px-3"> -->
              <div class="card-item px-3">
                <div class="row">
                  <div class="col-12 col-md-12 col-lg-12">
                    <div class="cover-card">
                      <div class="img-cover">
                        <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseSMH[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                      </div>
                      <!-- <div class="text-cover"> -->
                      <!-- <p> -->
                      {{-- <?php echo $baseSMH[$idx]['title'] ?> --}}
                      <!-- </p> -->
                      <!-- </div> -->
                    </div>
                  </div>
                  <div class="content-card d-flex justify-content-between mt-2">
                    <div class="creator-content">
                      <p class="fs-desc1 mb-0">
                        <span class="c-696687">by</span> <span class="fw-700">{{ $baseSMH[$idx]['created_by'] }}</span>
                      </p>
                    </div>
                    <div class="date-content">
                      <p class="fs-desc1 mb-0">
                        {{ $baseSMH[$idx]['date_publish'] }}
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endfor
            {{-- @endfor --}}
        </div>
        <!-- </div> -->
      </div>
    </div>
  </div>
</section>


<section class="py-5 mobile-show" id="service2Mob">
  <div class="container">
    <div class="list-card-service" id="videoEditing">
      <div class="title-list mb-4">
        <h3>
          Video Editing
        </h3>
      </div>
      <div class="card-list pb-2 ">
        <div class="d-flex">

          <div class="row">
            {{-- @for($index = 0; $index < 5; $index++) <!-- comment --> --}}
            @for($idx = 0; $idx < count($baseVE); $idx++) <!-- comment -->
              <div class="col-12 col-md-12 col-lg-12 mb-3">
                <!-- <div class="card-item w-25 px-3"> -->
                <div class="card-item px-3">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                      <div class="cover-card">
                        <div class="img-cover">
                          <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseVE[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                        </div>
                      </div>
                      <!-- <div class="text-cover "> -->
                      <!-- <p> -->
                      {{--<?php echo $baseVE[$idx]['title'] ?>--}}
                      <!-- </p> -->
                      <!-- </div> -->
                    </div>
                    <div class="content-card d-flex justify-content-between mt-2">
                      <div class="creator-content">
                        <p class="fs-desc1 mb-0">
                          <span class="c-696687">by</span> <span class="fw-700">{{ $baseVE[$idx]['created_by'] }}</span>
                        </p>
                      </div>
                      <div class="date-content">
                        <p class="fs-desc1 mb-0">
                          {{ $baseVE[$idx]['date_publish'] }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endfor
              {{-- @endfor --}}
          </div>
        </div>
      </div>
    </div>

    <div class="list-card-service mt-5" id="socialMedia">
      <div class="title-list mb-4">
        <h3>
          Social Media Handling
        </h3>
      </div>
      <div class="card-list pb-2 ">
        <div class="d-flex">

          <div class="row">
            {{--@for($index = 0; $index < 5; $index++) <!-- comment -->--}}
            @for($idx = 0; $idx < count($baseSMH); $idx++) <!-- comment -->
              <div class="col-12 col-md-12 col-lg-12 mb-3">
                <!-- <div class="card-item w-25 px-3"> -->
                <div class="card-item px-3">
                  <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                      <div class="cover-card">
                        <div class="img-cover">
                          <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseSMH[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                        </div>
                        <!-- <div class="text-cover"> -->
                        <!-- <p> -->
                        {{-- <?php echo $baseSMH[$idx]['title'] ?> --}}
                        <!-- </p> -->
                        <!-- </div> -->
                      </div>
                    </div>
                    <div class="content-card d-flex justify-content-between mt-2">
                      <div class="creator-content">
                        <p class="fs-desc1 mb-0">
                          <span class="c-696687">by</span> <span class="fw-700">{{ $baseSMH[$idx]['created_by'] }}</span>
                        </p>
                      </div>
                      <div class="date-content">
                        <p class="fs-desc1 mb-0">
                          {{ $baseSMH[$idx]['date_publish'] }}
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endfor
              {{-- @endfor --}}
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--============ end service 2 ============-->


<!--============ Form ============-->
<section class="py-5 bg-form-img desktop-show" id="formSendMail" style="">
  <div class="container pb-5">
    <div class="row">
      <div class="col-6 col-md-6 col-lg-6">
        <div class="title-content">
          <div class="row">
            <div class="col-6 col-md-6 col-lg-6">
              <div class="content-image ">
                <img src="{{ $baseurl }}public/evamedia-asset/home/evamedia-img-form.png" alt="" class="w-100">
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-6 d-flex align-items-end">
              <div class="content-text pos-relative pos-relative-property">
                <!-- <h3> -->
                <!-- GET YOUR DISCOUNT <br> -->
                <!-- UP TO 250K <br> -->
                <!-- OR <br> -->
                <!-- OUR FREE TRIAL DESIGN <br> -->
                <!-- FOR YOUR PROJECT -->
                <!-- </h3> -->
                <h3 class="w-desk2">
                  Get Discount or <br>
                  Our free trial design now
                </h3>
                <hr class="" style="width: 10%;">
                <p class="mb-0">
                  Contact Us Now <br>
                  <span class="fw-700 fs-title2">0881-8850-663</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-6 col-lg-6 d-flex align-items-center">
        <form action="#" method="post" class="form">
          <div class="row">
            <div class="col-6 col-md-6 col-lg-6">
              <!-- <input type="text" name="name" id="" placeholder="   Your Name*" class="w-100" required> -->
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control input-form-transparent" id="floatingInput" placeholder="" required>
                <label class="c-696687" for="floatingInput">Your Name*</label>
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-6">
              <!-- <input type="email" name="email" id="" placeholder="Email*" class="w-100" required> -->
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control input-form-transparent" id="floatingInput" placeholder="" required>
                <label class="c-696687" for="floatingInput">Email*</label>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
              <!-- <input type="tel" name="phone" id="" placeholder="Phone" class="w-100"> -->
              <div class="form-floating mb-3">
                <input type="tel" name="telp" class="form-control input-form-transparent" id="floatingInput" placeholder="">
                <label class="c-696687" for="floatingInput">Phone</label>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
              <button type="submit" class="px-3 py-2 brd-r-desk3 fw-400 bg-transparent brd-button1">
                Apply Now
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<section class="py-5 bg-form-img mobile-show" id="formSendMailMob" style="">
  <div class="container pb-5">
    <div class="row">
      <div class="col-12 col-md-12 col-lg-12">
        <div class="title-content">
          <div class="row">
            <div class="col-6 col-md-6 col-lg-6">
              <div class="content-image ">
                <img src="{{ $baseurl }}public/evamedia-asset/home/evamedia-img-form.png" alt="" class="w-100">
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-6 d-flex align-items-end">
              <div class="content-text pos-relative pos-relative-property">
                <!-- <h3> -->
                <!-- GET YOUR DISCOUNT <br> -->
                <!-- UP TO 250K <br> -->
                <!-- OR <br> -->
                <!-- OUR FREE TRIAL DESIGN <br> -->
                <!-- FOR YOUR PROJECT -->
                <!-- </h3> -->
                <h3 class="">
                  Get Discount or <br>
                  Our free trial design now
                </h3>
                <hr class="" style="width: 10%;">
                <p class="mb-0">
                  Contact Us Now <br>
                  <span class="fw-700 ">0881-8850-663</span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-12 col-lg-12 d-flex align-items-center">
        <form action="#" method="post" class="form">
          <div class="row">
            <div class="col-6 col-md-6 col-lg-6">
              <!-- <input type="text" name="name" id="" placeholder="   Your Name*" class="w-100" required> -->
              <div class="form-floating mb-3">
                <input type="text" name="name" class="form-control input-form-transparent" id="floatingInput" placeholder="" required>
                <label class="c-696687" for="floatingInput">Your Name*</label>
              </div>
            </div>
            <div class="col-6 col-md-6 col-lg-6">
              <!-- <input type="email" name="email" id="" placeholder="Email*" class="w-100" required> -->
              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control input-form-transparent" id="floatingInput" placeholder="" required>
                <label class="c-696687" for="floatingInput">Email*</label>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
              <!-- <input type="tel" name="phone" id="" placeholder="Phone" class="w-100"> -->
              <div class="form-floating mb-3">
                <input type="tel" name="telp" class="form-control input-form-transparent" id="floatingInput" placeholder="">
                <label class="c-696687" for="floatingInput">Phone</label>
              </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12">
              <button type="submit" class="px-3 py-2 brd-r-desk3 fw-400 bg-transparent brd-button1">
                Apply Now
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<!--============ end Form ============-->


<!--============ Modal ============-->

<!-- Modal for Graphic Design -->
@foreach ($baseGD as $idx => $item)
<section class="py-5 bg-form-img desktop-show" id="formSendMailMob" style="">
  <div class="modal fade" id="myModal{{$idx}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="modalLabel{{$idx}}" aria-hidden="true" style="overflow: hidden !important;">
    <div class="modal-dialog modal-dialog-centered modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header">
          <img class="logo mx-0 align-content-center" src="{{ $baseurl }}public/evamedia-asset/header-and-footer/evamedia-logo.png" alt="">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="mb-5 pb-5" style="overflow: auto;">
          <div class="modal-body">
            <img src="{{ asset(''.$baseGD[$idx]['cover_modal']) }}" alt="" class="w-100">
            <div class="content-details pt-4 pb-4">
              <p class="modal-title fs-6 bold" id="modalLabel{{$idx}}">{{ $item['by'] }}</p>
              <h1 class="modal-title fs-2 bold" id="modalLabel{{$idx}}">{{ $item['title'] }}</h1>
              <hr>
              <p class="modal-title fs-5 bold" id="modalLabel{{$idx}}"><?php echo $item['text-content-modal'] ?></p>
            </div>
          </div>
          <div class="modal-body pt-4 pb-4" style="background: #FBFBFB;">
            <div class="row">
              <div class="col-6 col-lg-6 col-xl-6 d-flex align-items-center">
                <div class="content-text">
                  <h1 class="fs-title-modal2">
                    PART OF OUR CLIENT
                  </h1>
                  <p class="c-696687">
                    More than 3 years of high quality and dedicated service for digital marketing agency
                  </p>
                   <div class="row">
                    <div class="col-12 col-lg-12 col-xl-12 d-flex align-items-left">
                      <div class="btn-hero mt-desk1 mr-desk1">
                        <a href="#formSendMail" class="btn-coba nav-button-img bg-fff p-3 text-black brd-r-desk3" style="border: 1px solid #000;">
                          CONTACT AUTHOR
                        </a>
                      </div>
                      <div class="btn-hero mt-desk1 mr-desk1">
                        <a href="#formSendMail" class="btn-coba nav-button-img bg-329FAF p-3 text-white brd-r-desk3">
                          TRY DEMO’S
                        </a>
                      </div>
                    </div>
                   </div>
                </div>
              </div>
              <div class="col-6 col-lg-6 col-xl-6">
                <div class="content-img w-100">
                  <img src="{{ asset(''.$baseGD[$idx]['cover_modal2']) }}" alt="" srcset="" class="w-100">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-body pt-4 pb-4">
            <div class="list-card-service mt-5" id="graphicDesign">
              <div class="title-list mb-4">
                <h3>
                  MORE ABOUT GRAPHIC DESIGN
                </h3>
              </div>
              <div class="card-list pb-2 ovr-flow-x-auto">
                <div class="d-flex">
                  <!-- <div class="row"> -->
                  {{-- @for($index = 0; $index < 5; $index++) <!-- comment --> --}}
                  @for($idx = 0; $idx < count($baseGD); $idx++) <!-- comment -->
                    <div class="col-3 col-md-3 col-lg-3">
                      <!-- <div class="card-item w-25 px-3"> -->
                      <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal{{$idx}}">
                        <div class="row">
                          <div class="col-12 col-md-12 col-lg-12">
                            <div class="cover-card">
                              <div class="img-cover">
                                <img src="{{ $baseurl }}public/evamedia-asset/home/{{ $baseGD[$idx]['cover'] }}" alt="" srcset="" class="w-100">
                              </div>
                            </div>
                            <!-- <div class="text-cover "> -->
                            <!-- <p> -->
                            {{--<?php echo $baseGD[$idx]['title'] ?>--}}
                            <!-- </p> -->
                            <!-- </div> -->
                          </div>
                          <div class="content-card d-flex justify-content-between mt-2">
                            <div class="creator-content">
                              <p class="fs-desc1 mb-0">
                                <span class="c-696687">by</span> <span class="fw-700">{{ $baseGD[$idx]['created_by'] }}</span>
                              </p>
                            </div>
                            <div class="date-content">
                              <p class="fs-desc1 mb-0">
                                {{ $baseGD[$idx]['date_publish'] }}
                              </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  @endfor
                  {{-- @endfor --}}
                  <!-- </div> -->
                </div>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach






<!--============ end Modal ============-->
@stop


@section('js-before')
@stop
@section('js-after')

<script>
  // const movingImage = document.getElementById("list-img-tools");
  // const speed = 2;
  // const updateInterval = 16;

  // function moveImage() {
  //   const screenWidth = window.innerWidth;

  //   setInterval(() => {
  //     const currentLeft = parseInt(movingImage.style.left) || 0;

  //     if (currentLeft >= screenWidth) {
  //       movingImage.style.left = -$ {movingImage.width}px;
  //     } else {
  //       movingImage.style.left = $ {currentLeft + speed}px;
  //     }
  //   }, updateInterval);
  // }

  // moveImage();

  // let x = 1;
  // let bgImage = document.getElementById('landscape');

  // function move() {
  //   x++;
  //   bgImage.style.backgroundPositionX = x + "px";
  // }

  // setInterval(move, 50);
</script>
<!-- JavaScript to handle modal -->
<script>
document.addEventListener('DOMContentLoaded', function () {
  // Select all elements with class "open-modal"
  const openModalButtons = document.querySelectorAll('.open-modal');

  // Attach click event listener to each button
  openModalButtons.forEach(function (button) {
    button.addEventListener('click', function () {
      // Extract the target modal ID from the button's data-target attribute
      const targetModalId = button.getAttribute('data-target');

      // Show the modal with the corresponding ID
      const targetModal = new bootstrap.Modal(document.querySelector(targetModalId));
      targetModal.show();
    });
  });
});
</script>
@stop