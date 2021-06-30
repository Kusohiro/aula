<!doctype html>
<html>
<head>
<meta charset="utf-8">
	<?php 
	$jogador = "";
if(isset($_GET['jogador'])){
    $jogador = $_GET['jogador'];
}
	$nun = "";
if(isset($_GET['nun'])){
    $nun = $_GET['nun'];
}
	?>
<title>jogo de cartas simples</title>
<link href="css jogo cartas.css" rel="stylesheet" type="text/css">
<?php 
	include_once 'function.php' 
	?>
</head>

<body>
	<form method="get" action="">
	<label for="jogador"> Jogador: </label>
	<input type="text" name="jogador" value="<?php echo $jogador ?>" id="jogador" />
		<br>
	<select name="nun" id="nun">
	<option value=2>2</option>	
	<option value=3>3</option>
	<option value=4>4</option>
	<option value=5>5</option>
	<option value=6>6</option>
	</select>
		<br>
	<input type="submit" value="sortear">
	</form>
	<?php
	$b=sortear($nun);
	var_export($b, true);	
	echo $jogador,", ", $nun;
	?>
</body>
</html>