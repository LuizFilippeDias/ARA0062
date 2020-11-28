<?php
session_start();
include_once("../database/conexao.php");

$titulo = filter_input(INPUT_POST, 'titulo', FILTER_SANITIZE_STRING);
$corpo = filter_input(INPUT_POST, 'corpo', FILTER_SANITIZE_STRING);

$result_usuario = "INSERT INTO `blog` (`id`, `titulo`, `corpo`) VALUES (NULL, '$titulo', '$corpo')";
$resultado_usuario = mysqli_query($conn, $result_usuario);

if(mysqli_insert_id($conn)){
	$_SESSION['msg'] = "<p style='color:green;'>Post cadastrado com sucesso</p>";
	header("Location: ../pages/cadastrarPost.php");
}else{
	$_SESSION['msg'] = "<p style='color:red;'>Post não foi cadastrado com sucesso</p>";
	header("Location: ../pages/cadastrarPost.php");
}
