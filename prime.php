<?php
$primes = array();

	function is_prime($number){
		$divider = 0;
		for($i=1;$i<=$number/2;$i++)
		{
			if($number % $i ==0 )
			{
				$divider++;
			}
			if($divider>2)
			{
				return false;
			}
		}
		return true;
	}
	function update_primes_array(){
		
	}
?>