<?php

require '../inc/init.php';
require '../inc/database.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign In</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link href="../assets/vendor/fontawesome/css/all.css" rel="stylesheet">
    <link href="../assets/vendor/vue-loading-overlay/vue-loading.css" rel="stylesheet">
    <!--load all styles -->
</head> 
<body class="multicoin-body">
  <div id="root" class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;position: relative;">
      <div class="col-lg-6 col-sm-12 col-md-9 col-md-auto">
        <div class="d-flex justify-content-md-center p-2 w-100 bd-highlight mb-4">
          <div class="bd-highlight blue pr-2 t-bold">coinbase</div>
          <div class="bd-highlight pl-2" style="border-left: 1px solid #6c757d;">Commerce</div>
        </div>

        <div class="card shadow-sm">
          <div class="card-header bg-white p-3">
            <h5 class="card-title m-0 pl-3">Sign In</h5>
          </div>
          <div class="card-body">
            <form action="sign-in.php" method="post">
              <div class="form-group m-3">
                <div class="input-group mb-4">
                  <!-- <div class="input-group-prepend">
                    <div class="input-group-text"><i class="far fa-envelope"></i></div>
                  </div> --> 
                  <input type="email" name="email" class="form-control" placeholder="Your email address">
                </div>
                <div class="input-group mb-4">
                  <input type="password" name="password" class="form-control" placeholder="Your password">
                </div>
              </div>
              <div class="form-group m-3">
                <button class="btn btn-primary btn-block" v-on:click="">Sing In</button>
              </div>
            </form>
            <div class="m-3">
              <div class="d-flex justify-content-between">
                <p>Don't have an account?</p>
                <a href="sign-up.php">Create an account</a>
              </div>
              <div class="d-flex justify-content-between">
                <p>Forgot your password?</p>
                <a href="reset-password.php">Reset your password</a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="footer row justify-content-center">
        <div class="col-lg-6 col-sm-12 col-md-9">
          <div class="d-flex justify-content-between py-2" style="border-top: 1px solid #6c757d;">
            <div>
              Terms of Service
            </div>
            <div>
              Privacy Policy
            </div>
            <div>
              <span class="pr-1">@ Coinbase</span>
              <span class="pl-1" style="border-left: 1px solid;">Commerce</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src='../assets/js/jquery.min.js'></script>
  <script src="../assets/js/popper.min.js"></script>
  <script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="../assets/vendor/vue/vue.js"></script>
  <!--Do not remove-->

</body>

</html>
