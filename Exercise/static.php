<?php
function countFunc()
{
  static $count=0;
  $count++;
  echo $count ."\n";
}

countFunc();
countFunc();
countFunc();
?>