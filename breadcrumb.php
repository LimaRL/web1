<?php 
    $actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; 
    $arquivoArray = str_word_count($actual_link, 1);
    end($arquivoArray);
    $arquivoName = prev($arquivoArray);
?>
<nav class="breadcrumb-nav">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
    <?php if($arquivoName == "produto"):?>
    <li class="breadcrumb-item" aria-current="page"><a href="departamento.php">Nome do departamento</a></li>
    <?php endif; ?>
    <li class="breadcrumb-item active" aria-current="page"><?php echo $arquivoName; ?></li>
  </ol>
</nav>