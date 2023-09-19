<!-- Write a PHP function that uses a for loop to print all even numbers from 1 to 20, but with a
step of 2. In other words, you should print 2, 4, 6, 8, 10, 12, 14, 16, 18, 20. The function
should take the arguments like start as 1, end as 20 and step as 2. You must call the
function to print.
Also do the same using while loop and do-while loop also. -->
<?php

// For loop
function evenNumberForLoop($start, $end, $step)
{
  for ($i = $start + 1; $i <= $end; $i = $i + $step) {

    echo $i . " ";
  }
}

echo "Even numbers using for loop: ";
evenNumberForLoop(1, 20, 2);

// while Loop
function evenNumberWhileLoop($start, $end, $step)
{
  $i = $start + 1;
  while ($i <= $end) {
    echo $i . " ";

    $i = $i + $step;
  }
}
echo "\nEven numbers using While loop: ";
evenNumberWhileLoop(1, 20, 2);


// do-while Loop
function evenNumberDoWhileLoop($start, $end, $step)
{
  $i = $start + 1;
  do {
    echo $i . " ";

    $i = $i + $step;
  } while ($i <= $end);
}
echo "\nEven numbers using do-While loop: ";
evenNumberDoWhileLoop(1, 20, 2);

?>