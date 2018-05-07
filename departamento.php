<?php 
$departamento = "nome do departamento";
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
                if(!$departamento){
                    echo "Departamento";
                }
                else{
                    echo $departamento;
                }
            ?>
        </h3>
        <ul class="_flex _flexflow _space-around categoria">
            <li class="categoria-item" id="first-item">
                <a href="produto.php">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
        </ul>
    </section>
    <!-- .categorias -->
    <!-- footer -->
    <?php include "footer.php"; ?>
    <!-- .footer -->
</body>

</html>