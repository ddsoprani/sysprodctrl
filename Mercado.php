<?php
include('Produto.php');

class Mercado{
    public function conecta(){
        include ('conecta.php');
        //$conn = mysql_connect("localhost" , "root", "danilo");
        //$db = mysql_select_db("impacta", $conn);
        return $conn;
    }

    public function listaProdutos(){
        $conn = $this->conecta();
        $query = mysql_query($str="SELECT * from produto", $conn);
        $i = 1;
        while($dados = mysql_fetch_array($query)){
            $produto = new Produto();
            $produto->titulo = $dados["titulo"];
            echo "<a href=\"http://localhost/Mercado/detalhes.php?prod=$produto->titulo\" onclick=\"window.open(this.href,'galeria','width=300,height=300'); return false;\">". $i . ' -> ' . $produto->titulo . "</a><br>";
            $i++;
        }

    }


    public function selectBoxProdutos(){
        $conn = $this->conecta();
        $query = mysql_query($str="SELECT * from produto", $conn);
        echo "<select name=\"item\">";
        while($dados = mysql_fetch_array($query)){
            $produto = new Produto();
            $produto->titulo = $dados["titulo"];
            echo "<option value=\"$produto->titulo\">$produto->titulo</option>";
        }
        echo "</select>";

    }

}

?>
