<?php 
include("../conexao.php");

$nome_empresa = $_POST['informacao_form']["nome_empresa"];
$cnpj = $_POST['informacao_form']["cnpj"];
$segmento = $_POST['informacao_form']["segmento"];
$senha = $_POST['informacao_form']["senha"];


$stmt = $conn->prepare("INSERT INTO estabelecimento (nome_empresa, cnpj, segmento, senha) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $nome_empresa, $cnpj, $segmento, $senha);

$stmt->execute();

echo "Usuario Cadastrado com Sucesso";

$stmt->close();
$conn->close();


?>