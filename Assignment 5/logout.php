<?php

session_start();



if (isset($_SESSION['username_admin'])) {
  session_destroy();
  header("location: index_user.php");
} else {

  session_destroy();
  header("location: index_user.php");
}
