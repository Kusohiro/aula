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
	if($avestruz[$xy] == $final){ echo "avestruz <br>"; jogador("avestruz", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($aguia); $xy++){
	if($aguia[$xy] == $final){ echo "aguia <br>"; jogador("aguia", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($burro); $xy++){
	if($burro[$xy] == $final){ echo "burro <br>"; jogador("burro", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($borboleta); $xy++){
	if($borboleta[$xy] == $final){echo "borboleta <br>"; jogador("borboleta", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($cachorro); $xy++){
	if($cachorro[$xy] == $final){ echo "cachorro <br>"; jogador("cachorro", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($cabra); $xy++){
	if($cabra[$xy] == $final){ echo "cabra <br>"; jogador("cabra", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($carneiro); $xy++){
	if($carneiro[$xy] == $final){echo "carneiro <br>"; jogador("carneiro", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($camelo); $xy++){
	if($camelo[$xy] == $final){ echo "camelo <br>"; jogador("camelo", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($cobra); $xy++){
	if($cobra[$xy] == $final){ echo "cobra <br>"; jogador("cobra", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($coelho); $xy++){
	if($coelho[$xy] == $final){ echo "coelho <br>"; jogador("coelho", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($cavalo); $xy++){
	if($cavalo[$xy] == $final){ echo "cavalo <br>"; jogador("cavalo", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($elefante); $xy++){
	if($elefante[$xy] == $final){echo "elefante <br>"; jogador("elefante", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($galo); $xy++){
	if($galo[$xy] == $final){ echo "galo <br>"; jogador("galo", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($gato); $xy++){
	if($gato[$xy] == $final){ echo "gato <br>"; jogador("gato", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($jacare); $xy++){
	if($jacare[$xy] == $final){ echo "jacare <br>"; jogador("jacare", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($leao); $xy++){
	if($leao[$xy] == $final){ echo "leao <br>"; jogador("leão", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($macaco); $xy++){
	if($macaco[$xy] == $final){ echo "macaco <br>"; jogador("macaco", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($porco); $xy++){
	if($porco[$xy] == $final){echo "porco <br>"; jogador("porco", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($pavao); $xy++){
	if($pavao[$xy] == $final){ echo "pavao <br>"; jogador("pavao", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($peru); $xy++){
	if($peru[$xy] == $final){ echo "peru <br>"; jogador("peru", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($touro); $xy++){
	if($touro[$xy] == $final){ echo "touro <br>"; jogador("touro", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($tigre); $xy++){
	if($tigre[$xy] == $final){ echo "tigre <br>"; jogador("tigre", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($urso); $xy++){
	if($urso[$xy] == $final){echo "urso <br>"; jogador("urso", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($veado); $xy++){
	if($veado[$xy] == $final){ echo "veado <br>"; jogador("veado", $bicho, $x, $aposta);}}
	for ($xy = 0; $xy < count($vaca); $xy++){
	if($vaca[$xy] == $final){  echo "vaca <br>"; jogador("vaca", $bicho, $x, $aposta);}}
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
