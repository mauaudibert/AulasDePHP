<?php
$a = 3;
$b = &$a; // $b � uma refer�ncia de $a

print "$a\n"; // imprime 3
print "$b\n"; // imprime 3

$a = 4; // modificamos $a

print "$a\n"; // imprime 4
print "$b\n"; // imprime 4 tamb�m, pois $b � uma refer�ncia de $a, que foi
              // modificada
?>