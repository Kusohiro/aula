<?php
function sorteio($milhar, $bicho, $aposta, $x){
	$n1 = rand(0,9); $n2 = rand(0,9); $n3= rand(0,9); $n4 = rand(0,9);
	$sorteio = $n1;
	$sorteio .= $n2;
	$sorteio .= $n3;
	$sorteio .= $n4;
	//$sorteio = 6244;
	$final = $n3;
	$final .= $n4;
	if($x == 0){  echo "1° Premio - ", $sorteio, " - ";
			  }
	elseif($x == 1){  echo "2° Premio - ", $sorteio, " - ";;}
			elseif($x == 2){  echo "3° Premio - ", $sorteio, " - ";}
			elseif($x == 3){  echo "4° Premio - ", $sorteio, " - ";}
			elseif($x == 4){ echo "5° Premio - ", $sorteio, " - ";}
	vencedor($final, $bicho, $x, $aposta);
	if($milhar == $sorteio){
	if($x == 0){ $premio = $aposta * 35;
			  echo $premio, "<br><br>";
			  }
	elseif($x == 1){ $premio = $aposta * 30;		  
			  echo $premio, "<br><br>";}
			elseif($x == 2){ $premio = $aposta * 25;		  
			  echo $premio, "<br><br>";}
			elseif($x == 3){ $premio = $aposta * 20;		  
			  echo $premio, "<br><br>";}
			elseif($x == 4){ $premio = $aposta * 15;		  
			  echo $premio, "<br><br>";}
			  }}


