<?php

// declara vari�vel num�rica
$umidade = 60;

// testa se � maior que 90, retorna um boolean
$vai_chover = ($umidade > 90);

// testa se $vai_chover � verdadeiro
if ($vai_chover) {
	echo 'Esta chovendo';
} else {
	echo 'Nao esta chovendo';
}

?>