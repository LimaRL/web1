<!DOCTYPE html>
<html lang="pt-br">
    <!-- menu -->
    <?php include "head.php"; ?>
    <!-- .menu -->
<body>
    <!-- menu -->
    <?php include "menu.php"; ?>
    <!-- .menu -->
    <!-- banner -->
    <div class="banner-video">
        <div class="protected-play" onclick="call_menu()"></div>
        <div id="player"></div>
    </div>
    <!-- .banner -->
    <!-- categorias -->
    <section id="categoria">
        <h3>Categorias</h3>
        <ul class="_flex _flexflow _space-around categoria">
            <li class="categoria-item" id="first-item">
                <a href="departamento.php">
                    <div>
                        <img src="image/furniture/sofa-laranja.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/bed.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/box.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/chair-white.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/mesa-vidro.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/table-chair.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/table-chair2.png" alt="">
                    </div>
                </a>
            </li>
            <li class="categoria-item ">
                <a href="#">
                    <div>
                        <img src="image/furniture/table.png" alt="">
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