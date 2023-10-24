<?php
session_start();

require_once "functions.php";
// echo "hello " . $_SESSION['email'];

// cannot access admin page directly, Login first
// if (!isset($_SESSION['username_admin'])) {
//   header('location: login.php');
// }

if (isset($_POST['makeadmin']) && !$_POST['makeadmin']) {

  $targetUser = $_POST['username']; // Get the username from the hidden input field

  $lines = file('db.txt');
  $output = '';

  foreach ($lines as $line) {
    $data = str_getcsv($line);
    if ($data[0] === $targetUser) {
      $data[3] = 'admin'; // Update the role to 'admin'
    }
    $output .= implode(',', $data) . "\n";
  }

  // Write the modified content back to the file, overwriting the original content
  file_put_contents('db.txt', $output);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- boostrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <section>
    <div class="container og">
      <div class="row justify-content-center align-items-center">
        <div class="col-8">
          <div class="table1">

            <h1 class="my-3">A Role Management Project</h1>
            <p>Welcome, <?php echo (isset($_SESSION['email_admin'])) ?  $_SESSION['username_admin'] : 'GUEST'  ?></p>
            <div class="d-flex justify-content-between">
              <div>
                <!-- <a href="">All Students</a> -->
                <!-- <span> | </span> -->
                <a href="registration.php"> <button class="btn btn-primary btn-sm"> Add new User</button> </a>
              </div>

              <!-- Display login and Logout button based on Session -->
              <div>
                <?php
                if (!isset($_SESSION['email_admin']))
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
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>

                <!-- Show details table -->
                <?php
                $db =  fopen("db.txt", "r");
                $c = 0;
                while ($line = fgetcsv($db)) :

                  $c = $c + 1;
                ?>



                  <tr>

                    <th scope="row"><?php if (!empty($line[0])) {
                                      echo $c;
                                    } else {
                                      continue;
                                    } ?></th>
                    <td><?php if (!empty($line[0])) {
                          echo $line[0];
                        } else {
                          continue;
                        } ?> </td>
                    <td><?php echo $line[1] ?? "" ?></td>
                    <td><?php echo $line[3] ?? "" ?></td>
                    <form action="index_admin.php" method="post">
                      <input type="hidden" name="username" value="<?php echo $line[0]; ?>">

                      <td>
                        <?php
                        if (trim($line[3]) == "admin") {

                          echo '';
                        } else
                          echo '<button class="btn btn-sm btn-primary edit"  name="edit" >Edit</button> 
                        <a href=""><button class="btn btn-sm btn-primary" name="delete">Delete</button></a>
                        
                        <select name="roles" id="" class="form-select-sm">
                          <option value="toadmin">Change to Admin</option>
                          <option value="touser">Change to User</option>
                        </select>';
                        ?>
                        <!-- <button class="btn btn-sm btn-primary" name="makeadmin" type="submit">Make Manager</button> -->
                      </td>;
                    </form>





                  </tr>
                <?php endwhile; ?>
                <!-- <br> -->

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <form action="index" method="post" class="form-control-sm">

      </form>
    </div>

  </section>
  <!-- EDIT PROFILE UI -->
  <section class=" " id="custom-edit" hidden>

    <div class=" p-4 rounded" style="background-color:bisque">

      <form action="index_admin.php" method="post">
        <?php
        $db =  fopen("db.txt", "r");
       
        while ($line = fgetcsv($db)) :

          
        ?>
          <input type="hidden" name="Eusername" value="<?php echo $line[0]; ?>">

        <?php endwhile ?>
        <div class="form-outline mb-4">
          <input type="text" name="uname" id="form3Example1cg" class="form-control form-control-lg" />
          <label class="form-label" for="form3Example1cg">Updated Username</label>
        </div>

        <div class="form-outline mb-4">
          <input type="email" name="uemail" id="form3Example3cg" class="form-control form-control-lg" />
          <label class="form-label" for="form3Example3cg">Updated Email</label>
        </div>

        <div class="form-outline mb-4">
          <input type="password" name="upass" id="form3Example4cg" class="form-control form-control-lg" />
          <label class="form-label" for="form3Example4cg">Updated Password</label>
        </div>

        <div class="form-outline mb-4">
          <input type="password" name="urpass" id="form3Example4cdg" class="form-control form-control-lg" />
          <label class="form-label" for="form3Example4cdg">Repeat your password</label>
        </div>

        <div class="form-outline mb-4">

          <select name="roles" id="" class="form-select">
            <option value="toManager">Change to Manager</option>
            <option value="toUser">Change to User</option>
          </select>
          <label class="form-lebel">Change Roles</label>
        </div>


        <div class="d-flex justify-content-center my-4">
          <button type="submit" name="update" class="btn btn-sm btn-primary ">Update Profile</button>
        </div>




      </form>
    </div>


  </section>
  <script src="./JS/admin.js"> </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>