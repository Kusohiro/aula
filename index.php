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
	$naipe = "";
if(isset($_GET['naipe'])){
    $naipe = $_GET['naipe'];
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
	<option value=2 <?php if($nun == 2) echo "selected" ;?>>2</option>	
	<option value=3 <?php if($nun == 3) echo "selected" ;?>>3</option>
	<option value=4 <?php if($nun == 4) echo "selected" ;?>>4</option>
	<option value=5 <?php if($nun == 5) echo "selected" ;?>>5</option>
	<option value=6 <?php if($nun == 6) echo "selected" ;?>>6</option>
	</select>
		<br>
	<select name="naipe" id="naipe">
	<option value="copas"<?php if($naipe == "copas") echo "selected" ;?>>copas</option>
	<option value="ouro"<?php if($naipe == "ouro") echo "selected" ;?>>ouro</option>
	<option value="espada"<?php if($naipe == "espada") echo "selected" ;?>>espada</option>
		<option value="paus"<?php if($naipe == "paus") echo "selected" ;?>>paus</option>
		</select>
		<br>
	<input type="submit" value="sortear">
	</form>
	<?php	
	echo "nome: ", $jogador,"<br> numero de cartas sorteadas: ", $nun, "<br> cartas sorteadas: ";
	$b=sortear($nun);
	var_export($b, true);
	?>
</body>
</html>
