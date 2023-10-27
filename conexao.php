<?php 

//configurações de conexão com o banco de daos
$servername = "localhost"; // Endereço do servidor MySQL
$username = "root"; // Nome de usuário do MySQL
$password = ""; // Senha do MySQL
$database = "banco_dados"; // Nome do banco de dados

// Cria uma conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $database);

// Vericar a conexão
if ($conn -> connect_error) {
    die("Conexão falhou: " . $conn -> connect_error);
}

?>