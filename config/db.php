<?php
$host = 'cuiavagas.mysql.uhserver.com';
$user = 'cuiavagas';
$password = '';
$database = 'cuiavagas';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die('Falha na conexão com o Banco de dados: ' . $conn->connect_error);
}