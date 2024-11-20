<?php

include_once('../controle/controle_session.php');
include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');

$title = "Listar Usuários";

include_once('cabecalho.php');
include_once('menu_superior.php');

$info_bd = busca_info_bd($conexao, 'usuario');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Q8iX5b77tQZ5BlF9Rz7rjTPAHFHG6FxiOhPXY3lI1V5yFePjF4j8Dlm7DTTeHLOz" crossorigin="anonymous">
    <style>
        body, html {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            margin-top: 30px;
        }

        .form-title {
            font-size: 28px;
            color: #003B5C; /* Cor principal do Senac */
            margin-bottom: 20px;
            font-weight: bold;
        }

        /* Estilos da tabela */
        .table {
            border-radius: 8px;
            overflow: hidden;
        }

        .table th, .table td {
            text-align: center;
            vertical-align: middle;
        }

        .table-striped tbody tr:nth-of-type(odd) {
            background-color: #f9f9f9; /* Cor alternada para as linhas */
        }

        .table-hover tbody tr:hover {
            background-color: #e6f7ff; /* Cor de destaque no hover */
        }

        .table th {
            background-color: #003B5C;
            color: white;
        }

        .table td a {
            text-decoration: none;
            color: #003B5C;
            font-weight: bold;
        }

        .table td a:hover {
            color: #01579B;
        }

        .footer {
            background-color: #f0f0f0;
            padding: 15px 0;
            text-align: center;
            color: #333;
        }

        .footer .text-muted {
            font-size: 14px;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .table th, .table td {
                font-size: 14px;
            }
        }

    </style>
</head>

<body>

    <div class="container">
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
