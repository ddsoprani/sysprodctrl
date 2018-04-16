<?php
include('conecta.php');
include('Mercado.php');
include('funcoes.php');

//$liberaDelete = false;
?>


<script>
/*function mensagem(){
    var name=confirm('Confirmar delete?')
    if(name==true){
        document.write("Delete " + "confirmado");
        <?php 
        $liberaDelete = true;
        ?>
    }
    else{
        document.write("Cancelar");
        <?php 
        $liberaDelete = false;
        ?>
    }
}*/
</script>



<?php

if(isset($_POST['excluir']) /*&& $liberaDelete*/){
    $item = $_POST["item"];
    $produto = new Produto();
    $produto->excluiProd($item);
    InicioForm();
    BotaoEnvia("voltar2","Voltar");
    FimForm(); 
}

if(isset($_POST['voltar1'])){
    header("Location:index.php");
}

if(isset($_POST['voltar2'])){
    header("Location:excluir.php");
}

if(!count($_POST)){
    InicioForm();
    echo "Escolha o produto a excluir:\n<br><br>";
    $mercado = new Mercado();
    $mercado->selectBoxProdutos();
    echo "\t";
    BotaoEnvia("excluir","Excluir");
    //echo "<input type=\"submit\" name=\"excluir\" value=\"Excluir\" onclick=\"mensagem()\">";
    BotaoEnvia("voltar1","Voltar");
    FimForm();
}
?>
