<?php
include('Produto.php');
include('funcoes.php');

if(isset($_POST['adicionar'])){
    $produto = new Produto($_POST['tit'], $_POST['categ'], $_POST['marca'], $_POST['desc'], $_POST['val']);
    $produto->insereProd();
    InicioForm();
    BotaoEnvia("voltar","Voltar");
    FimForm();
}

if(isset($_POST['voltar'])){
    header("Location:index.php");
}

if(!count($_POST)){
    InicioForm();
    Descricao("Titulo"); TextBox("tit");Enter();
    Descricao("Categoria"); TextBox("categ");Enter();
    Descricao("Marca"); TextBox("marca");Enter();
    Descricao("Descricao"); TextBox("desc");Enter();
    Descricao("Valor"); TextBox("val");Enter();
    BotaoEnvia("adicionar","Adicionar");
    BotaoEnvia("voltar","Voltar");
    FimForm();
    
}
?>
