<?php
$a = array (
		"a" => "ma��",
		"b" => "banana" 
);
$b = array (
		"a" => "p�ra",
		"b" => "framboesa",
		"c" => "morango" 
);

$c = $a + $b; // Uniao de $a e $b
echo "Uni�o de \$a e \$b: \n";
var_dump ( $c );

$c = $b == $a; // Uni�o de $b e $a
echo ": \n";
var_dump ( $c );

$c = $b === $a; // Uni�o de $b e $a
echo ": \n";
var_dump ( $c );

$c = $a != $b;
echo ": \n";
var_dump ( $c );

$c = $a <> $b;
echo ": \n";
var_dump ( $c );

?>