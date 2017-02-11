<?php
/*
 * Tipo Objeto:
 * Um objeto é uma entidade com um determinado comportamento definido
 * por seus métodos (ações) e propriedades (dados)
 * Para criar um objeto deve-se utilizar o operador NEW.
 * Veja o exemplo de um objeto do tipo COMPUTADOR.
 */
class Caneta {
	var $cor;
	function Riscar() {
		echo "riscando a {$this->cor}...";
	}
}

$obj = new Caneta ();
$obj->cor = "azul";

$obj->Riscar ();

print_r ( $obj );

$obj2 = new Caneta ();
$obj2->cor = "vermelho";

print_r ( $obj2 );
?>