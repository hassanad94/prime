<div class="content">
	<form method="GET" action="" name="primeForm">
		<input id="primeInput" class="prime_input" type="text" placeholder=" Hanyadik Primszám?" name="prime_textbox" /></br>
			<div class="num-table" >
				<table  style="margin:auto;">
					<tr>
						<td><span onclick="updateInput(1)" class="num-button"> 1 </span></td>
						<td><span onclick="updateInput(2)" class="num-button"> 2 </span></td>
						<td><span onclick="updateInput(3)" class="num-button"> 3 </span></td>
					</tr>
					<tr>
						<td><span onclick="updateInput(4)" class="num-button"> 4 </span></td>
						<td><span onclick="updateInput(5)" class="num-button"> 5 </span></td>
						<td><span onclick="updateInput(6)" class="num-button"> 6 </span></td>
					</tr>
					<tr>
						<td><span onclick="updateInput(7)" class="num-button"> 7 </span></td>
						<td><span onclick="updateInput(8)" class="num-button"> 8 </span></td>
						<td><span onclick="updateInput(9)" class="num-button"> 9 </span></td>
					</tr>
				</table>
			</div>
			<span onclick="primeForm.submit()" onSubmit="" id="submitButton" class="submit-button"> Nyomj Meg </span>
	</form>
<!--Form scriptjei-->
<script type="text/javascript" src="js/form-functions.js"></script>



</div>
