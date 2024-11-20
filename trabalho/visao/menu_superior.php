<?php 

include_once('../controle/controle_session.php');
include_once('cabecalho.php');

?>

<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://www.senacrs.com.br/assets/layout/images/logo_senac.png" alt="Logo">
        </a>
        <div class="navbar-nav">
            <a class="nav-link" href="inicio.php">Início</a>
            <li class="nav-item usuario-menu">
                <a class="nav-link" href="#">Usuário</a>
                <div class="sub-menu">
                    <a class="nav-link" href="cadastrar_usuario.php">Cadastrar</a>
                    <a class="nav-link" href="listar_usuario.php">Listar</a>
                </div>
            </li>
                <a class="nav-link" href="ativo.php">Ativo</a>
                <a class="nav-link" href="movimentacoes.php">Movimentações</a>
        </div>
    </div>
</nav>

