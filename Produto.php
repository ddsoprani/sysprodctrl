<?php
class Produto{
    public $titulo;
    public $categoria;
    public $marca;
    public $descricao;
    public $valor;

    public function Produto($t, $c, $m, $d, $v){
        $this->titulo = $t;
        $this->categoria = $c;
        $this->marca = $m;
        $this->descricao = $d;
        $this->valor = $v;
    }

    public function conecta(){
        include('conecta.php');
        return $conn;
    }

    public function mostra(){
        echo "Titulo: "     . $this->titulo . "<br>";
        echo "Categoria: "  . $this->categoria . "<br>";
        echo "Marca: "      . $this->marca . "<br>";
        echo "Descricao: "  . $this->descricao . "<br>";
        echo "Valor: "      . $this->valor . "<br>";
        
        echo "<input type=\"button\" value=\"Fechar\" onclick=\"javascript:window.close()\">";
    }

    public function consultaProd($item){
        $conn = $this->conecta();
        $query = mysql_query($str="SELECT * FROM produto WHERE titulo='$item'", $conn);
        while($dados = mysql_fetch_array($query)){
            $this->titulo    = $dados["titulo"];
            $this->categoria = $dados["categoria"];
            $this->marca     = $dados["marca"];
            $this->descricao = $dados["descricao"];
            $this->valor     = $dados["valor"];
        }
    }
    
    public function insereProd(){
        $conn = $this->conecta();
        $insere = mysql_query($str="INSERT INTO produto (titulo, categoria, marca, descricao, valor) 
                VALUES ('$this->titulo', '$this->categoria','$this->marca', '$this->descricao', '$this->valor')", $conn);
        if($insere){
            echo "Produto $this->titulo inserido!";
        }
        else
            echo 'Erro ao inserir';
    }
    
    public function excluiProd($item){
        $conn = $this->conecta();
        $del = mysql_query($str="DELETE FROM produto WHERE titulo='$item'", $conn);
        if($del)
            echo "Produto $item excluido!<br>";
        else
            echo "Erro ao deletar<br>";

    }
    
    public function alteraProd($tit_orig){
        $conn = $this->conecta();
        $up = mysql_query($str="UPDATE produto SET titulo='$this->titulo', categoria=$this->categoria, marca = '$this->marca', descricao = '$this->descricao', valor=$this->valor WHERE titulo='$tit_orig'", $conn);
        if($up)
            echo "Produto $this->titulo atualizado!<br>";
        else
            echo "Erro ao atualizar<br>";
        
    }


}
?>
