<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003B5C; margin-top: 0; padding-top: 0;">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="https://www.senacrs.com.br/hotsite/psg/assets/img/senac_logo_branco.png" alt="Logo">
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
            <a class="nav-link" href="ativos.php">Ativo</a>
            <a class="nav-link" href="movimentacoes.php">Movimentações</a>
            <a class="nav-link" href="sair.php">
                Sair 
                <img src="https://cdn-icons-png.flaticon.com/512/1828/1828427.png" alt="Ícone de Sair" style="width: 20px; height: 20px; margin-left: 5px;">
            </a>
        </div>
    </div>
</nav>

<style>
    .navbar-nav .nav-link {
        color: white !important;
        font-weight: 500;
        margin-right: 15px;
    }

    .navbar-nav .nav-link:hover {
        color: #FFA500 !important;
        transition: color 0.3s ease;
    }

    .navbar-nav .nav-item:hover .sub-menu {
        display: block;
    }

    .sub-menu {
        display: none;
        background-color: #003B5C;
        position: absolute;
        top: 100%;
        left: 0;
        border: 1px solid #002244;
        border-radius: 5px;
    }

    .sub-menu .nav-link {
        color: white;
        padding: 10px;
    }

    .sub-menu .nav-link:hover {
        color: #FFA500;
    }

    /* Remove espaço superior */
    .navbar {
        margin-top: 0 !important;
        padding-top: 0 !important;
    }

    /* Remove o padding padrão da classe container */
    .container {
        padding-top: 0 !important;
    }
</style>
