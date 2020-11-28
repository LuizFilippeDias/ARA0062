<?php
session_start();
include_once "../database/conexao.php";

$id=$_GET["id"];
$sql = "SELECT * FROM usuario WHERE id='$id'";
$resultado = mysqli_query($conn, $sql) or die("Erro ao retornar dados");
while ($registro = mysqli_fetch_array($resultado))
{
   $login = $registro['login'];
   $senha = $registro['senha'];
}
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Blog do Luiz</title>		
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	</head>
	<body>
		<ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="./dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./cadastrarUsuário.php">Cadastrar usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./cadastrarPost.php">Cadastrar post</a>
            </li>
        </ul>
		<h1>Editar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="../services/editaUsuario.php">
			<label>Login: </label>
			<?php
				echo "<input type='text' name='editLogin' id='editLogin' value='$login' >";
				echo "<input type='hidden' name='editId' id='editId' value='$id' >";
			?>
			
			<label>Senha: </label>
			<?php
				echo "<input type='password' id='editSenha' name='editSenha' value='$senha' >";
			?>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>