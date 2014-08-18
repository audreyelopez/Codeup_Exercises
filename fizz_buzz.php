<?php
for ($i = 0; $i <= 100; $i++) {
   if ($i % 3 ==0 && $i % 5 ==0) {
    echo "SCOOBY DOOBY DOO!!!\n";
   } 
   elseif ($i % 3 ==0) {
   	echo "SCOOBY\n";
   }
   elseif ($i % 5 ==0) {
   	echo "DOOBY\n";
   }
   else { 
    echo "{$i}\n";
   } 
}






?>

