<?php
$a=true;
$b=true;

/*
if ($a > $b)
	echo 'verdadeiro';
*/
if ($a) {
	echo'1';
}

if (! $a) {
	echo'2';
}

if ($a + $b) {
	echo'3';
}

if ($a or true) {
	echo'4';
}
	
?>