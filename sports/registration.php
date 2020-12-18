<!doctype html>
<html lang="en">
  <head>
  <?php
     include('links/links.php');
     include('style/style.php'); 

    ?>


   <title>Event Registration</title>
  </head>
  <body>
    
    <header class="header mb-5">
      <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand animate__animated animate__heartBeat animate__infinite font-weight-bold " href="..">BONHOMIE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item ml-1">
              <a class="nav-link active" href="..">Home</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="#events">Events</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="sports/">Sports</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="technical/">Technical</a>
            </li>
            <li class="nav-item ml-1">
              <a class="nav-link" href="cultural/">Cultural</a>
            </li>
          </ul>
        </div>
        </div>
      </nav>
      <!-- NAVBAR  -->
    </header>
<h2 class="text-center pt-4">Bonhomie Event Registration</h2>
    <section class="my-5 main">
      
        <form action="code.php" method="POST" >
          <div class="text-center mb-4">
            <i class="far fa-user-circle fa-6x" aria-hidden="true"></i>
          </div>
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fa fa-user" aria-hidden="true"></i>
          </span>
          <input  type="text" name="fullname" placeholder="Full Name" required />
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fas fa-phone"></i>
          </span>
          <input name="wnumber" type="text" placeholder="Contact No (WhatsApp)"required >
        </div>
        
        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fa fa-book"></i>
          </span>
          <input name="department" type="text" placeholder="Department"required >
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fa fa-graduation-cap"></i>
          </span>
          <input name="year" type="text" placeholder="Year"required >
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fa fa-trophy"></i>
          </span>
          <input name="sports" type="text" placeholder="Sport Name Acc To Rule Book" title="Enter sport name according to Rule Book."required >
        </div>

        <div class="input-group mb-3">
          <span class="input-group-text" id="basic-addon1">
            <i class="fa fa-users"></i>
          </span>
          <input name=players_name type="text" placeholder="Players separated by ," title="Enter sport name according to Rule Book."required >
        </div>

        <div class="col btns">
          <input type="reset" class="btn">
          <input type="submit" class="btn" name="event_regbtn" value="Register" />
        </div>
      </form>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
   </body>
</html>