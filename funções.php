<?php
function sorteio($milhar, $bicho){
	$n1 = rand(0,9); $n2 = rand(0,9); $n3= rand(0,9); $n4 = rand(0,9);
	$sorteio = $n1;
	$sorteio .= $n2;
	$sorteio .= $n3;
	$sorteio .= $n4;
	//$sorteio = 6244;
	$final = $n3;
	$final .= $n4;
	echo $sorteio, "<br>", $final, "<br>";
	
	//if($milhar == $sorteio){$vencer = 1; return($vencer);}
	vencedor($final);
	
}

function vencedor($final){
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
	
	for ($x = 0; $x < count($avestruz); $x++){
	if($avestruz[$x] == $final){$vencedor = "vaca"; echo "avestruz <br><br>";}}
	for ($x = 0; $x < count($aguia); $x++){
	if($aguia[$x] == $final){ $vencedor = "vaca";echo "aguia <br><br>";}}
	for ($x = 0; $x < count($burro); $x++){
	if($burro[$x] == $final){$vencedor = "vaca"; echo "burro <br><br>";}}
	for ($x = 0; $x < count($borboleta); $x++){
	if($borboleta[$x] == $final){$vencedor = "vaca";echo "borboleta <br><br>";}}
	for ($x = 0; $x < count($cachorro); $x++){
	if($cachorro[$x] == $final){ $vencedor = "vaca";echo "cachorro <br><br>";}}
	for ($x = 0; $x < count($cabra); $x++){
	if($cabra[$x] == $final){$vencedor = "vaca"; echo "cabra <br><br>";}}
	for ($x = 0; $x < count($carneiro); $x++){
	if($carneiro[$x] == $final){$vencedor = "vaca";echo "carneiro <br><br>";}}
	for ($x = 0; $x < count($camelo); $x++){
	if($camelo[$x] == $final){ $vencedor = "vaca";echo "camelo <br><br>";}}
	for ($x = 0; $x < count($cobra); $x++){
	if($cobra[$x] == $final){$vencedor = "vaca"; echo "cobra <br><br>";}}
	for ($x = 0; $x < count($coelho); $x++){
	if($coelho[$x] == $final){$vencedor = "vaca"; echo "coelho <br><br>";}}
	for ($x = 0; $x < count($cavalo); $x++){
	if($cavalo[$x] == $final){$vencedor = "vaca"; echo "cavalo <br><br>";}}
	for ($x = 0; $x < count($elefante); $x++){
	if($elefante[$x] == $final){$vencedor = "vaca";echo "elefante <br><br>";}}
	for ($x = 0; $x < count($galo); $x++){
	if($galo[$x] == $final){$vencedor = "vaca"; echo "galo <br><br>";}}
	for ($x = 0; $x < count($gato); $x++){
	if($gato[$x] == $final){ $vencedor = "vaca";echo "gato <br><br>";}}
	for ($x = 0; $x < count($jacare); $x++){
	if($jacare[$x] == $final){$vencedor = "vaca"; echo "jacare <br><br>";}}
	for ($x = 0; $x < count($leao); $x++){
	if($leao[$x] == $final){$vencedor = "vaca"; echo "leao <br><br>";}}
	for ($x = 0; $x < count($macaco); $x++){
	if($macaco[$x] == $final){$vencedor = "vaca"; echo "macaco <br><br>";}}
	for ($x = 0; $x < count($porco); $x++){
	if($porco[$x] == $final){$vencedor = "vaca";echo "porco <br><br>";}}
	for ($x = 0; $x < count($pavao); $x++){
	if($pavao[$x] == $final){$vencedor = "vaca"; echo "pavao <br><br>";}}
	for ($x = 0; $x < count($peru); $x++){
	if($peru[$x] == $final){$vencedor = "vaca"; echo "peru <br><br>";}}
	for ($x = 0; $x < count($touro); $x++){
	if($touro[$x] == $final){$vencedor = "vaca"; echo "touro <br><br>";}}
	for ($x = 0; $x < count($tigre); $x++){
	if($tigre[$x] == $final){$vencedor = "vaca"; echo "tigre <br><br>";}}
	for ($x = 0; $x < count($urso); $x++){
	if($urso[$x] == $final){$vencedor = "vaca";echo "urso <br><br>";}}
	for ($x = 0; $x < count($veado); $x++){
	if($veado[$x] == $final){ $vencedor = "vaca";echo "veado <br><br>";}}
	for ($x = 0; $x < count($vaca); $x++){
	if($vaca[$x] == $final){$vencedor = "vaca";  echo "vaca <br><br>";}}

}




?>
