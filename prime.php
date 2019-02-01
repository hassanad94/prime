<?php
$primes = array();

	function is_prime($number){
		$divider = 0;
		for($i=1;$i<=$number;$i++)
		{
			if($number % $i ==0 )
			{
				$divider++;
			}
			if($divider>2 || $number/2 == $i)
			{
				return false;
			}
		}
		return true;
	}
	function update_primes_array(){
		$i=1;
		$match=0;
		$counter = 0;
		do
		{
			$i++;
			if(is_prime($i)== true)
			{
				$primes[] = $i;
				$match++;
			}
			
		}while($match != 1000);
	}

	
?>