<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>About Us</title>

    <?php
 
  
  include('css/style.php');
  include('link/link.php');
  ?>

</head>
<body>
    <header class="header">
        <!-- NAVBAR -->
    <nav class="navbar navbar-expand-md navbar-dark  fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand animate__animated animate__heartBeat animate__infinite font-weight-bold " href=".." style="font-weight: bold;">BONHOMIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-1">
              <a class="nav-link" href="..">Home</a>
            </li>
           
            <li class="nav-item ml-1">
              <a class="nav-link" href="../sports">Sports</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="../technical">Technical</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="../cultural">Cultural</a>
            </li>
            <li class="nav-item ml-1">
                <a class="nav-link active">About Us</a>
              </li>
          </ul>
        </div>
        </div>
      </nav>
      <!-- NAVBAR  -->

      <div class="header-bg">
        <div class="headerpart">
            <div class="center_div">
              <p class="text-center fw-bolder" style="color:rgb(255, 255, 255);">OUR TEAM</p>
              <h4 class="text-center">The BONHHOMIE project is brought to you by our awsome team!</h4>
            </div>
        </div>
      </div>
    </header>

    <section class="team py-5">
      <h1 class="text-center mt-5">Team Members</h1>
      <div class="container team-container">
        <div class="row">
          <div class="col">
            <div class="user-card">
              <div class="card-content">
                <figure class="front">
                  <img src="affan.jpg" class="img-fluid" alt="">
                </figure>
                <figure class="back">
                  <h3 class="text-center">Siddiqui Affan</h3>
                  <h4 class="text-center text-muted">18CO57</h4>
                  <div class="icons">
                    <i class="far fa-envelope fa-2x" onclick="window.open('mailto:siddiquiaffan201@gmail.com')"></i>
                    <i class="fab fa-github fa-2x" onclick="window.open('https://github.com/affanthebest')"></i>
                  </div>
                </figure>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="user-card">
              <div class="card-content">
                <figure class="front">
                  <img src="sakib.jpg" class="img-fluid" alt="">
                </figure>
                <figure class="back">
                  <h3 class="text-center">Arkate Sakib</h3>
                  <h4 class="text-center text-muted">18CO19</h4>
                  <div class="icons">
                    <i class="far fa-envelope fa-2x" onclick="window.open('mailto:sakibarkate152001@gmail.com')"></i>
                    <i class="fab fa-github fa-2x" onclick="window.open('https://github.com/WHITEDEVIL2601')"></i>
                  </div>
                </figure>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="user-card">
              <div class="card-content">
                <figure class="front">
                  <img src="sufiyan.jpg" class="img-fluid" alt="">
                </figure>
                <figure class="back">
                  <h3 class="text-center">Siddiqui Sufiyan</h3>
                  <h4 class="text-center text-muted">18CO59</h4>
                  <div class="icons">
                    <i class="far fa-envelope fa-2x" onclick="window.open('mailto:siddiquesufiyan571@gmail.com')"></i>
                    <i class="fab fa-github fa-2x" onclick="window.open('https://github.com/Sufiyan571')"></i>
                  </div>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <div class="d-flex justify-content-center align-items-center my-5">
      <a href="../" class="btn btn-outline-primary back-btn">  <i class="fas fa-reply"></i> Back to home  </a>
    </div>

    <script>
      document.querySelector(".fa-github").addEventListener('click', () => {
        window.open("https://drive.google.com/file/d/1OhW5SGh6DT4piz5wr246G_XZEbe0LH6_/view");
      })
    </script>

    </body>
</html>