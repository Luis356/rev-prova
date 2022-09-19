<?php

require_once("conexao.php");

$usuario_cad = $_POST["nome"];
$senha_cad = $_POST["senha"];
$sob_cad = $_POST["sob-nome"];

$sql = "INSERT INTO dados VALUES (null, '$usuario_cad', '$senha_cad', '$sob_cad')";
$result = $con->query($sql);


