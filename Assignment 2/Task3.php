<!-- Write a PHP program that calculates and prints the first 10 Fibonacci numbers. But, if a
Fibonacci number is greater than 100, break out of the loop using the break statement. -->


<?php

$firstNumber=0;
$secondNumber=1;
echo $firstNumber."\n";
echo $secondNumber."\n";
$Numbers=10;
for($i=1;$i<=$Numbers-2;$i++)
{
  $nextNumber=$firstNumber + $secondNumber;

  if($nextNumber>100)
  {
    break;
  }
  $firstNumber= $secondNumber;
  $secondNumber= $nextNumber;

  echo $nextNumber. "\n";
}

?>