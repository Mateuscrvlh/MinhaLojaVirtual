<?php
session_start();
include('conexao.php');

if(isset($_POST['nome']) ||isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['email']) == 0) {
        echo "<h1 class='falha'>Preencha seu e-mail</h1>";
    } else if(strlen($_POST['senha']) == 0) {
        echo "<h1 class='falha'>Preencha sua senha</h1>";
    } else {

        $nome = $mysqli->real_escape_string($_POST['nome']);
        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        $sql_code = "INSERT INTO usuarios(nome, email, senha) VALUES('$nome','$email','$senha')";
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);
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
        <h1>Cadastre-se<br />E veja nossos produtos</h1>
        <img
          src="online-wishes-list.svg"
          class="left-login-image"
          alt="astronauta em carro animação"
        />
      </div>
      <div class="right-login">
        <div class="card-login">
          <h1>CADASTRO</h1>
          <form action="" method="POST">
          <div class="textfield">
            <label for="username">Nome</label>
            <input
              type="text"
              name="nome"
              placeholder="insira seu nome"
            />
          </div>
          <div class="textfield">
            <label for="username">E-mail</label>
            <input
              type="text"
              name="email"
              placeholder="insira seu e-mail"
            />
          </div>
          <div class="textfield">
            <label for="password">Senha</label>
            <input
              type="password"
              name="senha"
              placeholder="insira sua senha"
            />
          </div>
          <button type="submit" class="btn-login">Cadastre-se</button>
          <a href="index.php" class="logar">Faça Login</a>
        </form>
        </div>
      </div>
    </div>
  </body>
</html>