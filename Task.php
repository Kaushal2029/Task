<?php
$x=1;
$count;
$sum;

while(true){

   $x=readline("Enter number (0 for exit)");
    if ($x == 0){
        break;
    }
    $count++;
    $sum += $x;
    }
echo "Count is " . $count . PHP_EOL;
echo "Sum is " . $sum  . PHP_EOL;


?>