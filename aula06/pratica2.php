<a href=""> Aluno</a>
<a href="">Professor</a>
<?php
if (isset ( $_GET ['menu'] )) {
	if ($_GET ['menu'] == 'Aluno') {
		echo 'Aluno';
	} elseif ($_GET ['menu'] == 'Professor') {
		echo 'Professor';
	}
}

?>