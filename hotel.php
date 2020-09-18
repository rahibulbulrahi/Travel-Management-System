<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Easy Tour - Hotel Booking</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <link rel="stylesheet" href="style/hotel.css">
</head>
<body>
     <!--JavaSeript-->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/hotelheader.js"></script>
    <!--JavaSeript Finish-->
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">Easy Travel</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a data-page="home" class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a data-page="about" class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a data-page="offer" class="nav-link" href="#offer">Offer</a>
                    </li>
                    <li class="nav-item">
                        <a data-page="news" class="nav-link" href="#news">News</a>
                    </li>
                    <li class="nav-item">
                        <a data-page="contact" class="nav-link" href="#contact">Contact</a>
                    </li>
                    <div class="bubble"></div>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar Finsih-->
    <!--Home-->
    <div class="home" id="home">
        <div class="control">
            <div class="main-heading">
                <h1 class="title">Discover</h1>
                <h2 class="subtitle">Luxury Hotels</h2>
            </div>
            <a href="#" class="btn btn-gradient">Explore Now
                <span class="dots"><i class="fas fa-ellipsis-h"></i></span>
            </a>
        </div>
    </div>
    <!--Home Finish-->
</body>
</html>