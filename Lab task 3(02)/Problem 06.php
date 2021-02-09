<?php
$org = array( 1,2,3,4,5 );
echo 'Original array : '."<br>";
foreach ($org as $x) 
{
	echo "$x ";
	}
$insert = '$';
array_splice( $org, 3, 0, $insert ); 
echo " <br> After inserting '$' the array is : "."<br>";
foreach ($org as $x) 
{
	echo "$x ";
	}
	

?>