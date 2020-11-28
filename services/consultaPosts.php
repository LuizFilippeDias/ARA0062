<?php
// Conectando ao banco de dados: 
include_once("../database/conexao.php");
// Criando tabela e cabeçalho de dados:
  
 $sql = "SELECT * FROM blog";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $id = $registro['id'];
    $titulo = $registro['titulo'];
    $corpo = $registro['corpo'];
    echo "<div class='card' style='margin: 10px'>";
    echo "<div class='card-body'>";
    echo "<h5 class='card-title' style='display:none'>".$id."</h5>";
    echo "<h5 class='card-title'>".$titulo."</h5>";
	echo "<p class='card-text'>".$corpo."</p>";
	echo "<a style='padding:5px' class='btn btn-primary' href='#' onclick ='confirmarExclusaoPost(". $id . ")'> Excluir</a>";
	echo "<a style='padding:5px' class='btn' href='../pages/editarPost.php?id=". $id . "'>Alterar</a>";
    echo "</div>";
    echo "</div>";
 }
 mysqli_close($conn);
 ?>