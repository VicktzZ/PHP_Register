<?php 

include 'Contato.class.php';
$email = $_POST['email'];
$senha = $_POST['senha'];

$contato = new Contato();
$contato->adicionar($email, $senha);

