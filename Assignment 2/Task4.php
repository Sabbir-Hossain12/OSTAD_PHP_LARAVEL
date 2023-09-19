<!-- Write a PHP function to print the first 15 numbers in the Fibonacci series. You should take
this 15 as an argument of a function and use a for loop to generate these numbers and print
them by calling the function.-->

<?php
function printFibonacci($numbers)
{


  $firstNumber = 0;
  $secondNumber = 1;

  // for only 1 numbers
  if ($numbers == 1) {

    echo $firstNumber . "\n";
  }
  // numbers greater than 1
  if ($numbers > 1) {

    echo $firstNumber . "\n";
    echo $secondNumber . "\n";

    for ($i = 1; $i <= $numbers - 2; $i++) {
      $nextNumber = $firstNumber + $secondNumber;


      $firstNumber = $secondNumber;
      $secondNumber = $nextNumber;

      echo $nextNumber . "\n";
    }
  }
}


printFibonacci(15);
?>