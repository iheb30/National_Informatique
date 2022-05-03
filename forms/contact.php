<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Contact</title>
  <meta content="contact brocksm" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/brocksm-icone.png" rel="icon">
  <link href="assets/img/brocksm-icone.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet"> 




  <!-- =======================================================
  * Template Name: EstateAgency - v4.6.0
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  
  <div class="box-collapse">
    <div class="title-box-d">
      <h3 class="title-d">Search Property</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <div class="box-collapse-wrap form">
      <form class="form-a">
        <div class="row">
          <div class="col-md-12 mb-2">
            <div class="form-group">
              <label class="pb-2" for="Type">Keyword</label>
              <input type="text" class="form-control form-control-lg form-control-a" placeholder="Keyword">
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="Type">Type</label>
              <select class="form-control form-select form-control-a" id="Type">
                <option>All Type</option>
                <option>For Rent</option>
                <option>For Sale</option>
                <option>Open House</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="city">City</label>
              <select class="form-control form-select form-control-a" id="city">
                <option>All City</option>
                <option>Alabama</option>
                <option>Arizona</option>
                <option>California</option>
                <option>Colorado</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bedrooms">Bedrooms</label>
              <select class="form-control form-select form-control-a" id="bedrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="garages">Garages</label>
              <select class="form-control form-select form-control-a" id="garages">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
                <option>04</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="bathrooms">Bathrooms</label>
              <select class="form-control form-select form-control-a" id="bathrooms">
                <option>Any</option>
                <option>01</option>
                <option>02</option>
                <option>03</option>
              </select>
            </div>
          </div>
          <div class="col-md-6 mb-2">
            <div class="form-group mt-3">
              <label class="pb-2" for="price">Min Price</label>
              <select class="form-control form-select form-control-a" id="price">
                <option>Unlimite</option>
                <option>$50,000</option>
                <option>$100,000</option>
                <option>$150,000</option>
                <option>$200,000</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-b">Search Property</button>
          </div>
        </div>
      </form>
    </div>
  </div><!-- End Property Search Section -->>

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="index.html"><img src="assets/img/brock-sm-logo.png" width="200"></a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">

          <li class="nav-item">
            <a class="nav-link" href="index.html">Accueil</a>
          </li>

          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Qui sommes nous</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="notre-philosophie.php">Notre philosophie</a>
              <a class="dropdown-item " href="notre-contribution.html">Notre contribution</a> 
              <a class="dropdown-item " href="recyclage-selon-brocksm.html">Le recyclage selon BROCKSM</a> 
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="rse.html">R.S.E</a>
          </li>

          <li class="nav-item">
            <a class="nav-link " href="service.html">Services</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Devis</a>
            <div class="dropdown-menu">
              <a class="dropdown-item " href="triptyque-geographie.php">Triptyque géographique</a>
              <a class="dropdown-item  " href="simulateur-avance.php">Simulateur avancé</a> 
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link  " href="effacement-de-donnees.html">Effacement de données</a>
          </li>

          <li class="nav-item">
            <a class="nav-link  " href="temoignages.html">Témoignages</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="contact.php">Contact</a> 
          </li>
        </ul>
      </div>
      <!--
      <button type="button" class="btn btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01">
        <i class="bi bi-search"></i>
      </button>
      -->
    </div>
  </nav><!-- End Header/Navbar -->

  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Contactez-nous</h1>
              <span class="color-text-a">Notre équipe se tient à votre disposition.</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="index.html">Accueil</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Contact
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->
    <!-- ======= Blog Single ======= -->
    <section class="news-single nav-arrow-b">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="news-img-box">
              <img src="assets/img/contactez nous.jpg" alt="recyclage avec brocksm" class="img-fluid">
            </div>
          </div>
          <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
            <div class="post-content color-text-a">
              <p class="post-intro">

              </p>
              
                              
            </div>
       
          </div>
      
      
        </div>
      </div>
      
    </section><!-- End Blog Single-->

    <!-- ======= Contact Single ======= -->
    <section class="contact">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="contact-map box">
              <div id="map" class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2621.8279732537753!2d2.427164516497968!3d48.91866967929352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66c926d489a3f%3A0xe4188b6824d6aa07!2s145%20Rue%20Diderot%2C%2093700%20Drancy%2C%20France!5e0!3m2!1sfr!2sus!4v1634632599620!5m2!1sfr!2sus"  style="border:0;" allowfullscreen="" loading="lazy" width="100%" height="460" frameborder="0" style="border:0" allowfullscreen></iframe>
              </div>
            </div>
          </div>
          <div class="col-sm-12 section-t8">
            <div class="row">
              <div class="col-md-7">
                <form action="contact-mail.php" method="post" role="form"  class="form" enctype="multipart/form-data">
                  <div class="row">
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Nom" required>
                      </div>
                    </div>
                    <div class="col-md-6 mb-3">
                      <div class="form-group">
                        <input name="email" type="email" class="form-control form-control-lg form-control-a" placeholder="Email" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
                      <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Sujet" required>
                      </div>
                    </div>
                    <div class="col-md-12 mb-3">
              
                      <input class="form-control"  id="attachment" name="attachment"  type="file"  >
                      <div><span><p style="font-size: x-small;color: #508dc6 ">Votre fichier (Format PDF, Image, Excel)</p> </span></div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                      </div>
                    </div>
                   

                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn btn-a">Envoyer</button>
                    </div>
                  </div>
                </form>
                <?php
