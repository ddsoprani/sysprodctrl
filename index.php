<html>
<head>
<title>Supermercado Impacta - Solucoes para suas compras</title>
</head>
<body>


<?php
include ('Mercado.php');

echo "Produtos existentes no Supermercado:\n<br><br>";

$mercado = new Mercado();
$mercado->listaProdutos();

?>

<br><br><br>
<form name="frm" id="frm" action="" method="POST">
<input type="submit" value="Adicionar" onclick="Add();">
<input type="submit" value="Alterar" onclick="Alt();">
<input type="submit" value="Excluir" onclick="Exc();">
</form>

<script>
function Add(){
    document.frm.action='adicionar.php';
    documento.frm.submit();
}
function Alt(){
    document.frm.action='altera.php';
    documento.frm.submit();
}
function Exc(){
    document.frm.action='excluir.php';
    documento.frm.submit();
}
</script>


</body>
</html>
