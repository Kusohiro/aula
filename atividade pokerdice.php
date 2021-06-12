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
	
	$cont6 = 0;
	$cont5 = 0;
	$cont4 = 0;
	$cont3 = 0;
	$cont2 = 0;
    $cont1 = 0;
    $jogadas1 = 0;
	$jogadas2 = 0;
	$jogadas3 = 0;
	$jogadas4 = 0;
	$jogadas5 = 0;
	$jogadas6 = 0;
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
        $jogadas2 = 2 * $cont2; 
    }

    echo "<br>Jogadas de 2: $jogadas2";
	
	foreach($vetorJogador as $dado){
        if($dado == 3){
            $cont3++;
        }
    }
    if($cont3 > 1){
        $jogadas3 = 3 * $cont3; 
    }

    echo "<br>Jogadas de 3: $jogadas3";
	
	foreach($vetorJogador as $dado){
        if($dado == 4){
            $cont4++;
        }
    }
    if($cont4 > 1){
        $jogadas4 = 4 * $cont4; 
    }

    echo "<br>Jogadas de 4: $jogadas4";

	foreach($vetorJogador as $dado){
        if($dado == 5){
            $cont5++;
        }
    }
    if($cont5 > 1){
        $jogadas5 = 5 * $cont5; 
    }

    echo "<br>Jogadas de 5: $jogadas5";
	
	foreach($vetorJogador as $dado){
        if($dado == 6){
            $cont6++;
        }
    }
    if($cont6 > 1){
        $jogadas6 = 6 * $cont6; 
    }

    echo "<br>Jogadas de 6: $jogadas6";
}
?>
</body>
<html>
