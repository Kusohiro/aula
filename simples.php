<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>jogo do bicho</title>
</head>
<?php 
	$animal = array("avestruz","aguia","burro","borboleta","cachorro","cabra","carneiro","camelo","cobra","coelho","cavalo","elefante","galo","gato","jacare","leão","macaco","porco","pavão","peru","touro","tigre","urso","veado","vaca");
	$bicho = isset($_GET['bicho']) ? $_GET['bicho'] : "";
	$aposta = isset($_GET['aposta']) ? $_GET['aposta'] : ""
	?>
<body>
	 <?php include "menu.php" ?>
	<form method="get">
	valor de aposta (r$):<input type="text" name="aposta" id="aposta" <?php if(isset($_GET['aposta'])) echo "value='", $aposta, "'"?></input> <br>
	bicho:   <select name="bicho" id="bicho">
            <?php
                
                for ($x = 0; $x < count($animal); $x++){
                   
                    if ($animal[$x] == $bicho)
                        echo "<option value = '$animal[$x]' selected> $animal[$x]</otption>";
                    else
                        echo "<option value = '$animal[$x]'> $animal[$x]</otption>";
                }
            ?>
        </select>
	<input type="submit" value="jogar">
	</form>
	<?php echo $bicho, "<br>",$aposta; ?>
</body>
</html>