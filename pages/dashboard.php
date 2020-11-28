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
        <script>
            function confirmarExclusaoUsuario (id) {
                if (confirm("Deseja realmente excluir o usuário?")) {
                    window.location.replace("https://luizguilhermedias.000webhostapp.com/services/excluirUsuario.php?id="+id);
                }
            }

            function confirmarExclusaoPost (id) {
                if (confirm("Deseja realmente excluir o post?")) {
                    window.location.replace("https://luizguilhermedias.000webhostapp.com/services/excluirPost.php?id="+id);
                }
            }
        </script>
    </head>
    <body>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href="#">Dashboard</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./cadastrarUsuário.php">Cadastrar usuário</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./cadastrarPost.php">Cadastrar post</a>
            </li>
        </ul>
        <div class="row" style="padding: 20px">
            <div class="col">
                <h3>Usuários</h3>
                <table class="table">
                    <thead>
                        <th>id</th>
                        <th>Login</th>
                        <th>Senha</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                          include("../services/consultaUsuário.php");
                        ?>
                    </tbody>
                </table>
                <!-- <form action="../services/consultaUsuário.php">
                    <button type="submit">Buscar usuários</button>
                </form> -->
            </div>
            <div class="col">
                <h3>Posts</h3>
                <!-- <table class="table">
                    <tbody> -->
                        <?php
                          include("../services/consultaPosts.php");
                        ?>
                    <!-- </tbody> -->
                <!-- </table> -->
            </div>
        </div>
    </body>
</html>