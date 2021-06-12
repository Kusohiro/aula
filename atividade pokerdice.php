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
	<hr>
<?php
	echo $jogador, ":";
if(isset($_GET['jogador'])){
    for($i = 0; $i < 5; $i++){
        $vetorJogador[$i] = rand(1,6);
        echo $vetorJogador[$i]. " ";
    }
	
	$conta1 = 0;
	$conta2= 0;
	$conta3 = 0;
	$conta4 = 0;
	$conta5 = 0;
	$conta6 = 0;
	$contq1 = 0;
	$contq2 = 0;
	$contq3 = 0;
	$contq4 = 0;
	$contq5 = 0;
	$contq6 = 0;
	$contt1 = 0;
	$contt2 = 0;
	$contt3 = 0;
	$contt4 = 0;
	$contt5 = 0;
	$contt6 = 0;
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
	$jogadast = 0;
	$jogadasq = 0;
	$jogadasa = 0;
	$jogadasa1 = 0;
	$jogadasa2 = 0;
	$jogadasa3 = 0;
	$jogadasa4 = 0;
	$jogadasa5 = 0;
	$jogadasa6 = 0;
	
	foreach($vetorJogador as $dado){
		 if($dado == 1){
            $conta1++;
        }
    
    if($cont1 >= 1){
        $jogadasa1 = $conta1; 
    }
	 if($dado == 2){
            $conta2++;
        }
    
    if($conta2 >= 1){
        $jogadasa2 = 2 * $conta2; 
	}
    if($dado == 3){
            $conta3++;
        }
    
    if($conta3 >= 1){
        $jogadasa3 = 3 * $conta3; 
	}
	 if($dado == 4){
            $conta4++;
        }
    
    if($conta4 >= 1){
        $jogadasa4 = 4 * $conta4; }
		 if($dado == 5){
            $conta5++;
        }
    
    if($conta5 >= 1){
        $jogadasa5 = 5 * $conta5; }
		 if($dado == 6){
            $conta6++;
        }
 
    if($conta6 >= 1){
        $jogadasa6 = 6 * $conta6; }
		
		
}	$jogadasa = $jogadasa1 + $jogadasa2 + $jogadasa3 + $jogadasa4 + $jogadasa5 + $jogadasa6;
	echo "<br>aleatorio: $jogadasa";
	
	
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
	
	foreach($vetorJogador as $dado){
		  if($dado == 6){
            $contt6++;
        }
	 if($contt6 == 3){
        $jogadast = 20; 
    }
		  if($dado == 5){
            $contt5++;
        }
	 if($contt5 == 3){
        $jogadast = 20; 
    }
		  if($dado == 4){
            $contt4++;
        }
	 if($contt4 == 3){
        $jogadast = 20; 
    }  
		if($dado == 3){
            $contt3++;
        }
	 if($contt3 == 3){
        $jogadast = 20; 
    }  
		if($dado == 2){
            $contt2++;
        }
	 if($contt2 == 3){
        $jogadast = 20; 
    }  
		if($dado == 1){
            $contt1++;
        }
	 if($contt1 == 3){
        $jogadast = 20; 
    }
	}
	echo "<br>Trinca: $jogadast";
	
		foreach($vetorJogador as $dado){
		  if($dado == 6){
            $contq6++;
        }
	 if($contq6 == 4){
        $jogadasq = 30; 
    }
		  if($dado == 5){
            $contq5++;
        }
	 if($contq5 == 4){
        $jogadasq = 30; 
    }
		  if($dado == 4){
            $contq4++;
        }
	 if($contq4 == 4){
        $jogadasq = 30; 
    }  
		if($dado == 3){
            $contq3++;
        }
	 if($contq3 == 4){
        $jogadasq = 30; 
    }  
		if($dado == 2){
            $contq2++;
        }
	 if($contq2 == 4){
        $jogadasq = 30; 
    }  
		if($dado == 1){
            $contq1++;
        }
	 if($contq1 == 4){
        $jogadasq = 30; 
    }
	}
	echo "<br>quadra: $jogadasq";
	
	
	}?>
</body>
<html>
