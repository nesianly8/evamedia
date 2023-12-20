@extends('layouts.app-evamedia')
@section('title', 'Main')
@section('css_before')
    <?php
    $baseurl = 'https://dev.goodeva.co.id/';
    ?>
    <link href="https://fonts.cdnfonts.com/css/georgia" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/roboto" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        .banner {
            background-image: url('{{ asset('goodeva-media/bgatas.png') }}');
            background-size: cover;
        }

        .insightful {
            font-family: 'Georgia', sans-serif !important;
        }



        .badge-topics {
            background-color: #f2f2f2 !important;
            color: #000 !important;
            border-radius: 20px !important;
            border: 0 !important;
        }

        .badge-topics.btn-active {
            border: 1px solid #000 !important;
        }

        .button-set {
            display: flex;
            overflow-x: hidden;
            transition: transform 0.3s ease;
            /* Add transition for smooth animation */
        }

        .button-set button {
            flex: 0 0 auto;
        }

        .desktop-show {
            display: block;
        }

        .mobile-show {
            display: none;
        }

        .header-title {
            color: #242424;
            font-family: Roboto;
            font-size: 41.18px;
            font-style: normal;
            font-weight: 500;
            line-height: 52px;
            /* 126.276% */
            letter-spacing: -0.462px;
        }

        .header-subtitle {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 21.484px;
            font-style: normal;
            font-weight: 400;
            line-height: 28px;
            /* 130.327% */
            margin-top: 0.25rem;
            margin-bottom: 2rem;
        }

        .header-name {
            color: #242424;
            font-family: Roboto;
            font-size: 15.5px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
            /* 154.839% */
        }

        .header-published-in {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.891px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 143.982% */
        }

        .header-name-publish {
            color: #242424;
            font-family: Roboto;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 142.857% */
        }

        .header-time-publish {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.891px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 143.982% */
        }

        .header-day-publish {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.563px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 147.465% */
        }

        .header-like {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 12.898px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .content-source {
            color: #6B6B6B;
            text-align: center;
            font-family: Roboto;
            font-size: 13.891px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 143.982% */
        }

        .content-name-source {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.891px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            text-decoration-line: underline;
        }

        .content-paragraph p {
            color: #242424;
            font-family: Roboto;
            font-size: 19.063px;
            font-style: normal;
            font-weight: 400;
            line-height: 32px;
            /* 167.869% */
            letter-spacing: -0.06px;
        }

        /* section recommended */

        .recommend-header {
            color: #242424;
            font-family: Roboto;
            font-size: 23.063px;
            font-style: normal;
            font-weight: 700;
            line-height: 30px;
            /* 130.081% */
            letter-spacing: -0.384px;
        }

        .recommend-name {
            color: #242424;
            font-family: Roboto;
            font-size: 12.594px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 158.809% */
        }

        .recommend-time-publish {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 12.898px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 155.058% */
        }

        .recommend-day-publish {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 11.883px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 168.31% */
        }

        .recommend-like {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }

        .recommend-title {
            color: #242424;
            font-family: Roboto;
            font-size: 19.688px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px;
            /* 121.905% */
        }

        .recommend-subtitle two-line-text {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 15.875px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 125.984% */
            padding-top: 0.4rem;
        }

        .hr-recommed1 {
            margin-top: 0.75rem;
            margin-bottom: 0.75rem;
        }

        .recommend-avatar {
            padding-bottom: 0.75rem;
        }

        .two-line-text {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }

        .recommend-in {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px;
            /* 153.846% */
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
            section.desktop-show {
                padding: 10rem 21rem 3rem 21rem !important;
            }
        }

        @media screen and (min-width: 1000px) and (max-width: 1098px) {

            section.desktop-show {
                padding: 10rem 18rem 3rem 18rem !important;
            }

        }
    </style>

@endsection

@section('css-after')
@endsection

@section('content')
    {{-- Desktop --}}
    <section class="desktop-show "
        style=" display: flex; justify-content: center; padding:10rem 24rem 3rem 24rem; flex-direction: column;">
        <div class="header-detail col-lg-12 mb-4 px-0" style="">
            <span class="header-title">The Trouble With Teachability</span>
            <p class="header-subtitle">Why solving for what’s easily explained winds up making things hard</p>
            <a class="header-name">Jane Elliott PhD</a>
            <div class="col-lg-12 header-publish row py-1">
                <a class="header-published-in">Published in</a>
                <a class="header-name-publish">Better Humans</a>
                <span class="dot mx-1"> &bull; </span>
                <a class="header-time-publish">6 min read</a>
                <span class="dot mx-1"> &bull; </span>
                <a class="header-day-publish">6 days ago</a>
            </div>
            <div class="col-lg-12 header-reaction row py-1 px-0 mx-0">
                <hr>
                <div style="display: flex; align-items: center; justify-content: space-between; padding: 10px 0;">
                    <a class="header-like" style="display: flex; align-items: center;">
                        <img src="evamedia-asset/detail-berita/icon-clap.png" alt="Clap Icon">
                        <span style="margin-left: 5px;">2k</span>
                    </a>
                    <div style="display: flex; align-items: center;">
                        <img src="evamedia-asset/detail-berita/icon-share.png" alt="Share Icon">
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="container-fluid content-section">
            <div class="row">
                <img src="evamedia-asset/detail-berita/img-content2.png" alt="w-100">
                <div class="col-lg-12 row text-center mt-2">
                    <a class="content-source">8photo on</a>
                    <a class="content-name-source" href="#">Freepik</a>
                </div>
                <div class="col-lg-12 my-4 content-paragraph px-0">
                    <p>Did you know that Warren Buffett advises against using a schedule? That way, heargues, you just do
                        what’s most important at any given time.</p>
                    <p>Buffet is as celebrated as Elon Musk when it comes to a certain kind of success, but I’d be willing
                        to bet you’ve heard more about how to implement Musk’s five-minute interval schedule than Buffet’s
                        advice to avoid scheduling entirely.</p>
                    <p>The reason for that discrepancy is the same reason that 98% of productivity advice sounds the same.
                        It’s the reason so much of this advice is written by andfor the same types of people who have
                        succeeded in the same types of industries. It’s also why this advice is counterproductive for a
                        significant percentage of smart, ambitious people who want to be able to build their things with
                        more focus and direction.</p>
                    <p>It’s a problem that’s hiding in plain sight, and it becomes visible as soon as we shift our
                        perspective a little. Consider:</p>
                    <p>Which do you think is easier to teach — how to break your day up into five-minute increments or how
                        to reproduce whatever is happening in Warren Buffet’s brain when he surveys a vast financial empire
                        and selects the most important thing to focus on in the next hour?</p>
                    <p>Yep, it’s the five-minute-increment thing.</p>
                    <p>I call this teachability bias , and I see its pernicious effects on my clients, mentees, and students
                        every day. It has created a kind of cultural tunnel vision around what it means to work well that’s
                        crushing our productivity, our creativity, and our spirits.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="desktop-show"
        style=" display: flex; justify-content: center; padding:4rem 24rem; flex-direction: column; background: #F9F9F9;">
        <div class="recommended-evamedia" id="graphicDesign">
            <div class="recommend-header">
                <h4>Recommended from Eva Media</h4>
            </div>
            <div class="card-list pb-2 ovr-flow-x-auto">
                <div class="d-flex">
                    {{-- satu --}}
                    <div class="col-6 col-md-6 col-lg-6 px-0 mx-0 mb-5">
                        <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 px-0 mx-0 pr-4">
                                    <div class="cover-card">
                                        <div class="img-cover">
                                            <img src="evamedia-asset/detail-berita/img-recommended1.png" alt=""
                                                srcset="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="text-cover">
                                        <hr class="hr-recommed1">
                                        <div class="col-lg-12 recommend-avatar row pb-3 px-0 mx-0"
                                            style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-avatar1.png" alt="">
                                            <a class="recommend-name px-1">Ro Fernn</a>
                                        </div>
                                        <a class="recommend-title"> What to Do and What Not to Do During Meetings. </a>
                                        <p class="recommend-subtitle two-line-text">The Truth Behind Ineffective Meetings
                                            and How to Improve Them.</p>
                                        <div class="col-lg-12 row pb-3" style="display: flex; align-items: center;">
                                            <a class="recommend-time-publish">9 min read</a>
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-day-publish">Nov 17</a>
                                        </div>
                                        <div class="col-lg-12 px-0" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-clap.png" alt="">
                                            <a class="recommend-like px-1">582</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- dua --}}
                    <div class="col-6 col-md-6 col-lg-6 px-0 mx-0 mb-5">
                        <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 px-0 mx-0 pr-4">
                                    <div class="cover-card">
                                        <div class="img-cover">
                                            <img src="evamedia-asset/detail-berita/img-recommended2.png" alt=""
                                                srcset="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="text-cover">
                                        <hr class="hr-recommed1">
                                        <div class="col-lg-12 recommend-avatar row pb-3 px-0 mx-0"
                                            style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-avatar.png" alt="">
                                            <a class="recommend-name px-1">Pau Blasco i Roca</a>
                                            <p class="recommend-in p-0 m-0">in</p><a class="recommend-name px-1">Towards
                                                Data Science</a>
                                        </div>
                                        <a class="recommend-title">My Life Stats: I Tracked My Habits for a Year, and This
                                            Is What I Learned</a>
                                        <p class="recommend-subtitle two-line-text partial-text">I measured the time I spent
                                            on my daily activities (studying, doing sports, socializin sleeping) for 332
                                            days in a row.</p>
                                        <div class="col-lg-12 row pb-3" style="display: flex; align-items: center;">
                                            <a class="recommend-time-publish">12 min read</a>
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-day-publish">Nov 21</a>
                                        </div>
                                        <div class="col-lg-12 px-0" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-clap.png" alt="">
                                            <a class="recommend-like px-1">2.4K</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- tiga --}}
                    <div class="col-6 col-md-6 col-lg-6 px-0 mx-0 mb-5">
                        <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 px-0 mx-0 pr-4">
                                    <div class="cover-card">
                                        <div class="img-cover">
                                            <img src="evamedia-asset/detail-berita/img-recommended3.png" alt=""
                                                srcset="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="text-cover">
                                        <div class="col-lg-12 recommend-avatar row py-4 px-0 mx-0"
                                            style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-avatar3.png" alt="">
                                            <a class="recommend-name px-1">Desiree Peralta</a>
                                            <p class="recommend-in p-0 m-0">in</p><a
                                                class="recommend-name px-1">Publishous</a>
                                        </div>
                                        <a class="recommend-title">This is Why Old Men Prefer Young Girls</a>
                                        <p class="recommend-subtitle two-line-text">Spoiler alert: it’s because they are
                                            big losers.</p><br>
                                        <div class="col-lg-12 row py-3" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-segiempat.png" alt="">
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-time-publish">7 min read</a>
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-day-publish">Nov 20</a>
                                        </div>
                                        <div class="col-lg-12 px-0" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-clap.png" alt="">
                                            <a class="recommend-like px-1">7.7K</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- empat --}}
                    <div class="col-6 col-md-6 col-lg-6 px-0 mx-0 mb-5">
                        <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 px-0 mx-0 pr-4">
                                    <div class="cover-card">
                                        <div class="img-cover">
                                            <img src="evamedia-asset/detail-berita/img-recommended4.png" alt=""
                                                srcset="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="text-cover">
                                        <div class="col-lg-12 recommend-avatar row py-4 px-0 mx-0"
                                            style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-avatar3.png" alt="">
                                            <a class="recommend-name px-1">Desiree Peralta</a>
                                            <p class="recommend-in p-0 m-0">in</p><a
                                                class="recommend-name px-1">Publishous</a>
                                        </div>
                                        <a class="recommend-title">This is Why Old Men Prefer Young Girls</a>
                                        <p class="recommend-subtitle two-line-text">Spoiler alert: it’s because they are
                                            big losers.</p><br>
                                        <div class="col-lg-12 row py-3" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-segiempat.png" alt="">
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-time-publish">7 min read</a>
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-day-publish">Nov 20</a>
                                        </div>
                                        <div class="col-lg-12 px-0" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-clap.png" alt="">
                                            <a class="recommend-like px-1">7.7K</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- lima --}}
                    <div class="col-6 col-md-6 col-lg-6 px-0 mx-0 mb-5">
                        <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 px-0 mx-0 pr-4">
                                    <div class="cover-card">
                                        <div class="img-cover">
                                            <img src="evamedia-asset/detail-berita/img-recommended5.png" alt=""
                                                srcset="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="text-cover">
                                        <hr class="hr-recommed1">
                                        <div class="col-lg-12 recommend-avatar row pb-3 px-0 mx-0"
                                            style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-avatar5.png" alt="">
                                            <a class="recommend-name px-1">Ro Fernn</a>
                                        </div>
                                        <a class="recommend-title"> What to Do and What Not to Do During Meetings. </a>
                                        <p class="recommend-subtitle two-line-text">The Truth Behind Ineffective Meetings
                                            and How to Improve Them.</p>
                                        <div class="col-lg-12 row pb-3" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-segiempat.png" alt="">
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-time-publish">9 min read</a>
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-day-publish">Nov 17</a>
                                        </div>
                                        <div class="col-lg-12 px-0" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-clap.png" alt="">
                                            <a class="recommend-like px-1">582</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- enam --}}
                    <div class="col-6 col-md-6 col-lg-6 px-0 mx-0 mb-5">
                        <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal">
                            <div class="row">
                                <div class="col-12 col-md-12 col-lg-12 px-0 mx-0 pr-4">
                                    <div class="cover-card">
                                        <div class="img-cover">
                                            <img src="evamedia-asset/detail-berita/img-recommended6.png" alt=""
                                                srcset="" class="w-100">
                                        </div>
                                    </div>
                                    <div class="text-cover">
                                        <hr class="hr-recommed1">
                                        <div class="col-lg-12 recommend-avatar row pb-3 px-0 mx-0"
                                            style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-avatar.png" alt="">
                                            <a class="recommend-name px-1">Ro Fernn</a>
                                        </div>
                                        <a class="recommend-title"> What to Do and What Not to Do During Meetings. </a>
                                        <p class="recommend-subtitle two-line-text">The Truth Behind Ineffective Meetings
                                            and How to Improve Them.</p>
                                        <div class="col-lg-12 row pb-3" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-segiempat.png" alt="">
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-time-publish">9 min read</a>
                                            <span class="dot mx-2"> &bull; </span>
                                            <a class="recommend-day-publish">Nov 17</a>
                                        </div>
                                        <div class="col-lg-12 px-0" style="display: flex; align-items: center;">
                                            <img src="evamedia-asset/detail-berita/icon-clap.png" alt="">
                                            <a class="recommend-like px-1">582</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- END Desktop --}}


@endsection

@section('js_after')

@endsection
