<?php
// Conectando ao banco de dados: 
include_once("../database/conexao.php");

$id=$_POST["editId"];
$titulo = filter_input(INPUT_POST, 'editTitulo', FILTER_SANITIZE_STRING);
$corpo = filter_input(INPUT_POST, 'editCorpo', FILTER_SANITIZE_STRING);
$sql = "UPDATE blog SET titulo='$titulo', corpo='$corpo' WHERE id='$id'";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

if ($resultado) {
    header("Location: ../pages/dashboard.php");
} else {
    echo('Erro na alteração');
}
?>