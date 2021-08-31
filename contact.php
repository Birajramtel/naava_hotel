<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="keywords" content="">
        <!-- <meta name="robots" content="noindex"> -->
        <meta name="author" content="">
        <meta property="og:type" content="website" />
        <meta propery="og:title" content="">
        <meta property="og:description" content="" />
        <meta property="og:url" content="" />
        <meta property="og:locale" content="en_US" />
        <meta property="og:site_name" content="">
        <meta property="og:image" content="" />

        <title>Naava Hotel</title>

        <link rel="icon" href="#" type="image/gif" sizes="16x16">
        <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <header>
        <div class="Header_Hero mb-5">
            <div class="Header_Hero_Image">
                <img src="img/Contact.png" alt="Welcome to Naava Hotel" width="100%">   
            </div>
            <div class="container Header_Logo_Content">
                <div class="row">
                    <div class=col-2>
                        <img src="img/Naava PP.png" alt="Naava Brown Bg logo Image">
                    </div>
                    <div class="col-10 Header_Content">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarNav">
                                <ul class="navbar-nav pl-2">
                                    <li class="nav-item pl-2">
                                        <a class="nav-link active  nav_text" href="index.php">Home<span class="sr-only">(current)</span></a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a class="nav-link  nav_text" href="about.php">About Naava</a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a class="nav-link  nav_text" href="#">Explore Shivapuri</a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a class="nav-link  nav_text" href="accommodation.php">Accommodation</a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a class="nav-link  nav_text" href="eat_and_drink.php">Eat and Drink</a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a class="nav-link  nav_text" href="#">Packages</a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a class="nav-link  nav_text" href="#">Highlights</a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a class="nav-link  nav_text" href="#">Gallery</a>
                                    </li>
                                    <li class="nav-item pl-2">
                                        <a class="nav-link  nav_text" href="contact.php">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>  
            <div class="container Header_Content_Paragraph">
                <h2 class= "header_2"><strong><b>Contact</b></strong> </h2>
                <ul class="breadcrumb pl-0">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>       
            </div>          
        </div>
    </header>
<body>
    
<div class="container mt-5 mb-5">
    <h2 class="Header_2"><strong><b> Contact us to get <br> free support.</b></strong></h2>
    <form>
        <div class="row">
            <div class="col-8">
                <div class="form-group">
                    <textarea class="form-control" rows="15" id="Description" placeholder ="Description"></textarea>
                    </div>
            </div>
            <div class="col-4">
                <div class="form-group input-group-lg">              
                    <input type="text" class="form-control input-lg" id="inputlg" placeholder="Subject"> 
                </div>  
                <div class="form-group input-group-lg">
                    <input type="text" class="form-control input-lg" id="inputlg"  placeholder="Name">
                </div>          
                <div class="form-group input-group-lg">
                    <input type="email" class="form-control input-lg" id="inputlg"  placeholder="Email">
                </div>  
                <button style="font-size:18px" class="btn btn-primary btn-sm"> Send <i class="fa fa-send-o"></i></button>
            </div>
        </div>
    </form>
    <div class="container">
        <div class="row mt-5 mb-2">
            <div class="col-3">
                <i class="fa fa-envelope" style="font-size:15px"></i>
                <h6><strong>Email</strong></h6>
            </div>
            <div class="col-3">
                <i class="fas fa-phone-alt" style="font-size:15px"></i>
                <h6><strong>Phone</strong></h6>
            </div>
            <div class="col-3">
                <i class="fas fa-map-marker-alt" style="font-size:15px"></i>
                <h6><strong>Location</strong></h6>
            </div>
        </div>
    </div> 
</div>

</body>
<?php
    include("includes/footer.php")
?>