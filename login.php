<!DOCTYPE html>
<html lang="pr-br">
<!-- menu -->
<?php include "head.php"; ?>
<!-- .menu -->

<body>
    <!-- menu -->
    <?php include "menu.php"; ?>
    <!-- .menu -->

    <!-- form cadastro -->
    <section id="login">
        <div class="container">
            <div class="form-login">
                <form action="" method="post">
                    <div class="title-form">
                        <h3>Dados de acesso</h3>
                    </div>
                    <div class="form-group _flex _space-between _center">
                        <input type="text" name="usuario" placeholder="Usuário">
                        <input type="password" name="sobrenome" placeholder="Senha">
                    </div>
                    <div class="btn-action-form">
                        <button onclick="logar()">Enviar</button>
                        <a href="cadastrar.html">Cadastrar</a>    
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
    <script type="text/javascript">
        function logar(){
            alert("Logado com sucesso!")
        }
    </script>
</body>

</html>