<?php 
include("../conexao.php");

$nome = $_POST['informacao_form']["nome"];
$cpf = $_POST['informacao_form']["cpf"];
$genero = $_POST['informacao_form']["genero"];
$senha = $_POST['informacao_form']["senha"];


$stmt = $conn->prepare("INSERT INTO usuarios (nome, cpf, genero, senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome, $cpf, $genero, $senha);

$stmt->execute();

echo "Usuario Cadastrado com Sucesso";

$stmt->close();
$conn->close();


?>