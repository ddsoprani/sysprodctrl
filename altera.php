<?php
include('Mercado.php');
include('funcoes.php');

if(isset($_POST['editar'])){

    $item = $_POST["item"];
    $produto  = new Produto();
    $produto->consultaProd($item);

    InicioForm();
    Descricao("Titulo"); TextBox("titulo","$item");Enter();
    Descricao("Categoria"); TextBox("categoria","$produto->categoria");Enter();
    Descricao("Marca"); TextBox("marca","$produto->marca");Enter();
    Descricao("Descricao"); TextBox("descricao","$produto->descricao");Enter();
    Descricao("Valor"); TextBox("valor","$produto->valor");Enter();
    Hidden("tit_orig",$item);
    BotaoEnvia("salvar","Salvar");
    BotaoEnvia("voltar2","Voltar");
    FimForm();

}

if(isset($_POST['salvar'])){
    $tit = $_POST["titulo"];
    $categ = $_POST["categoria"];
    $marca = $_POST["marca"];
    $desc = $_POST["descricao"];
    $val = $_POST["valor"];
    $tit_orig = $_POST["tit_orig"];
    $produto = new Produto($tit, $categ, $marca, $desc, $val);
    $produto->alteraProd($tit_orig);
    InicioForm();
    BotaoEnvia("voltar2","Voltar");
    FimForm();
}

if(isset($_POST['voltar1'])){
    header("Location:index.php");
}

if(isset($_POST['voltar2'])){
    header("Location:altera.php");
}

if(!count($_POST)){
    InicioForm();
    echo "Escolha o produto a alterar:\n<br><br>";
    $mercado = new Mercado();
    $mercado->selectBoxProdutos();
    echo "\t";
    BotaoEnvia("editar","Editar");
    BotaoEnvia("voltar1","Voltar");
    FimForm();
}
?>
