<!doctype html>
<html lang="en">
  <head>
    <title>Bonhomie - Cultural</title>
    <?php
    include('style/style.php');
    include('links/link.php');
    ?>
    
  </head>
  <body>
    <!-- Header -->
    <header class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container">
              <a class="navbar-brand animate__animated animate__heartBeat animate__infinite font-weight-bold" href="#">BONHOMIE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
          
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto text-center">
                <li class="nav-item ">
                  <a class="nav-link" href="../">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../sports/">Sports</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../technical">Technical</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="#">Cultural</a>
                </li>
              </ul>
            </div>
            </div>
          </nav>

        <!-- CAROUSEL -->
              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
           <img src="https://i.ibb.co/R66vqVQ/img1.jpg" class="d-block w-100 h-90 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
           <img src="https://i.ibb.co/DKHsn3X/img2.jpg" class="d-block w-100 h-90 img-fluid" alt="...">
          </div>
          <div class="carousel-item">
           <img src="https://i.ibb.co/84Mz4jp/img3.jpg" class="d-block w-100 h-90 img-fluid" alt="..." >
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev" >
          <span class="carousel-control-prev-icon" aria-hidden="true" style="background-color: #0984e3;padding: 5px; "></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="background-color: #0984e3;"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
        <!-- CAROUSEL -->
    </header>
    <!-- Header -->

    <!-- Sports -->

    <section id="events" class="events">

        <div class="container">
            <h1 class="text-center text-dark font-weight-bold my-5">Cultural Events</h1>
            <div class="row text-center mx-auto w-100">
                <div class="col my-5 text-center w-100" title="Hover on image to register">
                  <div class="card card1 text-dark mx-auto" id="card2" style="width: 18rem;">
                      <div class="cardheader">
                        <img class="img-fluid" src="https://svgshare.com/i/STL.svg" alt="">
                          <div class="caption">
                              <h2 class="text-center font-weight-bold text-white">Qira't</h2>
                              <a href="../sports/registration.php">Register</a>
                          </div>
                      </div>
                    <div class="card-body">
                        <h3 class="text-center font-weight-bold my-2">Qira't</h3>
                        <p class="text-center">Bonhomie has a quite good Qira't event every year.</p>
                    </div>
                 </div>
                </div>
                <div class="col my-5 text-center w-100" title="Hover on image to register">
                  <div class="card text-dark mx-auto" id="card2" style="width: 18rem;">
                      <div class="cardheader">
                        <img class="img-fluid" src="https://telegra.ph/file/f0deb095b9eeadc95af5c.png" alt="">
                          <div class="caption">
                              <h2 class="text-center font-weight-bold text-white">Mushaira</h2>
                              <a href="../sports/registration.php">Register</a>
                          </div>
                      </div>
                    <div class="card-body">
                        <h3 class="text-center font-weight-bold my-2">Mushaira</h3>
                        <p class="text-center">Bonhomie has a quite good Mushaira event every year.</p>
                    </div>
                 </div>
                </div>
                <div class="col my-5 text-center w-100" title="Hover on image to register">
                  <div class="card card3 text-dark mx-auto" id="card2" style="width: 18rem;">
                      <div class="cardheader">
                        <img class="img-fluid" src="https://svgshare.com/i/SSs.svg" alt="">
                          <div class="caption">
                              <h2 class="text-center font-weight-bold text-white">Speech</h2>
                              <a href="../sports/registration.php">Register</a>
                          </div>
                      </div>
                    <div class="card-body">
                        <h3 class="text-center font-weight-bold my-2">Speech</h3>
                        <p class="text-center">Bonhomie has a quite good Speech event every year.</p>
                    </div>
                 </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Sports -->

   <!-- Footer -->
    <section class=" mt-5" id="footer">
      <div class="container">
          <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4 mb-4">
              <h3 class="font-weight-bold my-3 text-light">Quick links</h3>
              <ul class="list-unstyled quick-links">
                <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Events</a></li>
                <li><a href="../login/"><i class="fa fa-angle-double-right"></i>Login</a></li>
                <li><a href="../register/"><i class="fa fa-angle-double-right"></i>Register</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4 mb-4">
              <h3 class="font-weight-bold my-3 text-light">Quick links</h3>
              <ul class="list-unstyled quick-links">
                <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Events</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Login</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Register</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <h3 class="font-weight-bold my-3 text-light">Quick links</h3>
              <ul class="list-unstyled quick-links">
                <li><a href=""><i class="fa fa-angle-double-right"></i>Home</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Events</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Login</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i>Register</a></li>
              </ul>
            </div>
          </div>
          <div class="info">
                <h6 class="text-center text-grey" style="color: #CFCFCF;">Managed By : Sakib Arkate | Siddiqui Affan | Siddiqui Sufiyan</h6>
          </div>
      </div>
    </section>
    <!-- Footer -->
    <script>
     $('.col').tooltip({show: {effect:"none", delay:0}});
    </script>
   </body>
</html>