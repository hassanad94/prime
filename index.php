<?php
require_once("prime.php");
update_primes_array();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>prime game</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
<?php
/*navbar*/
include("navbar.php");
?>

<div class="content">

<form method="GET" action="">
	<input class="prime_input" type="text" placeholder=" Hanyadik Primszám?" name="prime_textbox" /></br>
		<div class="num-table" >
			<table  style="margin:auto;">
				<tr>
					<td><span onclick="update-input(1)" class="num-button"> 1 </span></td>
					<td><span onclick="update-input(2)" class="num-button"> 2 </span></td>
					<td><span onclick="update-input(3)" class="num-button"> 3 </span></td>
				</tr>
				<tr>
					<td><span onclick="update-input(4)" class="num-button"> 4 </span></td>
					<td><span onclick="update-input(5)" class="num-button"> 5 </span></td>
					<td><span onclick="update-input(6)" class="num-button"> 6 </span></td>
				</tr>
				<tr>
					<td><span onclick="update-input(7)" class="num-button"> 7 </span></td>
					<td><span onclick="update-input(8)" class="num-button"> 8 </span></td>
					<td><span onclick="update-input(9)" class="num-button"> 9 </span></td>
				</tr>
			</table>
		</div>
		<span onclick="submit()" class="num-button"> Nyomj Meg </span>
</form>
</div>
</div>

</body>
</html>