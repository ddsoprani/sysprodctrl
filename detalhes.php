<?php
include('Produto.php');

$produto = new Produto();
$produto->conecta();

$prodAlterar = $_GET['prod'];

$produto->consultaProd($prodAlterar);

$produto->mostra();

?>
