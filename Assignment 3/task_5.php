<!-- Task 5: Password Generator


Create a PHP function called generatePassword($length) that generates a random password of the specified length. 
The password should include lowercase letters, uppercase letters, numbers, and special characters (!@#$%^&*()_+).
 Write a PHP program to generate a password with a length of 12 characters using this function and print the password. -->
<?php


function generatePassword($length)
{
  // initialize a null variable
  $randomPass = '';

  // Made 4 string variable based on conditions of password
  $lowerCase = "abcdefghijklmnopqrstuvwxyz";
  $numbers = "1234567890";
  $upperCase = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
  $specialChar = "!@#$%^&*()_+";
  $allChar = $lowerCase . $numbers . $upperCase . $specialChar;

  // loop 
  for ($i = 0; $i < $length; $i++) {
    $randomPass .= $allChar[rand(0, strlen($allChar) - 1)];
  }
  $newrandomPass = str_shuffle($randomPass);

  // Check for lowercase,uppercase,number and special character.
  $hasLowercase = preg_match('~[a-z]~', $newrandomPass);
  $hasUppercase = preg_match('~[A-Z]~', $newrandomPass);
  $hasNumber    = preg_match('~[0-9]~', $newrandomPass);
  $hasSpecial   = preg_match('~[!@#$%^&*()_+]~', $randomPass);

  // if all match,return true
  if ($hasLowercase && $hasUppercase && $hasNumber && $hasSpecial) {
    // if matched, print the password.
    echo $randomPass;
  } else
    // if not matched,run the function again.
    return generatePassword(12);
}
// call the function with preferable passsword length.
generatePassword(12);
