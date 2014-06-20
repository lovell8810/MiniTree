<?php
function sum_(){
	$sum = 0;
	for ($i=0; $i < 100; $i++) { 
		$sum += $i;
	}
	echo $sum;
}

sum_();
?>