<?php
//Abrir Conexão com o Banco de Dados
$link=mysqli_connect('localhost','root','');
$conexao=mysqli_select_db($link, 'maestro' );

//Faz o Uso do Banco de Dados
	//Busca os dados
$sql='select*from usuarios';
$resultado=mysqli_query($link,$sql);
?>


<table>

	<tr>
		<td>id</td>
		<td>usuario</td>
		<td>senha</td>
		<td>nome</td>
	</tr>

<?php while($row = mysqli_fetch_assoc($resultado)) 	{ ?>
	<tr>
		<td><?php echo $row['id_usuario'];?></td>
		<td><?php echo $row['usuario'];?></td>
		<td><?php echo $row['senha'];?></td>
		<td><?php echo $row['nome'];?></td>
	</tr>
<?php	} ?>

<?php mysqli_close($link); ?>
	
</table>