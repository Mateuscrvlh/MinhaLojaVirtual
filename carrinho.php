<?php
  
  session_start();

?>

<?php include('header1.php'); ?>

<main>
  <div class="carrinho-container">
  <?php
    $items = array (
    ['nome'=>'Placa de Madeira','imagem'=>'produto01.jpg','preco'=>'50','detalhes'=>'produto01.php'],
    ['nome'=>'Porta Retratos','imagem'=>'produto02.jpg','preco'=>'200','detalhes'=>'produto02.php'],
    ['nome'=>'Amigurumi','imagem'=>'produto03.jpg','preco'=>'100','detalhes'=>'produto03.php'],
    ['nome'=>'Peso de Porta','imagem'=>'produto04.jpg','preco'=>'30','detalhes'=>'produto04.php']
    );

    echo '<div class="container my-3">';
    echo '<div class="row">';
    foreach ($items as $key => $value) {
    ?>
      <div class="col-sm-3">
            <div class="card my-3">
              <img src="<?php echo $value['imagem'] ?>" alt="...">
              <div class="card-body">
              </div>
                <p class="my-0"><?php echo $value['nome'] ?></p>
                <p class="my-0">R$ <?php echo $value['preco'] ?>,00</p>
                <a class="button" href="?adicionar=<?php echo $key ?>">carrinho</a>
                <a class="button" href="<?php echo $value['detalhes'] ?>">detalhes</a>
            </div>
    </div>
  <?php
    }
    echo '</div>';
    echo '</div>';
  ?> 
  </div>
  <?php
    if(isset($_GET['adicionar'])){
      $idProduto = (int) $_GET['adicionar'];
      if(isset($items[$idProduto])){
        if(isset($_SESSION['carrinho'][$idProduto])){
          $_SESSION['carrinho'][$idProduto]['quantidade']++;
        }else{
          $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1, 'nome'=>$items[$idProduto]['nome'],'preco'=>$items[$idProduto]['preco']);
        }
        echo '<script>alert("O item foi adicionado ao carrinho")</script>';
      } else {
        die('Você não pode adicionar um item que não existe.');
      }
    }
  ?>

<h2 class="title">Carrinho:</h2>

<?php
  foreach ($_SESSION['carrinho'] as $key => $value) {
    echo '<div class="carrinho-item">';
    echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: R$'.($value['quantidade']*$value['preco']).',00</p>';
    echo '<hr>';
    echo '</div>';
  }
?>
</main>

<?php include('footer.php'); ?>