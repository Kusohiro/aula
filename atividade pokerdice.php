<!DOCType html>
<html>
<head>
<?php
$jogador = "";
if(isset($_GET['jogador'])){
    $jogador = $_GET['jogador'];
}
?>
</head>
<body>
<form method="get" action="">
<label for="jogador"> Jogador: </label>
<input type="text" name="jogador" value="" />
<br><br>
<input type="submit">
</form>
<?php
if(isset($_GET['jogador'])){
    $vetorJogador = array();
    for($i = 0; $i < 5; $i++){
        $vetorJogador[$i] = rand(1,6);
        echo $vetorJogador[$i]. " ";
    }
	
	$cont2 = 0;
    $cont1 = 0;
    $jogadas1 = 0;
	$jogadas2 = 0;
    foreach($vetorJogador as $dado){
        if($dado == 1){
            $cont1++;
        }
    }
    if($cont1 > 1){
        $jogadas1 = $cont1; 
    }

    echo "<br>Jogadas de 1: $jogadas1";
	
	foreach($vetorJogador as $dado){
        if($dado == 2){
            $cont2++;
        }
    }
    if($cont2 > 1){
        $jogadas2 = $cont2; 
    }

    echo "<br>Jogadas de 2: $jogadas2";
}
?>
</body>
<html>