<?php
// Conectando ao banco de dados: 
include_once("../database/conexao.php");

$id=$_GET["id"];

$sql = "DELETE FROM usuario WHERE id='$id'";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

header("Location: ../pages/dashboard.php");
?>