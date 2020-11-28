<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="author" content="Luizinho">
        <title>Blog do Luiz</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    </head>
    <body>
        <form style="margin:0 auto; width: 400px; border: 1px solid black; margin-top: 100px; padding: 20px; border-radius: 5px" method="POST" action="./services/userCheckout.php">
            <h2>Bem-vind@!</h2>
            <div class="form-group">
                <label>Login</label>
                <input type="text" class="form-control" name="login" placeholder="Login" required autofocus>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <input class="form-control" type="password" name="senha" id="senha" placeholder="Senha" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <p>
            <?php 
			//Recuperando o valor da variável global, os erro de login.
			if(isset($_SESSION['loginErro'])){
                echo $_SESSION['loginErro'];
                unset($_SESSION['loginErro']);
            }?>
        </p>
        <p>
            <?php 
			//Recuperando o valor da variável global, deslogado com sucesso.
            if(isset($_SESSION['logindeslogado'])){
                echo $_SESSION['logindeslogado'];
                unset($_SESSION['logindeslogado']);
            }
            ?>
        </p>
    </body>
</html>