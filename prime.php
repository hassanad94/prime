<?php
$primes = array();

	function is_primre($number){
		$divider = 0;
		$i=0;
		do{
			if($number % $i ==0 )
			{
				$divider++;
				$i++;
			}
			else
			{
				$i++
			}
		}while($divider <3)
			return false;
	}
	function update_primes_array(){
		
	}
?>