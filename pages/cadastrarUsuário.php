<?php
session_start();
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
		<h1>Cadastrar Usuário</h1>
		<?php
		if(isset($_SESSION['msg'])){
			echo $_SESSION['msg'];
			unset($_SESSION['msg']);
		}
		?>
		<form method="POST" action="../services/adicionaUsuário.php">
			<label>Login: </label>
			<input type="text" name="login" id="login" placeholder="Digite o login completo"><br><br>
			
			<label>Senha: </label>
			<input type="password" name="senha" id="senha" placeholder="Digite a senha"><br><br>
			
			<input type="submit" value="Cadastrar">
		</form>
	</body>
</html>