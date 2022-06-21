<?php

include('protect.php');

?>
<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <!--Comentário-->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
			crossorigin="anonymous"
		/>
		<link href="stylespaginas.css" rel="stylesheet" />
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
			crossorigin="anonymous"
		></script>
		<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <title>ComAmorPresente</title>

    <!-- ICONS -->
    <link rel="stylesheet" href="assets/style.css" />

    <!-- SWIPER -->
    <link
      rel="stylesheet"
      href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
    />

    <!-- STYLES -->
    <link rel="stylesheet" href="paginas.css" />

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&family=Poppins:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body>
  <header id="header">
      <nav class="container">
        <a class="logo" href="home.php">Com<span>Amor</span>Presente<span>.</span></a>
        <!-- menu -->
        <div class="menu">
          <ul class="grid">
            <li><a class="title" href="#home">Início</a></li>
            <li><a class="title" href="#about">Sobre</a></li>
            <li><a class="title" href="#services">Serviços</a></li>
            <li><a class="title" href="#testimonials">Depoimentos</a></li>
            <li><a class="title" href="#contact">Contato</a></li>
            <li><a class="title" href="carrinho.php">Produtos</a></li>
            <li><a class="title" href="logout.php">Sair</a></li>
          </ul>
        </div>
        <!-- menu -->
        <div class="toggle icon-menu"></div>
        <div class="toggle icon-close"></div>
      </nav>
  </header>