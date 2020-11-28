<?php
// Conectando ao banco de dados: 
include_once("../database/conexao.php");

$id=$_POST["editId"];
$login = filter_input(INPUT_POST, 'editLogin', FILTER_SANITIZE_STRING);
$senha = filter_input(INPUT_POST, 'editSenha', FILTER_SANITIZE_STRING);
$sql = "UPDATE usuario SET login='$login', senha='$senha' WHERE id='$id'";
$resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");

if ($resultado) {
    header("Location: ../pages/dashboard.php");
} else {
    echo('Erro na alteração');
}
?>