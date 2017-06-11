<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Active Sherpa trekking</title>
    <link rel="icon" href="image/favicon.png" type="image/x-icon" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/modernizr/modernizr-2.7.2.js"></script>
    <script src="js/parallax.js-1.4.2/parallax.min.js"></script>
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="css/proStyle.css">
    <link rel="stylesheet" href="css/aa.css">
</head>
<body>
<header>
    <div class="logo">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a href="http://localhost/trekking/"><img src="image/logo.png" alt="logo" class="pull-left"></a>
                </div>
                <div class="col-md-8 " id="small_nav ">
                    <p>Call Us(<a href="#">Book Now</a>): +977-9999999999</p><i class="fa fa-phone" aria-hidden="true"></i><br>
                    <p><a href="#">activesherpatrekking@gmail.com</a></p><i class="fa fa-envelope" aria-hidden="true"></i>
                </div>
            </div>
        </div>
    </div>
    <nav class="nav navbar-inverse">
        <div class="container">
             <ul class="navbar color1  hidden-xs">
                    <li><a href="http://localhost/trekking/aboutus.php"><i class="fa  fa-building"  style="font-size: 15px"></i><span>  ABOUT US</span></a></li>
                    <li><a href="#"><i class="fa  fa-bus"  style="font-size: 15px"></i><span> TRAVEL DEALS</span></a></li>
                    <li><a href="#"><i class="fa fa-calendar-check-o" style="font-size: 15px;"></i><span> MY BOOKINGS</span></a></li>
                    <li class="drpdown"><a href="#"><i class="fa fa-thumbs-o-up" style="font-size: 15px;"></i><span> DESTINATION</span></a>
                        <ul class="drpcontent">
                            <li><a href="#">Latest Posts</a></li>
                            <li><a href="#">Popular Posts</a></li>
                            <li><a href="#">Private Posts</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-star" style="font-size: 15px;"></i><span> PUBLIC REVIEWS</span></a></li>
                    <li class="search drpdown" > <a href="#" target="minisearch" ><span class="glyphicon glyphicon-search"></span></a>
                        <div class="drpcontent">
                            <section class="minisearch " id="pro_hidden_search">
                                <form role="search" id="searchform">
                                    <input id="searchform-input" class="sf-input" type="text" placeholder="Search..." name="s">
                                    <a href=""><span class="glyphicon glyphicon-search"></span></a>
                                </form>
                            </section>
                        </div>
                    </li>
                </ul>
        </div>
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
        </div>
        <div class="collapse navbar-collapse hidden-lg hidden-md hidden-sm" id="myNavbar">
            <ul class="nav navbar-nav hidden-lg hidden-md hidden-sm">
                <li ><a href="#"><span>  ABOUT US</span></a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#"> DESTINATION<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Latest Posts</a></li>
                        <li><a href="#">Popular Posts</a></li>
                        <li><a href="#">Private Posts</a></li>
                    </ul>
                </li>
                <li><a href="#"> TRAVEL DEALS</a></li>
                <li><a href="#">MY BOOKINGS</a></li>
                <li><a href="#">PUBLIC REVIEWS</a></li>
                <li class="search " > <a href="#" target="minisearch" ><span class="glyphicon glyphicon-search"></span></a>
                    <div class="minisearch" id="pro_hidden_search">
                        <form role="search" id="searchform">
                            <input id="searchform-input" class="sf-input" type="text" placeholder="Search..." name="s">
                            <a href=""><span class="glyphicon glyphicon-search"></span></a>
                        </form>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

