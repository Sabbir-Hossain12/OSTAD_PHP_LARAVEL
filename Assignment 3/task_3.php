<!-- Task 3: Array Sorting


Create an array called $grades with the following values: 85, 92, 78, 88, 95.
Write a PHP function which takes "$grades" as an argument to sort the array in descending order and print the sorted grades as array -->

<?php
$grades = [85, 92, 78, 88, 95];


function arraySorting($grades)
{
  // sorted array in descending order using rsort() function
  rsort($grades);

  // print the modified array using print_r() functions
  print_r($grades);
}

// call function as an argument $grades
arraySorting($grades);
