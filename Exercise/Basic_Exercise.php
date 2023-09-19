<!-- big number among 5 numbers -->

<?php 

$a=1;
$b=2;
$c=3;
$d=4;
$e=5;

$largest= $a;

if($b>$largest )
{
  $largest=$b;
}
 if($c>$largest)
{
  $largest= $c;
}

 if($d>$largest)
{
  $largest= $d;
}

if($e>$largest)
{
  $largest= $e;
}

echo "Largest number is $largest";
?>


<!-- Smallest among 5 numbers -->

<?php 

$a=1;
$b=2;
$c=3;
$d=4;
$e=5;

$small= $a;

if($b<$small )
{
  $small=$b;
}
 if($c<$small)
{
  $small= $c;
}

 if($d<$small)
{
  $small= $d;
}

if($e<$small)
{
  $small= $e;
}

echo "<br>Smallest number is $small";

//Write a program to calculate the factorial of a given number.

$number=5;
$factorial=1;
for($i=1;$i<=$number; $i++)
{
   $factorial= $factorial* $i;
}
echo "<br> Factorial= $factorial";


//Palindrome Check

$x=445;

$rev= strrev($x);

if($x==$rev)
{
  echo "<br> palindrom";
}
else
echo "<br>not palindrom";

// prime number


