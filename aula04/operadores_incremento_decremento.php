<?php
echo "<h3>P�s-incremento</h3>";
$a = 5;
echo "Deve ser 5: " . $a ++ . "<br />\n";
echo "Deve ser 6: " . $a . "<br />\n";

echo "<h3>Pr�-incremento</h3>";
$a = 5;
echo "Deve ser 6: " . ++ $a . "<br />\n";
echo "Deve ser 6: " . $a . "<br />\n";

echo "<h3>P�s-decremento</h3>";
$a = 5;
echo "Deve ser 5: " . $a -- . "<br />\n";
echo "Deve ser 4: " . $a . "<br />\n";

echo "<h3>Pr�-decremento</h3>";
$a = 5;
echo "Deve ser 4: " . -- $a . "<br />\n";
echo "Deve ser 4: " . $a . "<br />\n";
?>