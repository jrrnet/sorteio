<?php 
  require 'sorteio.php';
  $s = new Sorteio();
 ?>
 
 <h1>Sorteio do dia 12/06/2017</h1>
 
 <h3>Sorteado 1 (R$ 500,00): <?php echo $s->sortear(); ?></h3>
 <h3>Sorteado 2 (Livro): <?php echo $s->sortear(); ?></h3>