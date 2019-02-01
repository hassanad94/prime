<div class="result-box">
	<div class="center-result-box">
		<?php
		$prim_num_obj = new PrimeNumber;
		if(isset($_GET['prime_textbox']))
		{
		$prime_number=intval($_GET['prime_textbox']);
		
		if($prime_number > 0 && $prime_number <=1000 && $_GET['prime_textbox'] !='' ){
		$prim_num_obj->setPrime($prime_number);
		?>
		<H2 id="resultTitle">The <?php echo $prime_number.'. '; ?> Prime number</H2></br>
		<p id="prime-number-text"> <?php echo $prim_num_obj->getPrime().' ' ;  
		?></p>
		<?php
		}}
		else{
		?>
			<H2 id="resultTitle">Writte A Number Get A Prime.</H2>
		<?php
			}
		?>
		
		
	</div>
</div>