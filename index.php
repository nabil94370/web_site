<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Nabil</title>
  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- nice selecy -->
  <link rel="stylesheet" href="css/nice-select.min.css">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />

</head>

<body>
  
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              <img src="logo_porte.jpg" alt="" width="50px" height="50px">
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav  ">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.html"> À propos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="property.html">Propriété</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="why.html">Pourquoi nous</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="testimonial.html">Témoignage</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="mail.php">Contact</a>
              </li>
              <form class="form-inline">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            </ul>
            <div class="quote_btn-container">
            </div>
          </div>
        </nav>
      </div>
    </header>
     <!-- end header section -->
    <!-- slider section -->
    <section class="slider_section ">
      <div class="slider_bg_box">
        <img src="images/porte-fond.jpg" alt="">
      </div>
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                    PORTE BLINDÉE <br>
                    RÉSIDENTIELLE CLASSIQUE
                    </h1>
                    <div class="col-md-8 px-0">
                      <p>
                      Acier renforcé, serrures multipoints, design personnalisable.
                      </p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                    PORTE BLINDÉE <br>
                    ANTI-EFFRACTION
                    </h1>
                    <div class="col-md-8 px-0">
                      <p>
                      Blindage renforcé, serrures avancées, conçue pour une sécurité maximale.
                      </p>
                    </div>
                   
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                    PORTE BLINDÉ<br>
                    COUPE-FEU 
                    </h1>
                    <div class="col-md-8 px-0">
                      <p>
                      Matériaux ignifuges, système d'étanchéité, idéale pour prévenir la propagation du feu.
                      </p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                    PORTE BLINDÉE<br>
                    CHAMBRE FORTE
                    </h1>
                    <div class="col-md-8 px-0">
                      <p>
                      Acier épais, serrures haute sécurité, idéale pour la protection de biens précieux.
                      </p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-10 mx-auto">
                  <div class="detail-box">
                    <h1>
                    PORTE BLINDÉE<br>
                    ACOUSTIQUE
                    </h1>
                    <div class="col-md-8 px-0">
                      <p>
                      Isolation phonique intégrée, matériaux absorbant le son, idéale pour la confidentialité.
                    </p>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
          <li data-target="#customCarousel1" data-slide-to="3"></li>
          <li data-target="#customCarousel1" data-slide-to="4"></li>
        </ol>
      </div>

    </section>
    <!-- end slider section -->
  </div>

  <!-- find section starts -->

	

  <!-- find section ends -->

  <!-- about section -->

  <?php
  require('nav-about.php')
  ?>

  <!-- end about section -->

  <!-- sale section -->

  <section class="sale_section layout_padding">
    <div class="container-fluid">
      <div class="heading_container">
        <h2>
          Porte a Vendre
        </h2>
        <p>
          Il existe de nombreuses variantes de passages du Lorem Ipsum disponibles, mais le
        </p>
      </div>
      <div class="row">
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="porte-blindee-pleine.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Porte Blindée Résidentielle Classique
              </h6>
              <p>
              Acier renforcé, serrures multipoints, design personnalisable.              
            </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="porte-effraction.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Porte Blindée Anti-effraction
              </h6>
              <p>
              Blindage renforcé, serrures avancées, conçue pour une sécurité maximale.
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="coupe_feu.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Porte Coupe-feu Blindée
              </h6>
              <p>
              Matériaux ignifuges, système d'étanchéité, idéale pour prévenir la propagation du feu.
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="images (1).png" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Porte Blindée pour Chambre Forte
              </h6>
              <p>
              Acier épais, serrures haute sécurité, idéale pour la protection de biens précieux.
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>

        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="porte-acoustique.webp" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Porte Blindée Acoustique
              </h6>
              <p>
              Isolation phonique intégrée, matériaux absorbant le son, idéale pour la confidentialité.
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4">
          <div class="box">
            <div class="img-box">
              <img src="porte-blindee-pavillonnaire.jpg" alt="">
            </div>
            <div class="detail-box">
              <h6>
              Porte Blindée Extérieure Design
              </h6>
              <p>
              Esthétique avec panneaux décoratifs, intégrant discrètement des serrures de sécurité.
              </p>
              <a href="">
                View Detail
              </a>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end sale section -->

  <!-- why us section -->

  <section class="why_us_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          Pourquoi nous choisir?
        </h2>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/w1.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Clients satisfaits
              </h5>
              <p>
              Clients comblés : Sécurité maximale et design élégant. Leur confiance, notre engagement.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/w2.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Assistance 24h/24 et 7j/7
              </h5>
              <p>
              Notre équipe est disponible en permanence pour répondre à vos besoins et assurer votre tranquillité d'esprit.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 mx-auto">
          <div class="box">
            <div class="img-box">
              <img src="images/w3.png" alt="">
            </div>
            <div class="detail-box">
              <h5>
                Prix ​​abordable
              </h5>
              <p>
              Sécurité de qualité à prix abordable. Protégez votre foyer sans dépasser votre budget.
              </p>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </section>

  <!-- end why us section -->

  <!-- client section -->

  

  <!-- end client section -->



  <!-- info section -->
  <section class="info_section ">

    <div class="container">
      <div class="contact_nav">
        <a href="">
          <i class="fa fa-phone" aria-hidden="true"></i>
          <span>
            Call : +33 06 37 43 53 91
          </span>
        </a>
        <a href="mail.php">
          <i class="fa fa-envelope" aria-hidden="true"></i>
          <span>
            Email : nblabbes@gmail.com
          </span>
        </a>
        <a href="https://www.google.com/maps/place/Mairie+de+Sucy-en-Brie/@48.7708729,2.5237451,15z/data=!4m6!3m5!1s0x47e60bf65ba9a17d:0xd3eb0fad016c8fe4!8m2!3d48.7708729!4d2.5237451!16s%2Fg%2F1td4tl2b">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <span>
            Location
          </span>
        </a>
      </div>

      <div class="info_top ">
        <div class="row info_main_row">
          <div class=" col-md-4 col-lg-4 ">
            <div class="info_about">
              <h4>
                À PROPOS DE NOUS              
              </h4>
              <p>
              À SHF, nous redéfinissons la sécurité avec des portes blindées innovantes, alliant protection et esthétique sur mesure. Découvrez la tranquillité d'esprit à chaque ouverture.
              </p>
            </div>
          </div>
          <div class=" col-md-4 col-lg-3 mx-auto">
            <div class="info_links">
              <h4>
                LIENS RAPIDES
              </h4>
              <div class="info_links_menu">
              <a class="" href="index.php">Home <span class="sr-only">(current)</span></a>
                <a class="" href="about.html"> À propos</a>
                <a class="" href="property.html">Propriété</a>
                <a class="" href="why.html">Pourquoi nous</a>
                <a class="" href="testimonial.html">Témoignage</a>
                <a class="" href="mail.php">Contact</a>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="info_form">
              <div class="social_box">
                <a href="">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-linkedin" aria-hidden="true"></i>
                </a>
                <a href="">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end info_section -->


  <!-- footer section -->
  <!-- footer section -->

  <!-- jQery -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <!-- nice select -->
  <script src="js/jquery.nice-select.min.js"></script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- custom js -->
  <script src="js/custom.js"></script>


</body>

</html>