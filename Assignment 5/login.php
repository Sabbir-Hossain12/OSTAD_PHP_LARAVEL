<?php

session_start();

$db =  fopen("db.txt", "r");

if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = trim($_POST['email']) ?? "";
  $password = trim($_POST['password']) ?? "";
  $errorMessage = false;
  while ($line = fgetcsv($db)) {



    // redirect user to admin or user page
    if ($email == trim($line[1]) && $password == trim($line[2])) {
      if (trim($line[3]) == "admin") {

        $_SESSION['email_admin'] = $email;
        $_SESSION['username_admin'] = strtoupper(trim($line[0]));
        $_SESSION['role'] = trim($line[3]);
        header("location: index_admin.php");
      } else {

        $_SESSION['email_user'] = $email;
        $_SESSION['username_user'] = strtoupper(trim($line[0]));
        header("location: index_user.php");
      }
    } else {
      $errorMessage = true;
    }
  }
}


?>








<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css" rel="stylesheet" />
</head>

<body>

  <section class="vh-100" style="background-color:#eee ;">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0 justify-content-center align-items-center">

              <div class="col-md-6 col-lg-5 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form action="login.php" method="post">

                    <div class="d-flex align-items-center justify-content-center mb-5 pb-1">
                      <!-- <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i> -->
                      <span class="text-center h1 fw-bold mb-0 center">Login</span>
                    </div>

                    <!-- <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5> -->

                    <div class="form-outline mb-4">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" name="email" />
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" name="password" />
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" type="submit" name="login">Login</button>
                    </div>
                    <?php
                    if (isset($_POST['login']) && $errorMessage) :
                    ?>
                      <div class="alert alert-primary" role="alert">
                        Wrong Email or password!
                      </div>
                    <?php endif ?>
                    <!-- <a class="small text-muted" href="#!">Forgot password?</a> -->
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="registration.php" style="color: #393f81;">Register here</a></p>
                    <h5>admin@admin.com</h5>
                    <p>123456</p>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"></script>
</body>

</html>