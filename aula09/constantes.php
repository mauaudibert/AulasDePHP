<?php
class Biblioteca
{
	const nome = "Sistema ";
}
class Aplicacao extends Biblioteca
{
	// declaração das constantes
	const AMBIENTE = "Maestro ";
	const VERSAO = "1.0.0.1";
	/* método construtor
	 * acessa as constantes internamente
	 */
	function __construct($NOME)
	{
		echo parent::NOMESISTEMA . self::AMBIENTE . self::VERSAO . $Nome . "\n";
	}
	}
	// acessa as constantes externamente
	echo Biblioteca::NOME . Aplicacao:-.AMBIENTE . Aplicacao: :VERSAO . "\n";
	new Aplicacao(' 2016');
	new Aplicacao(' 2017');
	?>