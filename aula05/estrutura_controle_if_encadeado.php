<?php
$salario = 1020; // R$
$tempo_serviço = 9; //meses
$tem_reclamações = false; //boleano

 if ($salario > 1000) 
{
	
	if ($tempo_serviço >= 12)
	{
		if ($tem_reclamações != true) 
		{
			echo 'parabéns você foi promovido1';
		}
	}
}
if (($salario > 1000) and ($tempo_serviço >=12) and ($tem_reclamações != true))
{
	echo 'parabéns, você foi promovido2';
}

?>