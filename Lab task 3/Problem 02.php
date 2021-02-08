<?php

$mark=90;
if ($mark >= "90" ) {
  echo "A+";
} elseif ($mark >= "80" && $mark <"90") {
  echo "A";
}
   elseif ($mark >= "70" && $mark <"80") {
  echo "B"; 
   }
   elseif ($mark >= "60" && $mark <"70") {
  echo "C";
   }
  
  else {
  echo "F";
}

?>