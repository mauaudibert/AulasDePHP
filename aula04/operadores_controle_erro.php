<?php

/* Erro de arquivo intencional */
$my_file = @file ( 'arquivo_nao_existente' ) or die ( "Falha abrindo arquivo: '$php_errormsg'" );

// Isto funciona para qualquer express�o, n�o apenas para fun��es:
$value = @$cache [$key];
// voc� n�o receber� nenhum aviso se a chave $key n�o existir.


?>




