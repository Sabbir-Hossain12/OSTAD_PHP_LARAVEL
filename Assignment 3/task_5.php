<!-- Task 5: Password Generator


Create a PHP function called generatePassword($length) that generates a random password of the specified length. 
The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
 Write a PHP program to generate a password with a length of 12 characters using this function and print the password. -->
<?php


function generatePassword($length)
{
  // initialize a null variable
  $randomNumber = '';

  // Made 4 string variable based on conditions of password
  $lowerCase = "abcdefghijklmnopqrstuvwxyz";
  $numbers = "1234567890";
  $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $specialChar = "!@#$%^&*()_+";

  //newLength variable is divided by 4, because of 4 string variable above. 
  $newLength = $length / 4;

  //if loop will be run for $newLength time, if $length is 12, newLength is 3, so 4x3=12 characters will be generated.
  //in order to include all 4 kind of strings (lower,upper,number,special), we concatenate $lowerCase,$numbers $upperCase and $specialChar.
  for ($i = 0; $i < $newLength; $i++) {
    $randomNumber .= $lowerCase[rand(0, strlen($lowerCase) - 1)] .
      $numbers[rand(0, strlen($numbers) - 1)] .
      $upperCase[rand(0, strlen($upperCase) - 1)] .
      $specialChar[rand(0, strlen($specialChar) - 1)];
  }
  // used str_shuffle() function to shuffle the order of password.
  echo str_shuffle($randomNumber);
}
// call the function with preferable passsword length.
generatePassword(12);
