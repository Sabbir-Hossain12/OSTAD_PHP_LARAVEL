

<?php
// Sum of even number

$sum = 0;
for ($i = 0; $i < 100; $i = $i + 2) {
  if ($i == 6) {
    continue;
  }

  $sum = $sum + $i;
}

echo "SUM:  " . $sum . "\n";


// Sum of Digits (String)
$y = "1234";
$length = strlen($y);

$sum = 0;
for ($i = 0; $i < $length; $i++) {
  $sum = $sum + $y[$i];
}

echo "\nSum of the Digits: " . $sum;


// Sum of Digits (integer)

$z = 1234;
$sum = 0;
while ($z > 0) {
  // last digit
  $digit = $z % 10;

  $sum += $digit;

  $z = $z / 10;
}

echo "\nSum of Digits: " . $sum;


// Fibonacchi numbers


$f = 9;
$firstNumber = 0;
$secondNumber = 1;

for ($i = 0; $i < $f; $i++) {
  $thirdNumber = $firstNumber + $secondNumber;
  echo "\n" . $thirdNumber;
  $firstNumber = $secondNumber;
  $secondNumber = $thirdNumber;
}

?>