<?php
//Abrir Conexão com o Banco de Dados
$link=mysqli_connect('localhost','root','');
$conexao=mysqli_select_db($link, 'maestro' );

//Faz o Uso do Banco de Dados
	//Busca os dados
$sql="insert into usuarios(nome,usuario,senha)	values (null,'NOME','nome','1234')";
$resultado=mysqli_query($link,$sql);
//Fechar Conexão
mysqli_close($link);
?>