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
        <div >
    
        </div>
    </section>
    <!-- .categorias -->
    <!-- footer -->
    <?php include "footer.php"; ?>
    <!-- .footer -->
</body>

</html>