<?php
include('conexao.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "<h1 class='falha'>Preencha seu e-mail</h1>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<h1 class='falha'>Preencha sua senha</h1>";
    } else {

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' ";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {
            
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: home.php");

        } else {
            echo "<h1 class='falha'>Falha ao logar! E-mail ou senha incorretos</h1>";
        }

    }

}
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="stylelogin.css" />
    <title>Tela de login</title>
  </head>
  <body>
    <div class="main-login">
      <div class="left-login">
        <h1>Faça login<br />E veja nossos produtos</h1>
        <img
          src="online-wishes-list.svg"
          class="left-login-image"
          alt="astronauta em carro animação"
        />
      </div>
      <div class="right-login">
        <div class="card-login">
          <h1>LOGIN</h1>
          <form action="" method="POST">
          <div class="textfield">
            <label for="username">Username</label>
            <input
              type="text"
              name="email"
              placeholder="insira seu email"
            />
          </div>
          <div class="textfield">
            <label for="password">Password</label>
            <input
              type="password"
              name="senha"
              placeholder="insira sua senha"
            />
          </div>
          <button type="submit" class="btn-login">Login</button>
        </form>
        <a href="cadastro.php" class="cadastrar">Cadastre-se</a>
        </div>
      </div>
    </div>
  </body>
</html>