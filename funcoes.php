<?php

function InicioForm(){
    echo "<form name=\"frm\" id=\"frm\" action=\"\" method=\"POST\">";
}

function FimForm(){
    echo "</form>";
}

function TextBox($name, $value=""){
    echo "<input type=\"text\" name=\"$name\" value=\"$value\" /><br>";
}

function BotaoEnvia($name,$value){
    echo "<input type=\"submit\" name=\"$name\" value=\"$value\">";
}

function Descricao($nome){
    echo "$nome ";
}

function Enter(){
    echo "<br>";
}

function Hidden($name,$value){
    echo "<input type=hidden name=$name value=\"$value\">";
}

function Meta($endereco) {
?> 
	<META http-equiv="refresh" content="0;URL=<?echo $endereco?>" />
<?php
}


?>
