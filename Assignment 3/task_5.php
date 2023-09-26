<!-- Task 5: Password Generator


Create a PHP function called generatePassword($length) that generates a random password of the specified length. 
The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
 Write a PHP program to generate a password with a length of 12 characters using this function and print the password. -->
<?php


function generatePassword($length)
{
  $randomNmber = '';
  $lowerCase = "abcdefghijklmnopqrstuvwxyz1234567890";
  $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $specialChar = "!@#$%^&*()_+";

  $allChars = $lowerCase . $upperCase . $specialChar;


  for ($i = 0; $i < $length; $i++) {

    $randomNmber .= $allChars[rand(0, strlen($allChars) - 1)];
  }
  echo $randomNmber;
}
generatePassword(12);
