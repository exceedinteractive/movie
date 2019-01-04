<?php
// Start session
session_start();
// Load config 
require_once($_SERVER['DOCUMENT_ROOT'] . '/resources/config.php');
// Load page
require_once(LIBRARY_PATH . '/class.page.php');
$page = new page('MovieWeb - Login');
?>
<div id="container">
  <div id="content">
    <!-- Page content -->
    <section class="login-block">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-4 login-sec">
            <h2 class="text-center">Login Now</h2>
            <div class="row">
              <div class="col-lg-12">
                <!-- Status messages -->
                <?php if(isset($_SESSION['message'])){ ?>
                <div class="alert alert-info">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <?php echo $_SESSION['message']; ?>
                </div>
                <?php unset($_SESSION['message']); } ?>
              </div>
            </div>
            <form class="login-form" action="action.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1" class="text-uppercase">Username</label>
                <input type="text" class="form-control" name="user" placeholder="">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1" class="text-uppercase">Password</label>
                <input type="password" class="form-control" name="pass" placeholder="">
              </div>
              <div class="form-check">
                <button type="submit" name="login" class="btn btn-login float-right">Submit</button>
              </div>
            </form>
            <!--<div class="copy-text">Created with <i class="fa fa-heart"></i> by <a href="http://grafreez.com">Grafreez.com</a></div>-->
          </div>
          <div class="col-md-8 banner-sec">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="d-block img-fluid" src="http://movieweb.local/img/slide_1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="http://movieweb.local/img/slide_2.jpg" alt="First slide">
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>
  </div>
</div>