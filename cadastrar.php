<?php
include_once("conex.php");

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING);
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

echo: "$nome";
echo: "$email";

//$resultado = "INSERT INTO users (nome, email, created) VALUES ('$nome', '$email', NOW())";
//$resultadouser = mysqli_query($conn, $resultado);