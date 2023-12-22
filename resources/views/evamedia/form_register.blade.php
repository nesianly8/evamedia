<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gradient Background</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-e4Az61IMhbFQzEFTvysKIDfcgSoB2fUpAg5YpsCI8yvtx1Nl6UOEG2AuwNPgHpR" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 20px;
        }

        .form-container {
            width: 48%; /* Menggunakan nilai kurang dari 50% agar ada ruang antara form */
        }

        .form-container form {
            background: #FFFFFF;
            padding: 60px 50px 50px 50px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: 0vh;
        }
        .btn-pojok {
            display: flex !important;
            flex-wrap: nowrap;
            flex-direction: row;
            justify-content: center;
        }
        .cover-height {
            min-height: 42em;
        }
        .cover-height {
            position: relative;
        }

        .btn-pojok {
            position: absolute;
            bottom: 0;
            right: 0;
            margin: 10px; /* Sesuaikan margin sesuai kebutuhan Anda */
        }

        .form-control {
            display: block;
            width: 100%;
            height: calc(1.428572em + 0.8571428rem + 2px);
            padding: .4285714rem 1rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.428572;
            color: #575757;
            background-color: #FAFAFA !important;
            background-clip: padding-box;
            border-radius: .25rem;
            transition: border-color ease-in-out .15s;
            border-radius: 10px;
            border: 1px solid #EBF0ED !important;
        }

        .form-control:disabled, .form-control[readonly] {
            background-color: #FAFAFA !important;
            opacity: 1;
        }
        .title-content {
            color: #18120F;
            text-align: center;
            font-size: 32px;
            font-style: normal;
            font-weight: 700;
            line-height: 40px; /* 125% */
        }
        .p-text {
            color: #6B6B6B;
            text-align: center;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
        }
        .btn-create {
            padding: .4285714rem 1rem;
            border-radius: 10px;
            background: #329FAF;
            border: 1px solid #EBF0ED;
        }
        a.btn-sign-in {
            color: #329FAF;
            font-size: 15px;
            font-style: normal;
            font-weight: 600;
            line-height: 20px;
        }

        /* -------------------------------------------------------------------------------------------------------------------------------- */   

      /*--------- responsive laptop/pc ---------*/
        /*
            desktop zoom custom1

            main width: 1367px;
            */
        @media screen and (min-width: 1321px) and (max-width: 1380px) {

            /*  */

        }


        @media screen and (max-width: 1515px) {

            /*  */
        }


        /* Zoom 150% */
        @media screen and (min-width: 1000px) and (max-width: 1098px) {

            /*  */
        }


        @media screen and (min-width: 1248px) and (max-width: 1300px) {

        }


        /* Zoom 125% */
        @media screen and (min-width: 1098px) and (max-width: 1300px) {

            /*  */
        }


        /* Zoom 110% */
        @media screen and (min-width: 1300px) and (max-width: 1410px) {

            /*  */
        }


        /* Zoom 90% */
        @media screen and (min-width: 1556px) and (max-width: 1600px) {


        }

        @media screen and (min-width: 1920px) and (max-width: 2560px) {


        }

      /*--------- end responsive laptop/pc ---------*/

        /* -------------------------------------------------------------------------------------------------------------------------------- */

      /*--------- responsive handphone ---------*/


       /* phone mode */
        @media screen and (max-width: 459px) {
            section.desktop-show {
                display: none !important;
            }

            section.mobile-show {
                display: block !important;
            }

        }

       /* END */

       /* phone mode 1 */
        @media screen and (max-width: 458px) {

            .title-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 31.41px;
                font-style: normal;
                font-weight: 700;
                line-height: 37.692px;
               /* 120% */
            }

            .subtitle-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .h5-m {
                margin-bottom: 10px;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .w-icon-desk1 {
                width: 8vw;
                margin-right: 5px;
            }

            .icon-text-hr {
                margin-top: 0px;
                margin-bottom: 10px;
            }

            .container {
                width: 100%;
                padding-right: 0px !important;
                padding-left: 0px !important;
                margin-right: auto;
                margin-left: auto;
            }


        }

       /* END 1 */

       /* phone mode 2 */
        @media screen and (max-width: 428px) {}

       /* END */

       /* phone mode 3 */
        @media screen and (max-width: 426px) {}

       /* END */

       /* phone mode 4 */
        @media screen and (max-width: 414px) {}

       /* END */

       /* phone mode 5 */
        @media screen and (max-width: 409px) {}

       /* END */


       /* phone mode 6 */
        @media screen and (max-width: 395px) {}

       /* END */


       /* phone mode 7 */
        @media screen and (max-width: 376px) {}

       /* END */

       /* phone mode 8 */
        @media screen and (max-width: 361px) {

            .title-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 28px;
                font-style: normal;
                font-weight: 700;
                line-height: 35px;
            }

            .subtitle-page-header {
                color: #000;
                text-align: center;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .h5-m {
                margin-bottom: 10px;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 16px;
                font-style: normal;
                font-weight: 400;
                line-height: normal;
            }

            .header-text-item-kiri {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 21px;
               /* 174.375% */
            }

            .header-text-item-kanan {
                text-align: right;
                color: #000;
                font-family: Roboto;
                font-size: 15px;
                font-style: normal;
                font-weight: 400;
                line-height: 21px;
               /* 174.375% */
            }

            .header-content-item {
                text-align: left;
                color: #000;
                font-family: Roboto;
                font-size: 26px;
                font-style: normal;
                font-weight: 800;
                line-height: 30px;
            }

        }

       /* END */

       /* phone mode 8 */
        @media screen and (max-width: 321px) {

        }

       /* END */

      /*--------- end responsive handphone ---------*/

    </style>
  
  <style>
        body {
            background: linear-gradient(to bottom right, #FAFAFA, #FFFEEC);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* DESKTOP RESPONSIVE */

        @media (min-width: 1920px) and (max-width: 2560px) {
            /*  */
        }

        @media screen and (min-width: 1556px) {
            /*  */
        }

        @media screen and (min-width: 1400px) and (max-width: 1556px) {
            /*  */
        }

        @media screen and (min-width: 1300px) and (max-width: 1410px) {
            /*  */
        }

        @media screen and (min-width: 1098px) and (max-width: 1300px) {
        }

        @media screen and (min-width: 1000px) and (max-width: 1098px) {
            .form-container form {
                background: #FFFFFF;
                padding: 60px 50px 50px 50px;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                margin: 0vh -2vh;
            }
        }
  </style>
    
</head>
<body>
    {{-- Desktop Start --}}
    <section class="desktop-show py-5 my-5 d-flex justify-content-center w-75">
        <!-- Formulir Pertama -->
        <div class="form-container">
            <form>
                <div class="cover-height">
                    <div class="form-group">
                        <div class="col-12 d-flex justify-content-center w-15 pb-3">
                            <img src="evamedia-asset/form_register/Logo-icon (1).png" alt="">
                        </div>
                        <h2 class="title-content">Buat Akun</h2>
                        <p class="p-text">Berita terkini dan terupdate dari berbagai <br> narasumber terpercaya</p>
                        <div class="pt-4">
                            <label for="exampleFormControlInput1 subtitle-content" class="form-label">NAMA</label>
                            <div class="mb-4">
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ex.. Dominik Doudny">
                            </div>
                            
                            <div class="mb-4">
                                <label for="my-editor subtitle-content">DESKRIPSI</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="ex.. comvi-dashboard@email.com">
                            </div>
                            <div class="mb-4">
                                <label for="inputPassword5" class="form-label">Password</label>
                                <div class="input-group">
                                    <input type="password" name="password" id="password" class="form-control" id="exampleFormControlInput1">
                                    <span class="input-group-text">
                                        <i class="bi bi-eye-slash" id="togglePassword"></i>
                                    </span>
                                </div>
                            </div>
                            <button type="button" class="col-lg-12 btn-create text-white">Create an Account</button>
                        </div>
                    </div>
                    <div class="btn-pojok col-lg-12">
                        <p class="btn-text-p">Already have an Account? <a class="btn-sign-in" href="https://www.example.com">Sing In</a></p>
                    </div>
                </div>
            </form>
        </div>
    </section>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const passwordInput = document.getElementById('password');
            const togglePasswordIcon = document.getElementById('togglePassword');

            togglePasswordIcon.addEventListener('click', function () {
                // Ganti tipe input antara 'password' dan 'text'
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);

                // Ganti ikon mata antara terlihat dan tidak terlihat
                const iconClass = type === 'password' ? 'bi-eye' : 'bi-eye-slash';
                togglePasswordIcon.classList.remove('bi-eye', 'bi-eye-slash');
                togglePasswordIcon.classList.add(iconClass);
            });
        });
    </script>




</body>
</html>


