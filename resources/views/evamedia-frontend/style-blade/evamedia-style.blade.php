<?php
$baseurl = 'https://dev.goodeva.co.id/';
?>
<style>
  div,
  p,

  h1,

  h2,

  h3,

  h4,

  h5,

  h6,

  b,
  a,
  strong,
  button,
  input {
    /* font-family: 'Nunito', sans-serif !important; */
    font-family: 'Inter', sans-serif;
  }

  .mobile-show {
    display: none !important;
  }

  .desktop-show {
    display: block !important;
  }

  .bg-hero {
    background: linear-gradient(180deg, #EDF2FE 0%, rgba(217, 217, 217, 0.00) 110.02%) !important;
  }

  .bg-separate-section {
    background: linear-gradient(180deg, #249AA7 10%, #218D99 80%);
  }

  .bg-form-gradient {
    background: radial-gradient(794.16% 81.91% at 14.58% 20.13%, #FFFEFA 0%, #EAF9FF 100%);
  }

  .bg-form-img {
    background-image: url('public/evamedia-asset/home/evamedia-bg-background-form-lp.png');
    background-size: cover;
  }

  .bg-fff {
    background: #fff;
  }

  .bg-transparent {
    background: transparent !important;
  }

  .c-1E3060 {
    color: #1E3060 !important;
  }

  .c-696687 {
    color: #696687 !important;
  }

  .bg-1E3060 {
    background-color: #1E3060 !important;
  }

  .bg-329FAF {
    background-color: #329FAF !important;
  }

  .footer {
    background: #FBFBFB !important;
    color: #000 !important;
  }

  .navbar a,
  .navbar a:focus {
    font-family: var(--font-primary);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0px 10px 0px;
    font-size: 15px;
    font-weight: 400;
    color: #0F110F;
    white-space: nowrap;
    transition: 0.3s;
  }

  .navbar a:hover,
  .navbar .active,
  .navbar .active:focus,
  .navbar li:hover>a {
    color: #0F110F;
  }

  .nav-button-img {
    width: 130px;
  }

  .logo {
    width: 130px;
    max-height: 130px !important;
  }


  .btn-header {

    width: 150px;

    height: 40px;

    border: none;

    color: #0e1d34;

    font-weight: 600px;

    border-radius: 5px;

  }



  .text-about {

    text-align: justify
  }



  .img-about {

    width: 500px;

    margin-top: 40px;

  }

  .sct-blue {

    background: #F9FBFF;

  }



  .btn-navbar {

    width: 227px;
    height: 45px;
    background: #F1953F;
    border-radius: 10px;
    border: none;
    margin-left: 100px;
    margin-top: -15px;

  }


  .text-navbar {

    margin-left: -88px;
    margin-top: -20px;
    font-size: 21px;
    color: #1F3A77;


  }

  .service-details img {
    width: 152px;
    height: 41px;
    /* margin-right: -80px; */
  }

  .btn-coba img {
    width: 129px;
    height: 41px;
    /* margin-right: -80px; */
  }

  .img-who {

    width: 351px;

    height: 364px;

    margin-left: 90px;

  }

  .img-phone {

    width: 380px;

    height: 530px;

  }



  .section-blue {

    background: #EBF1FF;

  }



  .img-clien {

    width: 151px;

    height: 178px;

    margin-left: 240px;

    margin-right: -500px;

  }

  .footer {
    padding: 50px 0 0px !important;
  }

  .footer-describe .footer-logo {

    width: 200px !important;

    height: auto !important;
    margin: 0px 0px 0px;

  }

  .footer .footer-describe p {
    font-size: 17px !important;
    font-family: 'Nunito', sans-serif !important;
  }

  .footer-describe {

    /* padding: 0px 150px 0px 0px; */
  }

  .footer h4 {
    font-size: 12px !important;
    padding-bottom: 0px !important;
    margin-bottom: 0px !important;
  }


  .btn-nav {

    width: 200px;
    height: 40px;
    border: none;
    border-radius: 10px;
    background-color: #F1953F;
  }

  .text-nav {

    font-size: 17px;
    margin-top: 9px;
    color: #1F3A77;

  }

  .footer-info p a i {

    font-size: 20px;
    color: #fff;
    margin: 7px;
  }

  .btn-footer {

    width: 150px;
    height: 50px;
    margin-top: 10px;

  }

  .header.sticked {
    padding: 0px 0 !important;
    background: #fffffff0 !important;
  }

  .header.sticked .navbar ul li {
    /* transition: all 0.5s; */
    padding-top: 15px !important;
    padding-bottom: 15px !important;
  }

  .navbar ul li {
    transition: all 0.5s;
    padding-top: 20px !important;
    padding-bottom: 20px !important;
  }

  <?php
  $renderClass = '';

  if (in_array($request->segment(1), $selectedMenu)) {

    $renderClass = '
        .header.sticked {
          background: #fffffff0 !important;
        }
        ';
  }

  echo $renderClass;
  ?>
  /* render class */


  #header div ul {
    margin: 0px 0px !important;
  }

  .back-to-top {
    position: fixed;
    visibility: visible;
    opacity: 1;
    right: 15px;
    bottom: 15px;
    z-index: 996;
    background: #25d366;
    width: 70px;
    height: 70px;
    border-radius: 100%;
    transition: all 0.4s;
  }

  .back-to-top i {
    font-size: 28px;
    color: #fff;
    line-height: 0;
  }

  .back-to-top:hover {
    background: #25d366;
    color: #fff !important;
  }

  .back-to-top.active {
    visibility: visible;
    opacity: 1;
  }

  .datepicker-dropdown {
    padding: 20px !important;
  }

  #preloader {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 9999;
    overflow: hidden;
    background: #fff;
    display: block;
  }

  #preloader:before {
    content: "";
    position: fixed;
    top: calc(50% - 30px);
    left: calc(50% - 30px);
    border: 6px solid #1977cc;
    border-top-color: #d1e6f9;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    -webkit-animation: animate-preloader 1s linear infinite;
    animation: animate-preloader 1s linear infinite;
  }

  .padding-nav-desk {
    padding: 0px 4vw;
  }

  .px-vw1 {
    padding-left: 5vw !important;
    padding-right: 5vw !important;
  }

  .pr-vw1 {
    padding-right: 1vw !important;
  }

  .pr-vw2 {
    padding-right: 2vw !important;
  }

  .pr-vw3 {
    padding-right: 3vw !important;
  }

  .pr-vw4 {
    padding-right: 5vw !important;
  }

  .pt-desk1 {
    padding-top: 7rem;
  }

  .pb-desk1 {
    padding-bottom: 7rem;
  }

  .minh-vh1 {
    min-height: 1vh;
  }

  .height-prec1 {
    height: 100%;
  }

  .fw-400 {
    font-weight: 400;
  }

  .fw-700 {
    font-weight: 700;
  }

  .fw-800 {
    font-weight: 800;
  }

  .brd-r-desk1 {
    border-radius: 7px;
  }

  .brd-r-desk2 {
    border-radius: 20px;
  }

  .brd-r-desk3 {
    border-radius: 30px;
  }

  .brd-r-card1 {
    border-radius: 40px 0px;
  }

  .brd-button1 {
    border: 1px solid;
  }

  .icon-w-desk1 {
    width: 25px;
  }

  .icon-w-desk2 {
    width: 20px;
    height: 20px;
  }

  .obj-fit-contain {
    object-fit: contain;
  }

  .obj-fit-cover {
    object-fit: cover;
  }

  .mt-desk1 {
    margin-top: 2rem;
  }

  .mr-desk1 {
    margin-right: 1rem;
  }

  .ml-desk1 {
    margin-left: 1rem;
  }

  .footer .footer-info p {
    font-size: 14px !important;
  }

  .pr-desk1 {
    padding-right: 1rem !important;
  }

  .w-desk1 {
    width: 105%;
  }
  
  .w-desk2 {
    width: 130%;
  }

  .w-img1 {
    width: 15% !important;
  }

  .w-mob1 {
    width: 90%;
  }

  .sticky-sidebar {
    position: sticky;
    top: 20vh;
  }

  .w-icon-sidebar1 {
    width: 1.5vw;
  }

  .c-000 {
    color: #000 !important;
  }

  .c-999 {
    color: #999 !important;
  }

  .fw-800 {
    font-weight: 800;
  }

  .fs-sidebar1 {
    font-size: 16px;
  }

  .fs-title1 {
    font-size: 62px;
  }

  .fs-title3 {
    font-size: 89px;
  }

  .fs-title2 {
    font-size: 27px;
  }

  .fs-desc1 {
    font-size: 14px;
  }

  .fs-desc2 {
    font-size: 12px !important;
  }

  .fs-title-modal2 {
    color: #000;
    font-family: Inter;
    font-size: 40px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
  }

  .z-index-2 {
    z-index: 2;
  }

  .brd-sidebar1 {
    border-right: 1px solid rgba(153, 153, 153, 0.54);
  }

  .box-shadow-card1 {
    box-shadow: 8px 8px 43px 0px rgba(8, 50, 79, 0.10);
  }

  .nav-link {
    display: block;
    padding: 0.25rem 3rem !important;
  }

  .pd-tab1 {
    padding: .25rem;
  }

  .ovr-flow-x-auto {
    overflow-x: auto;
  }

  .pos-absolute {
    position: absolute;
  }

  .pos-relative {
    position: relative;
  }

  .pos-relative-property {
    right: 11vw;
    top: 1vh;
  }

  .rigth-desk1 {
    right: 160px;
  }

  .nav-tabs .nav-link.active,
  .nav-tabs .nav-item.show .nav-link {
    color: #fff !important;
    background-color: #1E3168 !important;
    border-color: #e4e7ed !important;
  }

  .infinite-slider {
    animation: 20s moveSlide infinite linear;
  }

  .infinite-rtl-slider {
    animation: 30s moveRtlSlide infinite linear;
  }

  .infinite-ltr-slider {
    animation: 30s moveLtrSlide infinite linear;
  }

  .infinite-slider:hover img {
    animation-play-state: paused;
  }

  .input-form-transparent {
    background: transparent;
    border: 0px solid transparent;
    border-bottom: 1px solid #CED3D9;
    border-radius: 0px;
  }

  .form-control:focus {
    color: #212529;
    background-color: transparent !important;
    border-color: #CED3D9 !important;
    outline: 0;
    box-shadow: 0 0 0 .25rem transparent !important;
  }


  @media screen and (min-width: 1400px) and (max-width: 1470px) {

    .navbar a,
    .navbar a:focus {
      padding: 10px 0px 10px 0px !important;
    }

  }


  @media screen and (min-width: 1800px) and (max-width: 2099px) {
    .pos-relative-property {
      right: 8.5vw;
      top: 1vh;
    }
  }



  /* Zoom 150% */
  @media screen and (min-width: 1000px) and (max-width: 1098px) {}



  /* Zoom 125% */
  @media screen and (min-width: 1098px) and (max-width: 1300px) {

    _::-webkit-full-page-media,
    _:future,
    :root .pos-relative-property {
      right: 12vw;
      top: 3vh;
    }

    .pos-relative-property {
      right: 12vw;
      top: 3vh;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .fs-title3 {
      font-size: 75px;
    }

    .fs-title3 {
      font-size: 75px;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .fs-title1 {
      font-size: 52px;
    }

    .fs-title1 {
      font-size: 52px;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .header.sticked .navbar ul li {
      /* transition: all 0.5s; */
      padding-top: 10px !important;
      padding-bottom: 10px !important;
    }

    .header.sticked .navbar ul li {
      /* transition: all 0.5s; */
      padding-top: 10px !important;
      padding-bottom: 10px !important;
    }

    .header {
      transition: all 0.5s;
      z-index: 997;
      padding: 30px 0;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .header {
      transition: all 0.5s;
      z-index: 997;
      padding: 30px 0;
    }

    .logo {
      width: 130px;
      max-height: 130px !important;
    }

    .navbar a,
    .navbar a:focus {
      font-family: var(--font-primary);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0px 10px 0px;
      font-weight: 400;
      color: #0F110F;
      white-space: nowrap;
      transition: 0.3s;
      font-size: 17px;
    }

    .btn-navbar {

      width: 200px;
      height: 50px;
      margin-left: 50px;
    }

    .service-details img {
      width: 152px;
      height: 41px;
      /* margin-right: -49px !important; */
    }

    .btn-coba img {
      width: 129px;
      height: 41px;
      margin-right: -36px;
    }

    .text-navbar {
      font-size: 17px;
      margin-left: -45px;
      margin-bottom: -4px;
      margin-top: -24px;
      font-weight: 700;
    }
  }


  @media (max-width: 1249px) {

    .navbar ul {
      display: flex;
      list-style: none;
      align-items: center;
    }
  }

  /* Zoom 110% */
  @media screen and (min-width: 1300px) and (max-width: 1410px) {

    _::-webkit-full-page-media,
    _:future,
    :root .pos-relative-property {
      right: 11vw;
      top: 3vh;
    }

    .pos-relative-property {
      right: 11vw;
      top: 3vh;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .fs-title3 {
      font-size: 79px;
    }

    .fs-title3 {
      font-size: 79px;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .fs-title1 {
      font-size: 52px;
    }

    .fs-title1 {
      font-size: 52px;
    }

    .footer .footer-info p {
      font-size: 14px !important;
    }
  }

  /* Zoom 90% */
  @media screen and (min-width: 1556px) {}


  /* tablet mode 1 */
  @media screen and (min-width: 770px) and (max-width: 992px) {

    .fs-md-1 {

      font-size: 35px;
    }

    .omsetku-icon img {
      width: 35% !important;
    }

    .mobile-show {
      display: block !important;
    }

    .desktop-show {
      display: none !important;
    }

    .logo {
      width: 55px;
      max-height: 100px !important;
    }

    .navbar ul {
      position: absolute;
      inset: 0;
      padding: 50px 0 10px 0;
      margin: 0;
      background: rgba(14, 29, 52, 0.9);
      overflow-y: auto;
      transition: 0.3s;
      z-index: 9998;
      margin: 0;
      padding: 0;
    }

    .navbar a,
    .navbar a:focus {
      font-family: var(--font-primary);
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 10px 0 10px 30px;
      font-weight: 400;
      color: #0F110F;
      white-space: nowrap;
      transition: 0.3s;
      font-size: 19px;
    }

    .footer .footer-contact p {
      line-height: 20px;
      opacity: 70%;
      text-align: center;
      font-size: 11px;
    }

    .footer-describe .footer-logo {
      /* width: 75px !important; */
    }

    .footer .footer-describe p {
      text-align: justify;
    }

    .footer-describe {
      padding: 0px 15px;
    }

    .popup {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
      background-color: #fff;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 95%;
      border-radius: 10px;
    }

    .gambar {
      width: 16%;
    }
  }


  /* tablet mode 2 */
  @media screen and (min-width: 499px) and (max-width: 769px) {

    .fs-md-1 {

      font-size: 35px;
    }

    .omsetku-icon img {
      width: 35% !important;
    }

    _::-webkit-full-page-media,
    _:future,
    :root .header.sticked {
      padding: -px 0 !important;
    }

    .header.sticked {
      padding: 7px 0 !important;
    }

    _::-webkit-full-page-media,
    _:future,
    :root #header div ul {
      margin: 5px 0px !important;
    }

    #header div ul {
      margin: 5px 0px !important;
    }

    .popup {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
      background-color: #fff;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 95%;
      border-radius: 10px;
    }
  }


  /*------------------ Media Query Mobile ------------------*/

  /*--- media for set all scale in mobile ---*/
  @media screen and (max-width: 475px) {

    .header.sticked {
      background: #fffffff0 !important;
      padding: 10px 0 !important;
    }

    .mobile-show {
      display: block !important;
    }

    .desktop-show {
      display: none !important;
    }

    .popup {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
      background-color: #fff;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 95%;
      border-radius: 10px;
    }

    .gambar {
      width: 20%;
    }

    .header {
      padding: 10px 0;
      min-height: 5.5vh !important;
      /* height: 11.5vh !important; */
    }

    .back-to-top {
      bottom: 7vh !important;
    }

    .footer-describe .footer-logo {
      width: 200px !important;
    }
  }

  @media screen and (min-width: 459px) and (max-width: 475px) {

    .header {
      transition: all 0.5s;
      z-index: 997;
    }

    .popup {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
      background-color: #fff;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 95%;
      border-radius: 10px;
    }

    button {
      padding: 10px 20px;
    }

    .gambar {
      width: 20%;
    }


    .header {
      padding: 10px 0;
      min-height: 5.5vh !important;
    }
  }

  @media screen and (min-width: 427px) and (max-width: 458px) {

    .mobile-show {
      display: block !important;
    }

    .desktop-show {
      display: none !important;
    }

    .header {
      transition: all 0.5s;
      z-index: 997;
    }

    .header.sticked {
      padding: 10px 0 !important;
    }

    .popup {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .popup-content {
      background-color: #fff;
      margin: 5% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 95%;
      border-radius: 10px;
    }

    button {
      padding: 10px 20px;
    }

    .gambar {
      width: 20%;
    }

    .back-to-top {
      bottom: 7vh !important;
    }

    .header {
      padding: 10px 0;
      min-height: 5.5vh !important;
      height: 11.5vh !important;
    }

    .popup {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }
  }

  /* phone mode 1 */
  @media screen and (min-width: 396px) and (max-width: 426px) {

    .footer-info p a i {
      font-size: 14px;
    }

    .text-nav {

      font-size: 15px !important;
    }


    .footer .footer-info p {
      font-size: 16 px;
    }

    .footer-describe .footer-logo {
      /* width: 75px !important; */
    }

    .footer-describe {
      padding: 0px 15px;
    }
  }

  @media screen and (min-width: 377px) and (max-width: 395px) {

    .text-nav {

      font-size: 15px !important;
    }

    .btn-nav {

      width: 200px !important;
    }

  }

  /* phone mode 2 */
  @media screen and (min-width: 322px) and (max-width: 376px) {}

  /* phone mode 3 */
  @media screen and (max-width: 321px) {

    .footer-info p a i {
      font-size: 14px;
    }

    .text-nav {

      font-size: 15px !important;
    }


    .btn-nav {
      width: 162px;
    }


    .footer .footer-info p {
      font-size: 11px;
    }

    .footer .footer-contact p {
      line-height: 20px;
    }

    .footer-describe {
      padding: 0px 15px;
    }
  }

  /*------------------ End Media Query Mobile ------------------*/

  @-webkit-keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes animate-preloader {
    0% {
      transform: rotate(0deg);
    }

    100% {
      transform: rotate(360deg);
    }
  }

  @keyframes moveSlide {
    from {
      transform: translateX(0);
    }

    to {
      transform: translateX(-75%);
    }
  }

  @keyframes moveRtlSlide {
    from {
      transform: translateX(0%);
    }

    to {
      transform: translateX(-100%);
    }
  }

  @keyframes moveLtrSlide {
    from {
      transform: translateX(-0%);
    }

    to {
      transform: translateX(100%);
    }
  }

  /* width */
  .ovr-flow-x-auto::-webkit-scrollbar {
    width: 3px;
    height: 3px;
  }

  /* Track */
  .ovr-flow-x-auto::-webkit-scrollbar-track {
    background: transparent;
  }

  /* Handle */
  .ovr-flow-x-auto::-webkit-scrollbar-thumb {
    background: #888;
  }

  /* Handle on hover */
  .ovr-flow-x-auto::-webkit-scrollbar-thumb:hover {
    background: #888;
  }
</style>