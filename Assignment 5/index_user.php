<?php
session_start();



// if (!isset($_SESSION['username_user'])) {
//   header('location: login.php');
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .table1 {
      margin-top: 10rem;
    }
  </style>
</head>

<body>
  <section>
    <div class="container">
      <div class="row justify-content-center align-items-center">
        <div class="col-8">
          <div class="table1">

            <h2>A Role Management Project</h2>
            <p>Welcome, <?php echo (isset($_SESSION['email_user'])) ?  $_SESSION['username_user'] : 'GUEST'  ?></p>
            <div class="d-flex justify-content-between">
              <div>
                <!-- <a href="">All Students</a> -->
                <!-- <span> | </span> -->
                <!-- <a href="registration.php">Add new User</a> -->
              </div>

              <!-- Display login and Logout button based on Session -->
              <div>
                <?php
                if (!isset($_SESSION['email_user']))
                  echo '<a href="login.php"><button class="btn btn-primary btn-sm">Login</button></a>';
                else
                  echo '<a href="logout.php"><button class="btn btn-primary btn-sm">Logout</button></a>';
                ?>


              </div>
            </div>

            <hr>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Serial</th>
                  <th scope="col">Username</th>
                  <th scope="col">Email</th>
                  <th scope="col">Role</th>

                </tr>
              </thead>
              <tbody>


                <?php
                $db =  fopen("db.txt", "r");
                $c = 0;
                while ($line = fgetcsv($db)) :

                  $c = $c + 1;
                ?>
                  <tr>

                    <th scope="row"><?php echo $c ?></th>
                    <td><?php echo $line[0] ?></td>
                    <td><?php echo $line[1] ?></td>
                    <td><?php echo $line[3] ?></td>
                    <!-- <td><a href=""><button class="btn btn-sm btn-primary">Edit</button></a><span> | </span><a href=""><button class="btn btn-sm btn-primary">Delete</button></a><span> | </span><a href=""><button class="btn btn-sm btn-primary">Make Admin</button></a></td>; -->





                  </tr>
                <?php endwhile; ?>
                <!-- <br> -->

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>