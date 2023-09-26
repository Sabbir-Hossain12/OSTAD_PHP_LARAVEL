<!-- Task 2: Array Manipulation


Create an array called $numbers containing the numbers 1 to 10. Write a PHP function which takes the "$numbers" array 
as an argument to remove the even numbers from the array and print the resulting array -->

<?php


$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function removeEvenNumber($numbers)
{
  // only returns odd number
  
    return ($numbers % 2 != 0);
  
}
//remove the even numbers by using array_filter function.
$ManipulatedArray = array_filter($numbers, "removeEvenNumber");

print_r($ManipulatedArray);


?>