<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jogo do bicho</title>
</head>
<?php 
	$bicho = "";
	$animal = array("avestruz","aguia","burro","borboleta","cachorro","cabra","carneiro","camelo","cobra","coelho","cavalo","elefante","galo","gato","jacare","leão","macaco","porco","pavão","peru","touro","tigre","urso","veado","vaca");
	$milhar = isset($_GET['milhar']) ? $_GET['milhar'] : "";
	$aposta = isset($_GET['aposta']) ? $_GET['aposta'] : ""
	?>
<body>
	 <?php include "menu.php";
	include "funções.php";
	?>
	<form method="get">
	valor de aposta (r$):<input type="text" name="aposta" id="aposta" <?php if(isset($_GET['aposta'])) echo "value='", $aposta, "'"?></input> <br>
	milhar:<input type="text" name="milhar" id="milhar" <?php if(isset($_GET['milhar'])) echo "value='", $milhar, "'"?>
				 </input> <br>
	<input type="submit" value="jogar">
	</form>
	<?php echo $milhar, "<br>",$aposta, "<br>"; 
	$vencer = 0;
	for($x = 0; $x < 5; $x++){
	sorteio($milhar, $bicho);
		//if ($vencer==1){ echo "VENCEDOR! <br> <br>";}
	}
	?>
</body>
</html>
