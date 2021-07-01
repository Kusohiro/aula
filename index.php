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
	$acao = "";
if(isset($_GET['acao'])){
    $acao = $_GET['acao'];
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
	<input type="radio" name="naipe" id="naipe" value="copas"<?php if($naipe == "copas") echo "checked" ;?>/>copas
	<input type="radio" name="naipe" id="naipe" value="ouro"<?php if($naipe == "ouro") echo "checked" ;?>/>ouro 
	<input type="radio" name="naipe" id="naipe" value="espada"<?php if($naipe == "espada") echo "checked" ;?>/> espada 
	<input type="radio" name="naipe" id="naipe" value="paus"<?php if($naipe == "paus") echo "checked" ;?>/> paus
		<br>
		<button type="submit" name="acao" id="acao" value="sortear">sortear</button>
	</form>
	<?php	
	if($acao = "sortear"){
	echo "nome: ", $jogador,"<br> numero de cartas sorteadas: ", $nun, "<br> naipe: ", $naipe,"<br> cartas sorteadas: ";
	$b=sortear($nun);
	var_export($b, true);
		
		if($naipe = "ouro")
		$naipec = "paus" or "espada" or "copas";
		if($naipe = "paus")
		$naipec = "ouro" or "espada" or "copas";
		if($naipe = "espada")
		$naipec = "paus" or "ouro" or "copas";
		if($naipe = "copas")
		$naipec = "paus" or "espada" or "ouro";
	echo "<br> nome: ", "computador","<br> numero de cartas sorteadas: ", $nun, "<br> naipe: ", $naipec, "<br> cartas sorteadas: ";
	$c=sortearc($nun);
	var_export($c, true);}
	
		?>
</body>
</html>
