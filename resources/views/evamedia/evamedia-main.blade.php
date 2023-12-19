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
            line-height: 52px; /* 126.276% */
            letter-spacing: -0.462px;
        }

        .header-subtitle {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 21.484px;
            font-style: normal;
            font-weight: 400;
            line-height: 28px; /* 130.327% */
            margin-top: 0.25rem;
            margin-bottom: 2rem;
        }
        .header-name {
            color: #242424;
            font-family: Roboto;
            font-size: 15.5px;
            font-style: normal;
            font-weight: 400;
            line-height: 24px; /* 154.839% */
        }
        .header-published-in {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.891px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px; /* 143.982% */
        }
        .header-name-publish {
            color: #242424;
            font-family: Roboto;
            font-size: 14px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px; /* 142.857% */
        }
        .header-time-publish {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.891px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px; /* 143.982% */
        }
        .header-day-publish {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.563px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px; /* 147.465% */
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
            line-height: 20px; /* 143.982% */
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
            line-height: 32px; /* 167.869% */
            letter-spacing: -0.06px;
        }
        
        /* section recommended */
        
        .recommend-header {
            color: #242424;
            font-family: Roboto;
            font-size: 23.063px;
            font-style: normal;
            font-weight: 700;
            line-height: 30px; /* 130.081% */
            letter-spacing: -0.384px;
        }
        .recommend-name {
            color: #242424;
            font-family: Roboto;
            font-size: 12.594px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px; /* 158.809% */
        }
        .recommend-time-publish {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.891px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px; /* 143.982% */
        }
        .recommend-day-publish {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 13.563px;
            font-style: normal;
            font-weight: 400;
            line-height: 20px; /* 147.465% */
        }
        .recommend-like {
            color: #6B6B6B;
            font-family: Roboto;
            font-size: 12.898px;
            font-style: normal;
            font-weight: 400;
            line-height: normal;
        }



        @media screen and (max-width:450px) {
            .desktop-show {
                display: none;
            }

            .mobile-show {
                display: block;
            }

            .banner {
                background-image: url('{{ asset('goodeva-media/bgatas.png') }}');
                width: auto;
                height: auto;
            }
        }
    </style>

@endsection

@section('css-after')
@endsection

@section('content')
  {{-- Desktop --}}
    <section class="desktop-show " style=" display: flex; justify-content: center; padding:10rem 24rem 3rem 24rem; flex-direction: column;">
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
              <div class="" style="display: flex; align-items: center; justify-content: space-between;">
                <a class="header-like"><img src="evamedia-asset/detail-berita/icon-clap.png" alt="">2k</a>
                <div class="" style="display: flex; align-items: center;">
                    <img src="evamedia-asset/detail-berita/icon-share.png" alt="">
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
                    <p>Did you know that Warren Buffett advises against using a schedule? That way, heargues, you just do what’s most important at any given time.</p>
                    <p>Buffet is as celebrated as Elon Musk when it comes to a certain kind of success, but I’d be willing to bet you’ve heard more about how to implement Musk’s five-minute interval schedule than Buffet’s advice to avoid scheduling entirely.</p>
                    <p>The reason for that discrepancy is the same reason that 98% of productivity advice sounds the same. It’s the reason so much of this advice is written by andfor the same types of people who have succeeded in the same types of industries. It’s also why this advice is counterproductive for a significant percentage of smart, ambitious people who want to be able to build their things with more focus and direction.</p>
                    <p>It’s a problem that’s hiding in plain sight, and it becomes visible as soon as we shift our perspective a little. Consider:</p>
                    <p>Which do you think is easier to teach — how to break your day up into five-minute increments or how to reproduce whatever is happening in Warren Buffet’s brain when he surveys a vast financial empire and selects the most important thing to focus on in the next hour?</p>
                    <p>Yep, it’s the five-minute-increment thing.</p>
                    <p>I call this teachability bias , and I see its pernicious effects on my clients, mentees, and students every day. It has created a kind of cultural tunnel vision around what it means to work well that’s crushing our productivity, our creativity, and our spirits.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="desktop-show" style=" display: flex; justify-content: center; padding:4rem 24rem; flex-direction: column; background: #F9F9F9;">
      <div class="recommended-evamedia" id="graphicDesign">
        <div class="recommend-header">
            <h4>Recommended from Eva Media</h4>
        </div>
        <div class="card-list pb-2 ovr-flow-x-auto">
          <div class="d-flex">
            <div class="col-6 col-md-6 col-lg-6 px-0 mx-0">
                <div class="card-item px-3 open-modal" data-toggle="modal" data-target="#myModal">
                    <div class="row">
                    <div class="col-12 col-md-12 col-lg-12 px-0 mx-0 pr-4">
                        <div class="cover-card">
                            <div class="img-cover">
                            <img src="evamedia-asset/detail-berita/img-recommended1.png" alt="" srcset="" class="w-100">
                            </div>
                        </div>
                        <div class="text-cover">
                            <div class="col-lg-12 recommend-avatar row py-1 px-0 mx-0" style="display: flex; align-items: center;">
                                <img src="evamedia-asset/detail-berita/icon-avatar.png" alt="">
                                <a class="recommend-name px-1">Ro Fernn</a>
                            </div>                            
                            <a class="recommend-title"> What to Do and What Not to Do During Meetings. </a>
                            <p class="recommed-subtitle">The Truth Behind Ineffective Meetings and How to Improve Them.</p>
                            <div class="col-lg-12 row">
                                <a class="recommend-time-publish">9 min read</a>
                                <span class="dot mx-1"> &bull; </span>
                                <a class="recommend-day-publish">Nov 17</a>
                            </div>
                            <div class="col-lg-12 px-0" style="display: flex; align-items: center;">
                                <img src="evamedia-asset/detail-berita/icon-clap.png" alt="">
                                <a class="recommend-like">582</a>
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





  {{-- Mobile --}}
    <section class="ketiga mobile-show" style="padding-top:5%;">
        <div class="col-sm-12 mb-4" style="display: flex; align-items: center;">
            <img src="{{ asset('goodeva-media/up.png') }}" alt="" style="margin-right: 10px;">
            <span style="color:#000;font-family: Roboto;font-weight: 800;line-height: 0px;font-size: 15.5px;">Trending di
                Evamedia</span>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-10" style="display: flex; align-items:flex-start">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">01</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile1.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Luka Bönisch in The
                                    Taoist
                                    Online</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">The
                                    Problem
                                    You
                                    Think You Have Is Never <br> the Real Problem</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 24 . 9 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">02</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile2.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Thomas Smith in The
                                    Generator</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">Did
                                    OpenAI
                                    Secretly Create a Brain-Like <br>
                                    Intelligence After All?</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 26 . 5 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">03</h3>
                        </div>
                        <div class="col-md-8" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile3.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Kevin Chisholm in The
                                    Flutter</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">What’s
                                    new
                                    in Flutter 3.16</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 15 . 14 min read</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">04</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile4.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Carlos
                                    Arguelles</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">My
                                    favorite
                                    coding question to give <br> candidates</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 13px;font-weight: 400;">Nov 12 . 11 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">05</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile5.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Michael Thomsen in
                                    Dart</span>
                            </div>
                            <a href="#">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">
                                    Announcing
                                    Dart 3.2</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 15 . 6 min read</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-md-4" style="display: flex; align-items:flex-end">
                            <h3 class="ml-auto" style="color: #F2F2F2; font-family: Roboto; font-weight: 800;">06</h3>
                        </div>
                        <div class="col-md-4" style="">
                            <div class="mb-2" style="display: flex; align-items: center;">
                                <img src="{{ asset('goodeva-media/profile6.png') }}" alt="" class="mr-2">
                                <span style="color: #242424; font-family: Roboto; font-weight: 800;">Natalie Worth in UX
                                    Collective
                                    Online</span>
                            </div>
                            <a href="">
                                <h3 style="color: #242424;font-family: Roboto;font-size: 15.25px;font-weight: 800;">Is
                                    technology harming our brains?</h3>
                            </a>
                            <p style="color: #6B6B6B;font-size: 12.797px;font-weight: 400;">Nov 28 . 4 min read</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  {{-- End Mobile --}}
