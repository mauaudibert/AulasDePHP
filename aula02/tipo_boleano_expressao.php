<?php

// declara variável numérica
$umidade = 60;

// testa se é maior que 90, retorna um boolean
$vai_chover = ($umidade > 90);

// testa se $vai_chover é verdadeiro
if ($vai_chover) {
	echo 'Esta chovendo';
} else {
	echo 'Nao esta chovendo';
}

?>