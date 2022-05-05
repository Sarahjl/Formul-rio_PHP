<?php

require_once("../model/pessoa.class.php");

$pessoa = new Pessoa();
$pessoa->setNome($_POST['txtNome']);
echo $pessoa->getNome(). "<br/>";

$pessoa = new Pessoa();
$pessoa->setEnd($_POST['txtEnd']);
echo $pessoa->getEnd();

?>