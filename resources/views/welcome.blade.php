<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <header class="d-flex align-self-center" style="background-color: cornsilk">
            <div class="container">
                <img src="storage/images/sharesquare.png">
            </div>
        </header>
        <nav class="navbar bg-dark navbar-dark navbar-expand-md mb-5">
            <div class="container">
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse" data-target="#myToggleNav"
                        aria-expanded="false" aria-label="Toggle Navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="myToggleNav">
                    <div class="navbar-nav">
                        <a href="#" class="navbar-brand">Share Square</a>
                        <a class="nav-item nav-link active" href="#">Cars</a>
                        <a class="nav-item nav-link " href="#">Real Estate</a>
                        <a class="nav-item nav-link " href="#">Jobs</a>
                        <a class="nav-item nav-link " href="#">Pets</a>
                        <a class="nav-item nav-link " href="#">Services</a>
                        <a class="nav-item nav-link " href="#">Vacation Rentals</a>
                    </div><!--navbar nav-->
                </div><!--collapse-->
                <div class="d-none d-sm-inline-block">
                    @if (Route::has('login'))
                            @auth
                                <a class="align-self-center mr-2 " href="{{ url('/home') }}">Home</a>
                            @else
                                <a class="align-self-center mr-2 " href="{{ route('login') }}">Login</a>

                                @if (Route::has('register'))
                                <span class="d-sm-inline-block align-self-center text-light mr-2"> | </span>
                                    <a class="align-self-center mr-2" href="{{ route('register') }}">Register</a>
                                @endif
                            @endauth
                    @endif

                    <!--            <button type="button" class="btn btn-secondary mr-2"-->
                    <!--                    data-toggle="collapse" data-target="#searchButton"-->
                    <!--                    aria-expanded="false" aria-label="Toggle Search" role="button"-->
                    <!--                    aria-controls="collapsemySearchButton">-->
                    <!--                <img src="storage/images/search_icon.jpg" width="15px">-->
                    <!--            </button>-->
                    <div id="searchButton" class="d-sm-inline-block">
                        <form class="form-inline">
                            <input class="form-control mr-2" type="text" placeholder="Search">
                            <button class="btn btn-outline-light" type="submit">Go</button>
                        </form>
                    </div>
                </div>
            </div><!--container-->
        </nav><!--navbar--->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <section class="card mb-5" id="cars">
                        <img class="card-img-top" src="storage/images/cars.png" alt="Car Photos">
                        <div class="card-body">
                            <h2 class="card-title">2015 Toyota</h2>
                            <h5 class="card-subtitle">Cars</h5>
                            <p class="card-text">2015 Toyota 4Runner SR5 Grey 4.0L V6 SMPI DOHC 24V 4WD 4WD V6 SMPI DOHC 24V 4WD
                                4WD</p>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item" href="#">Cars & Trucks</a>
                            <a class="list-group-item" href="#">Classic Cars</a>
                            <a class="list-group-item" href="#">Modern Cars</a>
                        </div>
                        <a class="card-footer">
                            <form class="form-inline">
                                <button class="btn btn-primary">Add Post</button>
                            </form>
                        </a>
                    </section><!-- card -->
                </div>
                <div class="col-sm-4">
                    <section class="card mb-5" id="realestate">
                        <img class="card-img-top" src="storage/images/realestate.png" alt="Real estate Photos">
                        <div class="card-body">
                            <h2 class="card-title">3 BEDROOM UNITS</h2>
                            <h5 class="card-subtitle">3 BEDROOM UNITS</h5>
                            <p class="card-text">AVAILABLE FOR NOVEMBER 1ST, 2019
                                3 BEDROOM RENTALS LOCATED IN THE HEART OF Hamilton</p>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item" href="#">For Rent</a>
                            <a class="list-group-item" href="#">For Sale</a>
                            <a class="list-group-item" href="#">For Rent</a>
                        </div>
                        <a class="card-footer">
                            <form class="form-inline">
                                <button class="btn btn-primary">Add Post</button>
                            </form>
                        </a>
                    </section><!-- card -->
                </div>
                <div class="col-sm-4">
                    <section class="card mb-5" id="jobs">
                        <img class="card-img-top" src="storage/images/jobs.png" alt="Jobs Photo">
                        <div class="card-body">
                            <h2 class="card-title">Want to Earn $27/hr</h2>
                            <h5 class="card-subtitle">Part time</h5>
                            <p class="card-text">On TaskRabbit, you control your business. You decide when and where you want to
                                task</p>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item" href="#">Accounting & Management</a>
                            <a class="list-group-item" href="#">Bar, Food & Hospitality</a>
                            <a class="list-group-item" href="#">Customer Service</a>
                        </div>
                        <a class="card-footer">
                            <form class="form-inline">
                                <button class="btn btn-primary">Add Post</button>
                            </form>
                        </a>
                    </section><!-- card -->
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <section class="card mb-5" id="pets">
                        <img class="card-img-top" src="storage/images/pets.png" alt="Pets Photo">
                        <div class="card-body">
                            <h2 class="card-title">K-9 Komfort Inn</h2>
                            <h5 class="card-subtitle">Dog and Cat Boarding and Dog Training</h5>
                            <p class="card-text">Going away and need somewhere to board your pet. </p>
                        </div>
                        <div class="list-group list-group-flush">
                            <a class="list-group-item" href="#">Animal & Pet Services</a>
                            <a class="list-group-item" href="#">Birds for Rehoming</a>
                            <a class="list-group-item" href="#">Fish for Rehoming</a>
                        </div>
                        <a class="card-footer">
                            <form class="form-inline">
                                <button class="btn btn-primary">Add Post</button>
                            </form>
                        </a>
                    </section><!-- card -->
                </div>
                <div class="col-sm-4">
                    <section class="card mb-5" id="services">
                        <img class="card-img-top" src="storage/images/services.png" alt="Services Photo">
                        <div class="card-body">
                            <h2 class="card-title">$99...Clogged Drain</h2>
                            <h5 class="card-subtitle">24/7 Drain Cleaning</h5>
                            <p class="card-text">Are you looking for drain cleaning & clog (Blocked) repair services in the
                                Toronto area?</p>
                        </div><!-- card-body -->

                        <div class="list-group list-group-flush">

                            <a class="list-group-item" href="#">Childcare & Nanny</a>
                            <a class="list-group-item" href="#">Entertainment</a>
                            <a class="list-group-item" href="#">House and Cleaning</a>
                        </div>
                        <a class="card-footer">
                            <form class="form-inline">
                                <button class="btn btn-primary">Add Post</button>
                            </form>
                        </a>
                    </section><!-- card -->
                </div>
                <div class="col-sm-4">
                    <section class="card mb-5" id="vacantionrental">
                        <img class="card-img-top" src="storage/images/vacationrental.png" alt="Vacation rental Photo">
                        <div class="card-body">
                            <h2 class="card-title">MUSKOKA Cottages</h2>
                            <h5 class="card-subtitle">For rent</h5>
                            <p class="card-text">Rent one of Lantern Bay Resorts scenic 2 to 3 bedroom cottages in Muskoka for
                                as low as $125/night!.</p>
                        </div><!-- card-body -->
                        <div class="list-group list-group-flush">
                            <a class="list-group-item" href="#">Canada</a>
                            <a class="list-group-item" href="#">US</a>
                            <a class="list-group-item" href="#">England</a>
                        </div>
                        <a class="card-footer">
                            <form class="form-inline">
                                <button class="btn btn-primary">Add Post</button>
                            </form>
                        </a>
                    </section><!-- card -->
                </div>
            </div>
        </div>
        <footer>
            <div class="container">
                <p style="text-align: center">This is copyright to Sharesquare team</p>
            </div>
        </footer>

    </body>
</html>
