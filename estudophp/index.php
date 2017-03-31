<?php

class pessoas {

var $nome, $idade, $telefone;

function esc_nome($nom, $ida, $tel) {
     $this -> nome = $nom;
	 $this -> idade = $ida;
	 $this -> telefone = $tel;
}
  
 
}

$mulher = new pessoas();
$mulher  -> esc_nome('Maria Paula', '25 anos', '81368494');
echo $mulher -> nome. "<br>";
echo $mulher -> idade. "<br>";
echo $mulher -> telefone. "<br>";


?>