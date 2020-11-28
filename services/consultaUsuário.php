<?php
// Conectando ao banco de dados: 
include_once("../database/conexao.php");
// Criando tabela e cabeçalho de dados:
  
 $sql = "SELECT * FROM usuario";
 $resultado = mysqli_query($conn,$sql) or die("Erro ao retornar dados");
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
    $id = $registro['id'];
    $login = $registro['login'];
    $senha = $registro['senha'];
    echo "<tr>";
    echo "<td>".$id."</td>";
    echo "<td>".$login."</td>";
	echo "<td>".$senha."</td>";
	echo "<td><a href='#' onclick ='confirmarExclusaoUsuario(". $id . ")'> Excluir</a></td>";
	echo "<td><a href='../pages/editarUsuario.php?id=". $id . "'>Alterar</a></td>";
    echo "</tr>";
 }
 ?>