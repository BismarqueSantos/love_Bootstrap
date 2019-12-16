<?php


// CRIANDO CONEXÂO
$conn = new mysqli('localhost', 'root', '', 'love');


// CHECANDO CONEXÂO
if ($conn->connect_error){
	die("Conexão Falhou" . $conn->connect_error);
	
}
