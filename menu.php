<?php
$page = basename(__FILE__, '.php'); 
?>
<nav class="nav-top large" id="id-nav-top">
        <div class="container">
            <div class="_flex _space-between _center">
                <h1>
                    <a href="index.php">
                        <img src="image/logo.png" alt="Logo Br Store">
                    </a>
                </h1>
                <div id="btn-call-menu-mobile" onclick="call_menu()">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <ul class="_flex _center menu-top menu-top-mobile ">
                    <li class="menu-top-item menu-ativo">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="menu-top-item">
                        <a href="index.php?r=/#categoria">Departamentos</a>
                    </li>
                    <li class="menu-top-item">
                        <a href="sobre.php">Sobre nós</a>
                    </li>
                    <li class="menu-top-item dropdown">
                        <a href="" title="Menu do Usuário">
                            <i class="fas fa-user"></i>
                        </a>
                        <div class="dropdown-content">
                            <ul>
                                <li>
                                    <a href="login.php">Entrar</a>
                                </li>
                                <li>
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