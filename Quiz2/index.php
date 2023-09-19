<!-- Create a PHP script using a loop to print all even numbers between 1 and 10. -->

<?php

for($i=2;$i<=10;$i=$i+2)
{
   echo "\n". $i;
}



//  Declare a function named 'greet' that takes one parameter, 'name'. The function should print a greeting message with the name passed to it when it is called 


function greet($name)
{
   echo $name;
}

greet("\nGood Afternoon,Sabbir!");


// Create a recursive function called 'factorial' in PHP that calculates and returns the factorial of a number


function factorial($n) {
  if ($n <= 1) {
      return 1; 
  } else {
      return $n * factorial($n - 1); 
  }
}

$number = 6; 
$result = factorial($number); 

echo "Factorial of $number is $result";


// Write a PHP function named 'fibonacci' that prints the Fibonacci series up to 10 numbers.


function printFibonacci($numbers)
{
  $firstNumber= 0;
  $secondNumber=1;

 
  echo "\n". $firstNumber;
  echo "\n". $secondNumber;

  for($i=0; $i<$numbers-2; $i++)
  {
    $nextNum= $firstNumber+ $secondNumber; 

     $firstNumber=$secondNumber;
     $secondNumber=$nextNum;
      
     echo "\n".$nextNum;
  }
}

printFibonacci(10);