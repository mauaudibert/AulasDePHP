<?php
$a = 40;
$b = 40;

$resultado[] = $a == $b;
$resultado[] =  $a === $b;
$resultado[] =  $a != $b;
$resultado[] =  $a != $b;
$resultado[] =  $a !== $b;
$resultado[] =  $a < $b;
$resultado[] =  $a > $b;
$resultado[] =  $a <= $b;
$resultado[] =  $a >= $b;
$resultado[] =  $a <=> $b;
$resultado[] =  $a ?? $b ?? $c;

var_dump($resultado);
?>

