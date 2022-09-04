<?php $name_url = explode("/" , $_SERVER["SCRIPT_NAME"]) ?>




<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="./images/favicon.png" />
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./eroor404.html">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>
         <?php echo $title ?? "La Salle de sport" ?>

    </title>

</head>

<body>
    <header>
<!-----------------------Navbar------------------------>
        <nav class=" navbar-expand-lg navbar-light  w-100 m-auto d-flex justify-content-between align-items-center nav-fixed">
            <a class="navbar-brand logo-navbar ps-5" href="./index.html"><img class="logo" src="./images/logo.png" alt="#"></a>
            <div class="menu d-flex justify-content-between align-items-center">
                <ul class="navbar-nav d-flex justify-content-around align-items-center px-5">
                    <li class="nav-item">
                        <a class="nav-link" href="./eroor404.html"><i class="text-white">L'EQUIPE</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./eroor404.html"><i class="text-white">LES ACTIVITES</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./eroor404.html"><i class="text-white">NOS OFFRES</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./eroor404.html"><i class="text-white">PLANNING</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./eroor404.html"><i class="text-white">LE BLOG</i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index_3.html"><i class="text-white">CONTACT</i></a>
                    </li>
                </ul> 
                <ul class="list-unstyled nav-item m-auto px-5">    
                    <li class="d-inline-block nav-item">
                        <a href="./eroor404.html" class="nav-link reseaux"><i class="text-white fa fa-mobile"> 05 59 47 84 18</i></a>
                    </li>
                </ul>
                <ul class="list-unstyled nav-item m-auto px-5">    
                    <li class="d-inline-block nav-item">
                        <a href="./eroor404.html" class="nav-link reseaux"><i class="text-white fa fa-facebook-square"></i></a>
                    </li>
                    <li class="d-inline-block nav-item">
                        <a href="./eroor404.html" class="nav-link reseaux"><i class="text-white fa fa-instagram"></i></a>
                    </li>
                    <li class="d-inline-block nav-item">
                        <a href="./eroor404.html" class="nav-link reseaux"><i class="text-white fa fa-tripadvisor"></i></a>
                    </li>
                </ul>
            </div>
            <button class="burger"><span class="bar"></span></button>
        </nav>
    </header> 


    <!-------------------------Slider 1------------------------->
    <?php if ($name_url [2] =="index.php") : ?>
<section class="content-slider">
        <div id="carouselExampleIndicators" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"  aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active ">
                    <img src="./images/slider/slide_1.jpg" class="d-block w-100 h-100vh" alt=".error">
                    <div class="text-slider carousel-caption text-light mb-5">
                        <h5 class="textButton first-title my-font-family">2 INSCRIPTION SIMULTANÉES = UN 3ème ABONNEMENT DE 6 MOIS OFFERT !</h5>
                    </div>
                    <div class="btn-slider carousel-caption">
                        <a href="./eroor404.html" class="bouttonSlide text-button btn btn-outline-light my-font-family">PLUS D'INFOS</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/slider/slide_2.jpg" class="d-block w-100 h-100vh" alt=".error">
                    <div class="text-slider carousel-caption text-light mb-5">
                        <h5 class="textButton first-title my-font-family">2 INSCRIPTION SIMULTANÉES = UN 3ème ABONNEMENT DE 6 MOIS OFFERT !</h5>
                    </div>
                    <div class="btn-slider carousel-caption">
                        <a href="./eroor404.html" class="bouttonSlide text-button btn btn-outline-light my-font-family">PLUS D'INFOS</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="./images/slider/slide_3.jpg" class="d-block w-100 h-100vh" alt=".error">
                    <div class="text-slider carousel-caption text-light mb-5">
                        <h5 class="textButton first-title my-font-family">2 INSCRIPTION SIMULTANÉES = UN 3ème ABONNEMENT DE 6 MOIS OFFERT !</h5>
                    </div>
                    <div class="btn-slider carousel-caption">
                        <a href="./eroor404.html" class="bouttonSlide text-button btn btn-outline-light my-font-family">PLUS D'INFOS</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php endif; ?>