if(array_key_exists('success',$_SESSION)):?>
<div class="alert alert-success">
  Votre mail à bien été envoyé. Merci
</div>
<?php endif;?>
              </div>
              <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">contact</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">Email.
                        <span class="color-a"><a href="contact@brocksm.fr">contact@brocksm.fr</a></span>
                      </p>
                      <p class="mb-1">Télephone.
                        <span class="color-a">01.48.31.48.72</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                    <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Nous trouver</h4>
                    </div>
                    <div class="icon-box-content">
                      <p class="mb-1">
                        145 rue Diderot-Energie Parc,<br> 93700 Drancy France
                        
                      </p>
                    </div>
                  </div>
                </div>
                <div class="icon-box">
                  <div class="icon-box-icon">
                    <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                    <div class="icon-box-title">
                      <h4 class="icon-title">Réseaux sociaux</h4>
                    </div>
                    <div class="icon-box-content">
                      <div class="socials-a">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="https://www.facebook.com/Brock-Sm-Informatique-168952160256460/">
                              <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                         
                          <li class="list-inline-item">
                            <a href="http://www.linkedin.com/in/brock-sm/">
                              <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Single-->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand"><a href="index.html"><img src="assets/img/brock-sm-logo.png" width="200"></a></h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
               Brock SM est spécialisée dans la revalorisation des équipements IT.


              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Télephone .</span> 01.48.31.48.72
                </li>
                <li class="color-a">
                  <span class="color-text-a">Email .</span> <a href="contact@brocksm.fr">contact@brocksm.fr</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">L'entreprise</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="notre-philosophie.html">Notre Philosophie</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="notre-contribution.html">Notre contribution</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="recyclage-selon-brocksm.html">Le recyclage selon BROCKSM</a>
                  </li>
                  <li class="item-list-a">
                    <i class="bi bi-chevron-right"></i> <a href="contact.php">Contact</a>
                  </li>
                  
                  
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">Nos Services</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="service.html">Services</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="effacement-de-donnees.html">Effacement de données</a>
                </li>
                <li class="item-list-a">
                  <i class="bi bi-chevron-right"></i> <a href="rse.html">R.S.E</a>
                </li>
               
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <nav class="nav-footer">
            <ul class="list-inline">
              
              
            </ul>
          </nav>
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="https://www.facebook.com/Brock-Sm-Informatique-168952160256460/">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
              </li>
             
              <li class="list-inline-item">
                <a href="http://www.linkedin.com/in/brock-sm/">
                  <i class="bi bi-linkedin" aria-hidden="true"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
              <span class="color-a"><a href="#">BrockSM</a></span> All Rights Reserved.
            </p>
          </div>
          <div class="credits">
            <!--
            All the links in the footer should remain intact.
            You can delete the links only if you purchased the pro version.
            Licensing information: https://bootstrapmade.com/license/
            Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=EstateAgency
          -->
            <!--Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>-->
          </div>
        </div>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
<?php
unset($_SESSION['success']);
?>