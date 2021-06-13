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
	
	$contg1 = 0;
	$contg2 = 0;
	$contg3 = 0;
	$contg4 = 0;
	$contg5 = 0;
	$contg6 = 0;
	$contf1 = 0;
	$contf2 = 0;
	$contf3 = 0;
	$contf4 = 0;
	$contf5 = 0;
	$contf6 = 0;
	$conta1 = 0;
	$conta2 = 0;
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
	$jogadasf = 0;
	$jogadasg = 0;
	$sequenciaa = 0;
	$sequenciab = 0;
	
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
	
	foreach($vetorJogador as $dado){
		  if($dado == 6){
           
			  $contf6++;
        }
	 if($contt6 == 3 ) {if($contf2 == 2 or $contf3 == 2 or $contf4 == 2 or $contf5 == 2 or $contf1 == 2){$jogadasf = 25;}}
		  if($dado == 5){
     
			  			  $contf5++;
        }
	 if($contt5 == 3 ) {if($contf2 == 2 or $contf3 == 2 or $contf4 == 2 or $contf1 == 2 or $contf6 == 2){$jogadasf = 25;}}
		  if($dado == 4){
            
			  			  $contf4++;
        }
	 if($contt4 == 3 ) {if($contf2 == 2 or $contf3 == 2 or $contf1 == 2 or $contf5 == 2 or $contf6 == 2){$jogadasf = 25;} } 
		if($dado == 3){
          
					  $contf3++;
        }
	 if($contt3 == 3) {if($contf2 == 2 or $contf1 == 2 or $contf4 == 2 or $contf5 == 2 or $contf6 == 2){$jogadasf = 25;}  }
		if($dado == 2){
           
						  $contf2++;
        }
	 if($contt2 == 3 ) {if($contf1 == 2 or $contf3 == 2 or $contf4 == 2 or $contf5 == 2 or $contf6 == 2){
        $jogadasf = 25; 
    }  }
		if($dado == 1){
            
						  $contf1++;
        }
	 if($contt1 == 3 ) {if($contf2 == 2 or $contf3 == 2 or $contf4 == 2 or $contf5 == 2 or $contf6 == 2){
        $jogadasf = 25; 
    }
	}}
	echo "<br>Full House: $jogadasf";
	
	foreach($vetorJogador as $dado){
		if($dado == 1){
			$cont1++;
	}
		if($dado == 2){
			$cont2++;}
			if($dado == 3){
			$cont3++;}
		if($dado == 4){
			$cont4++;}
		if($dado == 5){
			$cont5++;}
		if($dado == 6){
			$cont6++;}
	}
	if($cont1 ==1 and $count2==1 and $count3==1 and $cont4==1 and $count5==1){
		$sequenciaa = 40;
		echo"<br>Sequencia baixa: 40";
	}else echo"<br>Sequencia baixa: 0";
		if($cont2 ==1 and $count3==1 and $count4==1 and $cont5==1 and $count6==1){
			$sequenciab = 30;
		echo"<br>Sequencia alta: 30";
	}else echo"<br>Sequencia alta: 0";
	foreach($vetorJogador as $dado){
		  if($dado == 6){
            $contg6++;
        }
	 if($contg6 == 5){
        $jogadasg = 50; 
    }
		  if($dado == 5){
            $contg5++;
        }
	 if($contg5 == 5){
        $jogadasg = 50; 
    }
		  if($dado == 4){
            $contg4++;
        }
	 if($contg4 == 5){
        $jogadasg = 50; 
    }  
		if($dado == 3){
            $contg3++;
        }
	 if($contg3 == 5){
        $jogadasg = 50; 
    }  
		if($dado == 2){
            $contg2++;
        }
	 if($contg2 == 5){
        $jogadasg = 50; 
    }  
		if($dado == 1){
            $contg1++;
        }
	 if($contg1 == 5){
        $jogadasg = 50; 
    }
	}
	echo "<br>general: $jogadasg";
	
	echo "<hr>";
	$total = $jogadasq + $jogadast + $jogadasg + $jogadasf + $jogadasa + $sequenciaa + $sequenciab + $jogadas1 + $jogadas2 + $jogadas3 + $jogadas4 + $jogadas5 + $jogadas6;
	echo "<br>Total: $total <hr>";
	
	}
	echo "computador:";
