<?php 

function fibonacci($num) {
    $a = 0;
    $b = 1;
    for ($i = 0; $i < $num; $i++) {
      echo $a . " ";
      $temp = $a;
      $a = $b;
      $b = $temp + $b;
    }
  }
  
  fibonacci(10);

?>