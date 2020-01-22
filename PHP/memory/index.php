<?php
//connect bdd

ini_set("display_errors", 1);
error_reporting(E_ALL);


session_start();

require "conf/bdd.php";


require "class/bdd.php";

$db = new Db();

if(isset($_GET["dec"]))
{
    $_SESSION["isConnected"] = false;
}

if(!isset($_SESSION["isConnected"])) $_SESSION["isConnected"] = false;

require "parts/header.php";

if(isset($_GET["page"])) {

    $page = "pages/".$_GET["page"].".php";

    if (file_exists($page)) {
        require $page;
    } else {
        require "pages/404.php";
    }

} else {
    require "pages/home.php";
}


require "parts/footer.php";



  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

        </div>
      </div>
    </div>
  </section>

 