if(isset($_GET['jogador'])){
    for($i = 0; $i < 5; $i++){
        $vetorcomputador[$i] = rand(1,6);
        echo $vetorcomputador[$i]. " ";
    }
	
	$contg1 = 0;
	$contg2 = 0;
	$contg3 = 0;
	$contg4 = 0;
	$contg5 = 0;
	$contg6 = 0;
	$contf1 = 0;
	$contf2 = 0;
	$contf3 = 0;
	$contf4 = 0;
	$contf5 = 0;
	$contf6 = 0;
	$conta1 = 0;
	$conta2 = 0;
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
	$jogadasf = 0;
	$jogadasg = 0;
	$sequenciaa = 0;
	$sequenciab = 0;
	
	foreach($vetorcomputador as $dado){
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
	
	
    foreach($vetorcomputador as $dado){
        if($dado == 1){
            $cont1++;
        }
    }
    if($cont1 > 1){
        $jogadas1 = $cont1; 
    }

    echo "<br>Jogadas de 1: $jogadas1";
	
	foreach($vetorcomputador as $dado){
        if($dado == 2){
            $cont2++;
        }
    }
    if($cont2 > 1){
        $jogadas2 = 2 * $cont2; 
    }

    echo "<br>Jogadas de 2: $jogadas2";
	
	foreach($vetorcomputador as $dado){
        if($dado == 3){
            $cont3++;
        }
    }
    if($cont3 > 1){
        $jogadas3 = 3 * $cont3; 
    }

    echo "<br>Jogadas de 3: $jogadas3";
	
	foreach($vetorcomputador as $dado){
        if($dado == 4){
            $cont4++;
        }
    }
    if($cont4 > 1){
        $jogadas4 = 4 * $cont4; 
    }

    echo "<br>Jogadas de 4: $jogadas4";

	foreach($vetorcomputador as $dado){
        if($dado == 5){
            $cont5++;
        }
    }
    if($cont5 > 1){
        $jogadas5 = 5 * $cont5; 
    }

    echo "<br>Jogadas de 5: $jogadas5";
	
	foreach($vetorcomputador as $dado){
        if($dado == 6){
            $cont6++;
        }
    }
    if($cont6 > 1){
        $jogadas6 = 6 * $cont6; 
    }

    echo "<br>Jogadas de 6: $jogadas6";
	
	foreach($vetorcomputador as $dado){
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
	
		foreach($vetorcomputador as $dado){
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
	
	foreach($vetorcomputador as $dado){
		  if($dado == 6){
           
			  $contf6++;
        }
	 if($contt6 == 3 ) {if($contf2 == 2 or $contf3 == 2 or $contf4 == 2 or $contf5 == 2 or $contf1 == 2){$jogadasf = 25;}}
		  if($dado == 5){
     
			  			  $contf5++;
        }
	 if($contt5 == 3 ) {if($contf2 == 2 or $contf3 == 2 or $contf4 == 2 or $contf1 == 2 or $contf6 == 2){$jogadasf = 25;}}
		  if($dado == 4){
            
			  			  $contf4++;
        }
	 if($contt4 == 3 ) {if($contf2 == 2 or $contf3 == 2 or $contf1 == 2 or $contf5 == 2 or $contf6 == 2){$jogadasf = 25;} } 
		if($dado == 3){
          
					  $contf3++;
        }
	 if($contt3 == 3) {if($contf2 == 2 or $contf1 == 2 or $contf4 == 2 or $contf5 == 2 or $contf6 == 2){$jogadasf = 25;}  }
		if($dado == 2){
           
						  $contf2++;
        }
	 if($contt2 == 3 ) {if($contf1 == 2 or $contf3 == 2 or $contf4 == 2 or $contf5 == 2 or $contf6 == 2){
        $jogadasf = 25; 
    }  }
		if($dado == 1){
            
						  $contf1++;
        }
	 if($contt1 == 3 ) {if($contf2 == 2 or $contf3 == 2 or $contf4 == 2 or $contf5 == 2 or $contf6 == 2){
        $jogadasf = 25; 
    }
	}}
	echo "<br>Full House: $jogadasf";
	
	foreach($vetorcomputador as $dado){
		if($dado == 1){
			$cont1++;
	}
		if($dado == 2){
			$cont2++;}
			if($dado == 3){
			$cont3++;}
		if($dado == 4){
			$cont4++;}
		if($dado == 5){
			$cont5++;}
		if($dado == 6){
			$cont6++;}
	}
	if($cont1 ==1 and $count2==1 and $count3==1 and $cont4==1 and $count5==1){
		$sequenciaa = 40;
		echo"<br>Sequencia baixa: 40";
	}else echo"<br>Sequencia baixa: 0";
		if($cont2 ==1 and $count3==1 and $count4==1 and $cont5==1 and $count6==1){
			$sequenciab = 30;
		echo"<br>Sequencia alta: 30";
	}else echo"<br>Sequencia alta: 0";
	foreach($vetorcomputador as $dado){
		  if($dado == 6){
            $contg6++;
        }
	 if($contg6 == 5){
        $jogadasg = 50; 
    }
		  if($dado == 5){
            $contg5++;
        }
	 if($contg5 == 5){
        $jogadasg = 50; 
    }
		  if($dado == 4){
            $contg4++;
        }
	 if($contg4 == 5){
        $jogadasg = 50; 
    }  
		if($dado == 3){
            $contg3++;
        }
	 if($contg3 == 5){
        $jogadasg = 50; 
    }  
		if($dado == 2){
            $contg2++;
        }
	 if($contg2 == 5){
        $jogadasg = 50; 
    }  
		if($dado == 1){
            $contg1++;
        }
	 if($contg1 == 5){
        $jogadasg = 50; 
    }
	}
	echo "<br>general: $jogadasg";
	
	echo "<hr>";
	$totalc = $jogadasq + $jogadast + $jogadasg + $jogadasf + $jogadasa + $sequenciaa + $sequenciab + $jogadas1 + $jogadas2 + $jogadas3 + $jogadas4 + $jogadas5 + $jogadas6;
	echo "<br>Total: $totalc";
	
if($total > $totalc){
	echo "<br><h2>vencedor:$jogador<h2>";
}	elseif($totalc >$total){
	echo "<br><h2>vencedor:computador<h2>";
}else echo "<br><h2>empate";
}?>
</body>
<html>
