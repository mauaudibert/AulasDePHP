<?php
//insere a classe
include_once 'produto.php';
?>


<?php
// cria um objeto
$produto = new Produto;

// atribuir valores
$produto->codigo = 4001;
$produto->descricao = 'CD - The Best of Eric Clapton';


echo $produto; 
//Version < 5.5 = Object #1
//Version > 5.6 = Catchable fatal error: Object of class Produto could not be converted to string
?>

<?php
// cria um objeto
$produto = new Produto;

// atribuir valores
$produto->codigo = 4001;
$produto->descricao = 'CD - The Best of Eric Clapton';

//Fazendo uso de funções para visualizar os dados do contexto
$produto->imprimeEtiqueta();
?>


<?php 
// cria um objeto
$produto1 = new Produto;
$produto2 = new Produto;


// atribuir valores
$produto1->codigo = 4001;
$produto1->descricao = 'CD - The Best of Eric Clapton';

$produto2->codigo = 4002;
$produto2->descricao = 'CD - The Eagles Hotel California';

// imprime informações de etiqueta
$produto1->imprimeEtiqueta();
$produto2->imprimeEtiqueta();
?>