function vencedor($final, $bicho, $x, $aposta){
	$avestruz = array( 1,2,3,4);
	$aguia = array(5,6,7,8);
	$burro = array(9,10,11,12);
	$borboleta = array(13,14,15,16);
	$cachorro = array( 17,18,19,20);
	$cabra = array(21,22,23,24);
	$carneiro = array(25,26,27,28);
	$camelo = array(29,30,31,32);
	$cobra = array( 33,34,35,36);
	$coelho = array(37,38,39,40);
	$cavalo = array(41,42,43,44);
	$elefante = array(45,46,47,48);
	$galo = array( 49,50,51,52);
	$gato = array( 53,54,55,56);
	$jacare = array( 57,58,59,60);
	$leao = array( 61,62,63,64);
	$macaco = array(65,66,67,68);
	$porco = array(69,70,71,72);
	$pavao = array(73,74,75,76);
	$peru = array(77,78,79,80);
	$touro = array( 81,82,83,84);
	$tigre = array(85,86,87,88);
	$urso = array(89,90,91,92);
	$veado = array(93,94,95,96);
	$vaca = array(97,98,99,00);
	
	for ($xy = 0; $xy < count($avestruz); $xy++){
	if($avestruz[$xy] == $final){ echo "<img src='imagems/avestruz.png' height='100' width='100'> <br>"; jogador("avestruz", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($aguia); $xy++){
	if($aguia[$xy] == $final){ echo "<img src='imagems/aguia.png' height='100' width='100'> <br>"; jogador("aguia", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($burro); $xy++){
	if($burro[$xy] == $final){ echo "<img src='imagems/burro.png' height='100' width='100'> <br>"; jogador("burro", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($borboleta); $xy++){
	if($borboleta[$xy] == $final){echo "<img src='imagems/borboleta.png' height='100' width='100'> <br>"; jogador("borboleta", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($cachorro); $xy++){
	if($cachorro[$xy] == $final){ echo "<img src='imagems/cachorro.png' height='100' width='100'> <br>"; jogador("cachorro", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($cabra); $xy++){
	if($cabra[$xy] == $final){ echo "<img src='imagems/cabra.png' height='100' width='100'> <br>"; jogador("cabra", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($carneiro); $xy++){
	if($carneiro[$xy] == $final){echo "<img src='imagems/carneiro.png' height='100' width='100'> <br>"; jogador("carneiro", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($camelo); $xy++){
	if($camelo[$xy] == $final){ echo "<img src='imagems/camelo.png' height='100' width='100'> <br>"; jogador("camelo", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($cobra); $xy++){
	if($cobra[$xy] == $final){ echo "<img src='imagems/cobra.png' height='100' width='100'> <br>"; jogador("cobra", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($coelho); $xy++){
	if($coelho[$xy] == $final){ echo "<img src='imagems/coelho.png' height='100' width='100'> <br>"; jogador("coelho", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($cavalo); $xy++){
	if($cavalo[$xy] == $final){ echo "<img src='imagems/cavalo.png' height='100' width='100'> <br>"; jogador("cavalo", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($elefante); $xy++){
	if($elefante[$xy] == $final){echo "<img src='imagems/elefante.png' height='100' width='100'> <br>"; jogador("elefante", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($galo); $xy++){
	if($galo[$xy] == $final){ echo "<img src='imagems/galo.png' height='100' width='100'> <br>"; jogador("galo", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($gato); $xy++){
	if($gato[$xy] == $final){ echo "<img src='imagems/gato.png' height='100' width='100'> <br>"; jogador("gato", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($jacare); $xy++){
	if($jacare[$xy] == $final){ echo "<img src='imagems/jacare.png' height='100' width='100'> <br>"; jogador("jacare", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($leao); $xy++){
	if($leao[$xy] == $final){ echo "<img src='imagems/leão.png' height='100' width='100'> <br>"; jogador("leão", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($macaco); $xy++){
	if($macaco[$xy] == $final){ echo "<img src='imagems/macaco.png' height='100' width='100'> <br>"; jogador("macaco", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($porco); $xy++){
	if($porco[$xy] == $final){echo "<img src='imagems/porco.png' height='100' width='100'> <br>"; jogador("porco", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($pavao); $xy++){
	if($pavao[$xy] == $final){ echo "<img src='imagems/pavão.png' height='100' width='100'> <br>"; jogador("pavao", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($peru); $xy++){
	if($peru[$xy] == $final){ echo "<img src='imagems/peru.png' height='100' width='100'> <br>"; jogador("peru", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($touro); $xy++){
	if($touro[$xy] == $final){ echo "<img src='imagems/touro.png' height='100' width='100'> <br>"; jogador("touro", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($tigre); $xy++){
	if($tigre[$xy] == $final){ echo "<img src='imagems/tigre.png' height='100' width='100'> <br>"; jogador("tigre", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($urso); $xy++){
	if($urso[$xy] == $final){echo "<img src='imagems/urso.png' height='100' width='100'> <br>"; jogador("urso", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($veado); $xy++){
	if($veado[$xy] == $final){ echo "<img src='imagems/veado.png' height='100' width='100'> <br>"; jogador("veado", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($vaca); $xy++){
	if($vaca[$xy] == $final){  echo "<img src='imagems/vaca.png' height='100' width='100'> <br>"; jogador("vaca", $bicho, $x, $aposta);}}
}

function jogador($ser, $bicho, $x, $aposta){
	if($ser == $bicho){
		if($x == 0){ $premio = $aposta * 15;
			  echo $premio, "<br><br>";
			  }
	elseif($x == 1){ $premio = $aposta * 5;		  
			  echo $premio, "<br><br>";}
			elseif($x == 2){ $premio = $aposta * 4;		  
			  echo $premio, "<br><br>";}
			elseif($x == 3){ $premio = $aposta * 3;		  
			  echo $premio, "<br><br>";}
			elseif($x == 4){ $premio = $aposta * 2;		  
			  echo $premio, "<br><br>";}
			  }
}

function checagem($bicho,$aposta, $milhar){
	for($x = 0; $x < 5; $x++){
	sorteio($milhar, $bicho, $aposta, $x);
}}
function checagemm($bicho,$aposta, $milhar){
	for($x = 0; $x < 5; $x++){
	sorteio($milhar, $bicho, $aposta, $x);
	}}
?>