@endsection

@section('js_after')
    <style>
        .button-set {
            display: flex;
            overflow: hidden;
            transition: transform 0.5s ease;
        }
    </style>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var buttonSet = document.querySelector('.button-set');
            var badgesContainer = document.querySelector('.badges-container');
            var nextBtn = document.getElementById('nextBtn');
            var topics = [
                'Music',
                'Programming',
                'ChatGPT',
                'High School',
                'Governance',
                'Politics',
                'Economics',
                'Productivity',
                'Self Improvement',
                'Writing',
                'Reading',
                'Lifestyle',
                'Technology',
                'Artifical Intelligence',
                'Programming',
                'Tech',
                'Business',
                'Data Science',
                'Machine Learning',
                'Blockchain',
            ];

            nextBtn.addEventListener('click', function() {
                var firstItem = badgesContainer.querySelector('.filter-btn');
                badgesContainer.removeChild(firstItem);

                var newBadge = document.createElement('button');
                newBadge.className = 'mx-1 btn btn-primary filter-btn badge-topics';
                newBadge.setAttribute('data-filter', 'New Topic');
                var randomTopic = topics[Math.floor(Math.random() * topics.length)];
                newBadge.innerText = randomTopic;

                badgesContainer.appendChild(newBadge);
            });
            var filterButtons = document.querySelectorAll('.badge-topics');
            filterButtons.forEach(function(button) {
                button.addEventListener('click', function() {
                    filterButtons.forEach(function(btn) {
                        btn.classList.remove('btn-active');
                    });
                    this.classList.add('btn-active');
                });
            });
            var exploreButton = document.getElementById('exploreBtn');
            exploreButton.addEventListener('click', function() {
                filterButtons.forEach(function(btn) {
                    btn.classList.remove('btn-active');
                });
            });
            var badgesContainer = document.querySelector('.badges-container');
            var nextBtn = document.getElementById('nextBtn');

            badgesContainer.addEventListener('click', function(event) {
                if (event.target && event.target.classList.contains('badge-topics')) {
                    document.querySelectorAll('.badge-topics').forEach(function(btn) {
                        btn.classList.remove('btn-active');
                    });
                    event.target.classList.add('btn-active');
                }
            });
        });
    </script>
@endsection
