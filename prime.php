<?php
class PrimeNumber
{
	public $prime=0;

	public function is_prime($number){
		$divider = 0;
		for($i=1;$i<=$number;$i++)
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
	
	public function get_prime_number($number){
		$i=1;
		$counter = 0;
		do{
			$i++;
			if($this->is_prime($i)== true)
			{
				$counter++;
			}
		}while($number != $counter);
		return $i;
	}
	public function setPrime($number){
		$return_num = $this-> get_prime_number($number);
		$this->prime = $return_num;
	}
	public function getPrime()
	{
		return $this->prime;
	}
}



?>