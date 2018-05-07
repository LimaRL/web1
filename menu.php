<?php 
$actual_link = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']; 
$arquivoArray = str_word_count($actual_link, 1);
end($arquivoArray);
$arquivoName = prev($arquivoArray);
?>
<nav class="nav-top large" id="id-nav-top">
    <div class="container">
        <div class="_flex _space-between _center">
            <h1 id="logo">
                <a href="index.php">
                    <img src="image/logo.png" alt="Logo Br Store">
                </a>
            </h1>
            <div id="btn-call-menu-mobile">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <ul class="_flex _center menu-top menu-top-mobile ">
                <li class="menu-top-item <?php echo $arquivoName == 'index' ? "menu-ativo" : "";?>">
                    <a href="index.php">Home</a>
                </li>
                <li class="menu-top-item">
                    <?php 
                        if($arquivoName == "index"){
                            echo '<a href="#categoria">Departamentos</a>';
                        }else{
                            echo '<a href="index.php?r=#categoria">Departamentos</a>';
                        }
                    ?>
                    
                </li>
                <li class="menu-top-item <?php echo $arquivoName == 'sobre' ? "menu-ativo" : "";?>">
                    <a href="sobre.php">Sobre</a>
                </li>
                <li class="menu-top-item <?php echo $arquivoName == 'contato' ? "menu-ativo" : "";?>">
                    <a href="contato.php">Contato</a>
                </li>
                <li class="menu-top-item dropdown
                <?php 
                    echo (
                        ($arquivoName == 'login') ||
                        ($arquivoName == 'cadastrar')
                    
                    ) ? "menu-ativo" : "";?>
                ">
                    <a href="" title="Menu do Usuário">
                        <i class="fas fa-user"></i>
                    </a>
                    <div class="dropdown-content">
                        <ul>
                            <li class="<?php echo $arquivoName == 'login' ? "menu-ativo" : "";?>">
                                <a href="login.php">Entrar</a>
                            </li>
                            <li class="<?php echo $arquivoName == 'cadastrar' ? "menu-ativo" : "";?>">
                                <a href="cadastrar.php">Cadastrar</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="menu-top-item">
                    <div class="form-search">
                        <input type="text" placeholder="Buscar">
                        <button type="submit">Buscar</button>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="menu-mobile">
    <ul class="">
        <li class="menu-top-item <?php echo $arquivoName == 'index' ? "menu-ativo" : "";?>">
                        <a href="index.php">Home</a>
        </li>
        <li class="menu-top-item">
            <?php 
                if($arquivoName == "index"){
                    echo '<a href="#categoria">Departamentos</a>';
                }else{
                    echo '<a href="index.php?r=#categoria">Departamentos</a>';
                }
            ?>
        </li>
        <li class="menu-top-item <?php echo $arquivoName == 'sobre' ? "menu-ativo" : "";?>">
            <a href="sobre.php">Sobre</a>
        </li>
        <li class="menu-top-item <?php echo $arquivoName == 'contato' ? "menu-ativo" : "";?>">
            <a href="contato.php">Contato</a>
        </li>
        <li class="menu-top-item <?php echo $arquivoName == 'login' ? "menu-ativo" : "";?>">
            <a href="login.php">Entrar</a>
        </li>
        <li class="menu-top-item <?php echo $arquivoName == 'cadastrar' ? "menu-ativo" : "";?>">
            <a href="cadastrar.php">Cadastrar</a>
        </li>
        <li class="menu-top-item">
            <div class="form-search">
                <input type="text" placeholder="Buscar">
                <button type="submit">Buscar</button>
            </div>
        </li>
    </ul>
    <div id="btn-close-menu-mobile">
        <span class="line-left"></span>
        <span class="line-right"></span>
    </div>
</div>