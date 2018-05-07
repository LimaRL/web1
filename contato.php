<!DOCTYPE html>
<html lang="pr-br">
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
    <!-- form cadastro -->
    <section id="login">
        <div class="container">
            <div class="form-login">
                <form action="" method="post">
                    <div class="title-form">
                        <h3>Fale conosco</h3>
                    </div>
                    <div class="form-group _flex _space-between _center">
                        <input type="text" name="usuario" placeholder="Nome">
                    </div>
                    <div class="form-group _flex _space-between _center">
                        <input type="text" name="usuario" placeholder="Telefone">
                        <input type="mail" name="usuario" placeholder="Email">
                    </div>
                    <div class="form-group _flex _space-between _center">
                        <textarea name="" id="" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="btn-action-form">
                        <button onclick="logar()">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
    <script type="text/javascript">
    function logar(){
        alert("Mensagem enviada!")
    }
</script>
</body>

</html>