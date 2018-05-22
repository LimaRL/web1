<?php 
$produto = "Nome do produto";
?>
<!DOCTYPE html>
<html lang="pt-br">
    <!-- menu -->
    <?php include "head.php"; ?>
    <!-- .menu -->
<body>
    <!-- menu -->
    <?php include "menu.php"; ?>
    <!-- .menu -->
    <!-- breacrumb -->
    <?php include "breadcrumb.php"; ?>
    <!-- .breacrumb -->
    <!-- categorias -->
    <section id="categoria">
        <h3>
            <?php 
                if(!$produto){
                    echo "Departamento";
                }
                else{
                    echo $produto;
                }
            ?>
        </h3>
        
        <div class="box_produto-cm">
            <div class="box_descri_produto">
                <p>descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição descrição </p>
            </div>
            <div class="_flex">
                <div class="box_foto_produto">
                    <img class="foto_produto" src="image/furniture/sofa-laranja.png">
                </div>
                <div>
                    <h3>asdasdasd</h3>
                    <p>asidjakjsasdasdasdasd
                        fsaddfasdfa
                    </p>

                </div>
            </div>
                
        </div>
        
    </section>
    <!-- .categorias -->
    <!-- footer -->
    <?php include "footer.php"; ?>
    <!-- .footer -->
</body>

</html>