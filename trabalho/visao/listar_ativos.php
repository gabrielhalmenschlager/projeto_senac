<?php

include_once('../controle/controle_session.php');
include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');

$title = "Listar Ativos";

include_once('cabecalho.php');
include_once('menu_superior.php');

$marcas = busca_info_bd($conexao, 'marca');
$tipos = busca_info_bd($conexao, 'tipo');

$sql = "SELECT
            idAtivo,
            descricaoAtivo,
            quantidadeAtivo,
            statusAtivo,
            observacaoAtivo,
            (SELECT descricaoMarca from marca m WHERE m.idMarca = a.idMarca) as marca,
            (SELECT descricaoTipo from tipo m WHERE m.idTipo = a.idTipo) as tipo,
            (SELECT usuario from usuario m WHERE m.idUsuario = a.idUsuario) as usuario,
            dataCadastro
            
        FROM ativo a";

$result = mysqli_query($conexao, $sql) or die(false);
$ativos_bd = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<script scr="../js/ativos.js"></script>

<body>

    <div class="container mt-5">
        <h2 class="form-title mb-4">Lista de Ativos</h2>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col">Descrição</th>
                    <th scope="col">Marca</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Quantidade</th>
                    <th scope="col">Observação</th>
                    <th scope="col">Data Cadastro</th>
                    <th scope="col">Usuario Cadastro</th>
                    <th style="text-align:center;">Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($ativos_bd as $ativos) {
                ?>
                    <tr>
                        <td>
                            <?php echo $ativos['descricaoAtivo']; ?>
                        </td>
                        <td>
                            <?php echo $ativos['marca']; ?>
                        </td>
                        <td>
                            <?php echo $ativos['tipo']; ?>
                        </td>
                        <td>
                            <?php echo $ativos['quantidadeAtivo']; ?>
                        </td>
                        <td>
                            <?php echo $ativos['observacaoAtivo']; ?>
                        </td>
                        <td>
                            <?php echo $ativos['dataCadastro']; ?>
                        </td>
                        <td>
                            <?php echo $ativos['usuario']; ?>
                        </td>
                        <td>
                            <div class="acoes" style="display: flex;justify-content: space-around;">
                                <div class="muda_status">
                                    <?php
                                    if ($ativos['statusAtivo']=="S") {
                                    ?>
                                        <div class="inativo" onclick="muda_status('N','<?php echo $ativos['idAtivo'];?>')">
                                            <i class="bi bi-toggle-on"></i>
                                        </div>
                                    <?php
                                    } else {
                                    ?>
                                        <div class="ativo" onclick="muda_status('S','<?php echo $ativos['idAtivo']; ?>')">
                                            <i class="bi bi-toggle-off"></i>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                                <div class="edit">
                                        <i class="bi bi-pencil-square"></i>
                                </div>
                            </div>
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