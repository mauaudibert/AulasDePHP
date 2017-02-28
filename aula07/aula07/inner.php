<?php
//Abrir Conexão
$link = mysqli_connect('localhost','root','','maestro');


$resultado = mysqli_query($link, "select id, id_aluno, id_curso from matricula");
if(mysqli_num_rows($resultado)){

	while($row = mysqli_fetch_assoc($resultado)){

		echo 'CODIGO MATRICULA: '. $row['id'];

		$dados_aluno = mysqli_query($link, "SELECT id, nome,endereco,cpf,email,data_nascimento,responsavel,telefone  FROM aluno WHERE id=".$row['id']);
		if(mysqli_num_rows($dados_aluno)){
				
			$aluno = mysqli_fetch_row($dados_aluno);
				
			echo 'NOME ALUNO:'.$aluno['nome']."</br> \n";
			echo 'ENDEREÇO:'.$aluno['endereco']."</br> \n";
			echo 'CPF:'.$aluno['cpf']."</br> \n";
				
		}


		$dados_curso = mysqli_query($link, "SELECT * FROM cursos WHERE id = " . $row['id_curso'] );
		if(mysqli_num_rows($dados_curso)){
				
			$curso = mysqli_fetch_row($dados_curso);
				
			echo 'NOME DO CURSO:'.$curso['nome'];
		}


	}
}
