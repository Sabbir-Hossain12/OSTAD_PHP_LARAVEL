<?php

$line = file("db.txt");

// print_r($line[0]);

foreach ($line as $line) {
  $new= str_getcsv($line) ;

  print_r($new);
}
