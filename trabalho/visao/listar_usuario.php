<?php

include_once('../controle/controle_session.php');
include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');

$title = "Listar Usuários";

include_once('cabecalho.php');
include_once('menu_superior.php');

$info_bd = busca_info_bd($conexao, 'usuario');

?>

<body>

    <div class="container mt-5">
        <h2 class="form-title">Lista de Usuários</h2>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Usuário</th>
                    <th scope="col">Turma</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($info_bd as $user) {
                ?>
                    <tr>
                        <td>
                            <a href="alterar_usuario.php?id_usuario=<?php echo $user['idUsuario']; ?>">
                                <?php echo $user['nomeUsuario']; ?>
                            </a>
                        </td>
                        <td>
                            <a href="alterar_usuario.php?id_usuario=<?php echo $user['idUsuario']; ?>">
                                <?php echo $user['usuario']; ?>
                            </a>
                        </td>
                        <td>
                            <a href="alterar_usuario.php?id_usuario=<?php echo $user['idUsuario']; ?>">
                                <?php echo $user['turmaUsuario']; ?>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <footer class="footer mt-5 py-3">
        <div class="container text-center">
            <span class="text-muted">2024 Senac | Todos os direitos reservados</span>
        </div>
    </footer>

</body>
</html>
