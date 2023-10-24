<?php
// DELETE A USER
if (isset($_POST['delete'])) {
  $targetUser = $_POST['username']; // Get the username from the hidden input field

  $lines = file('db.txt');
  $output = '';

  foreach ($lines as $line) {
    $data = str_getcsv($line);
    if ($data[0] === $targetUser) {
      continue; // Skip the line you want to delete
    }
    $output .= implode(',', $data) . "\n";
  }

  // Write the modified content back to the file, excluding the deleted user
  file_put_contents('db.txt', $output);
}
?>


<?php
//Edit a User


if (isset($_POST['update'])) {
  // $targetUser = $_POST['username'];
  $newusername = trim($_POST['uname']) ?? "";
  $newEmail = trim($_POST['uemail']) ?? "";
  $newPass = trim($_POST['upass']) ?? "";
  $newrPass = trim($_POST['urpass']) ?? "";
  $originalUsername = $_POST['Eusername'];

  if (!empty($newusername) && !empty($newEmail) &&  !empty($newPass) &&  !empty($newPass) && $newPass == $newrPass) {

    // echo $username;
    // echo $email;
    // echo $pass;
    // Read the file and store its content
    $lines = file('db.txt');
    $updatedContent = '';

    foreach ($lines as $line) {
      $data = str_getcsv($line);
      if ($data[0] === $originalUsername) {
        // Update user information
        $data[0] = $newusername;
        $data[1] = $newEmail;
        $data[2] = $newPass;
      }
      $updatedContent .= implode(',', $data) . "\n";
    }

    // Write the modified content back to the file
    file_put_contents('db.txt', $updatedContent);
  } else {
    echo "INVALID CREDENTIALS!";
    echo $_POST['Eusername'];
  }
}
