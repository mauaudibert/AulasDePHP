<a href="pratica2.php?menu=Aluno">Aluno</a>
<a href="pratica2.php?menu=Professor">Professor</a>
<?php
if (isset ( $_GET ['menu'] )) {
	if ($_GET ['menu'] == 'Aluno') {
		echo 'Aluno';
	} elseif ($_GET ['menu'] == 'Professor') {
		echo 'Professor';
	}
}

?>