<!-- Task 1: String Manipulation
Create a string variable called $text with the
 value "The quick brown fox jumps over the lazy dog.". Write a PHP function which takes "$text" as an argument to:

Convert the string to all lowercase.
Replace "brown" with "red" in the string.
Print the modified text -->

<?php

$text = "The quick brown fox jumps over the lazy dog.";

function modifiedText($text)
{
  // convert string to all lowercase.
  $convertLower = strtolower($text);
  // replace brown with red in the string.
  $modifiedText = str_replace("brown", "red", $convertLower);

  echo $modifiedText;
}
// call the function with string $text as an argument. 
modifiedText($text);

?>