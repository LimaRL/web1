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
    <section id="cadastro">
        <div class="container">
            <div class="form-cadastro">
                <form action="" method="post">
                    <div class="title-form">
                        <h3>Dados pessoais</h3>
                    </div>
                    <div class="form-group _flex _space-between _center">
                        <input type="text" name="nome" placeholder="Nome">
                        <input type="text" name="sobrenome" placeholder="Sobrenome">
                    </div>
                    <div class="form-group _flex _space-between _center">
                        <input type="email" name="email" placeholder="Email">
                        <input type="phone" name="telefone" placeholder="Telefone">
                    </div>
                    <div class="form-group _flex _space-between _center">
                        <input type="text" name="estado" placeholder="Estado">
                        <input type="text" name="cidade" placeholder="Cidade">
                    </div>  
                    <div class="form-group _flex _space-between _center">
                        <input class="width-full" type="text" name="endereco" placeholder="Endereço">             
                    </div>
                    <div class="title-form">
                        <h3>Dados de acesso</h3>
                    </div>
                    <div class="form-group _flex _space-between _center">
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div> 
                    <div class="form-group">
                        <input type="password" name="senha" placeholder="Senha">
                        <input type="password" name="senha-r" placeholder="Repetir Senha">
                    </div>
                    <div class="btn-action-form">
                        <button onclick="enviarCadastro()">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <?php include "footer.php" ?>
    <script type="text/javascript">
    function enviarCadastro(){
        alert("Cadastro realizado com sucesso!")
    }
</script>
</body>

</html>