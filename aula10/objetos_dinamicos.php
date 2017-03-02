<?php
//cria objeto william
$william= new stdclass; 
$william->nome = 'William Santos';
$william->idade = 20;
$william->profissao = 'Programador';
//cria objeto rafaela
$rafaela= new stdclass;
$rafaela->nome = 'Rafaela Santos';
$rafaela->idade = 24;
$rafaela->profissao = 'Policial Militar';
print_r($william);
print_r($rafaela);
?>