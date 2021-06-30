<?php 

	
function sortear($nun){
	$cartas = array();
	
	if(isset($_GET['jogador'])){
		$rand1 = rand (1, 13);
echo  " ".$rand1." ";

do{
$rand2 = rand (1, 13);
} while ($rand2 == $rand1);
echo " ".$rand2." ";

	if($nun >= 3){
do{
$rand3 = rand (1, 13);
} while ($rand3 == $rand1 || $rand3 == $rand2);
echo " ".$rand3." ";}

		if($nun >= 4){
do{
$rand4 = rand (1, 13);
} while ($rand4 == $rand1 || $rand4 == $rand2 || $rand4 == $rand3);
echo " ".$rand4." ";}

	if($nun >= 5){
do{
$rand5 = rand (1, 13);
} while ($rand5 == $rand1 || $rand5 == $rand2 || $rand5 == $rand3 || $rand5 == $rand4);
echo " ".$rand5." ";}

	if($nun >= 6){
do{
$rand6 = rand (1, 13);
} while ($rand6 == $rand1 || $rand6 == $rand2 || $rand6 == $rand3 || $rand6 == $rand4 || $rand6 == $rand5);
echo " ".$rand6." ";
}

return;
}
	for ($x = 0; $x < $nun; $x++)
		
		$n[]= ($rand1 and $rand2);
		if($x >= 3){
		$n[]= ($rand1 and $rand2 and $rand3);}
		if($x >= 4){
		$n[]= ($rand1 and $rand2 and $rand3 and $rand4);}
		if($x >= 5){
		$n[]= ($rand1 and $rand2 and $rand3 and $rand4 and $rand5);}
		if($x >= 6){
		$n[]= ($rand1 and $rand2 and $rand3 and $rand4 and $rand5 and $rand6);}
	$cartas[] = $n;
	sort($cartas);
		return $cartas;
	}


?>