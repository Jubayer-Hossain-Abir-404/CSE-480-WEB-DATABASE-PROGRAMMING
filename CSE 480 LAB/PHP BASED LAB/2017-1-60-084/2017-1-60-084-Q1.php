<?php

function sum_of_prime($num1,$num2){
	$sum=0;
	$c=0;
	for($i=$num1;$i<=$num2;$i++){
		for($j=2;$j<$i/2;$j++){
			if($i%$j==0){
				$c=1;
                break;
			}
		}
		if($c==0){
			$sum=$sum+$i;
		}
        $c=0;
	}
	return $sum;
}

echo sum_of_prime(1000,3000);


?>