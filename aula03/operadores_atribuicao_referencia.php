<?php
$a = 3;
$b = &$a; // $b é uma referência de $a

print "$a\n"; // imprime 3
print "$b\n"; // imprime 3

$a = 4; // modificamos $a

print "$a\n"; // imprime 4
print "$b\n"; // imprime 4 também, pois $b é uma referência de $a, que foi
              // modificada
?>