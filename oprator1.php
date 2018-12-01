<?php
$mas1=$_POST["operand1"]
$mas=$_POST["operator"]
$mas2=$_POST["operand2"]
if ($mas1=="TRUE") {
	$mmas1=1;
}
else{
	$mas1=0;
}
if ($mas2=="TRUE") {
	$mmas2=1;
}
else{
	$mas2=0;
}
if ($mas=="And") {
	$ac=$mmas1 && $mmas2;
}
if ($mas=="Or") {
	$ac=$mmas1 || $mmas2;
}
if ($mas=="Xor") {
	$ac=$mmas1 Xor $mmas2;
}
if ($mas=="!") {
	$ac=$mmas1 ! $mmas2;
}

echo "$ac";
?>


