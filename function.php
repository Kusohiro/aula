<?php 
$somac = 0;
$soma = 0;


function sortearc($nun){
	$rand1c = 0;
$rand2c = 0;
$rand3c = 0;
$rand4c = 0;
$rand5c = 0;
$rand6c = 0;
	$cartasc = array();
	
	if(isset($_GET['jogador'])){
		$rand1c = rand (1, 13);
echo  " ".$rand1c." ";

do{
$rand2c = rand (1, 13);
} while ($rand2c == $rand1c);
echo " ".$rand2c." ";

	if($nun >= 3){
do{
$rand3c = rand (1, 13);
} while ($rand3c == $rand1c || $rand3c == $rand2c);
echo " ".$rand3c." ";}

		if($nun >= 4){
do{
$rand4c = rand (1, 13);
} while ($rand4c == $rand1c || $rand4c == $rand2c || $rand4c == $rand3c);
echo " ".$rand4c." ";}

	if($nun >= 5){
do{
$rand5c = rand (1, 13);
} while ($rand5c == $rand1c || $rand5c == $rand2c || $rand5c == $rand3c || $rand5c == $rand4c);
echo " ".$rand5c." ";}

	if($nun >= 6){
do{
$rand6c = rand (1, 13);
} while ($rand6c == $rand1c || $rand6c == $rand2c || $rand6c == $rand3c || $rand6c == $rand4c || $rand6c == $rand5c);
echo " ".$rand6c." ";
}
		
			$somac = $rand1c + $rand2c + $rand3c + $rand4c + $rand5c + $rand6c;
	echo "<br> soma das cartas do computador: ".$somac;
	

return;
}
	for ($x = 0; $x < $nun; $x++)
	
		if($x > 0)
		if($x >= 2)
		$n[]= ($rand1c and $rand2c);;
		if($x >= 3){
		$n[]= ($rand1c and $rand2c and $rand3c);}
		if($x >= 4){
		$n[]= ($rand1c and $rand2c and $rand3c and $rand4c);}
		if($x >= 5){
		$n[]= ($rand1c and $rand2c and $rand3c and $rand4c and $rand5c);}
		if($x >= 6){
		$n[]= ($rand1c and $rand2c and $rand3c and $rand4c and $rand5c and $rand6c);}
				sort($n);
	$cartasc[] = $n;

		return $cartasc;}
	
function sortear($nun){
$rand1 = 0;
$rand2 = 0;
$rand3 = 0;
$rand4 = 0;
$rand5 = 0;
$rand6 = 0;
	
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
		$soma = $rand1 + $rand2 + $rand3 + $rand4 + $rand5 + $rand6;
	echo "<br> soma das cartas: ".$soma;
return;

}
	for ($x = 0; $x < $nun; $x++)
	
		if($x > 0)
		if($x >= 2)
		$n[]= ($rand1 and $rand2);
		if($x >= 3){
		$n[]= ($rand1 and $rand2 and $rand3);}
		if($x >= 4){
		$n[]= ($rand1 and $rand2 and $rand3 and $rand4);}
		if($x >= 5){
		$n[]= ($rand1 and $rand2 and $rand3 and $rand4 and $rand5);}
		if($x >= 6){
		$n[]= ($rand1 and $rand2 and $rand3 and $rand4 and $rand5 and $rand6);}
				sort($n);
	$cartas[] = $n;
	
		return $cartas;
	} 
?>
