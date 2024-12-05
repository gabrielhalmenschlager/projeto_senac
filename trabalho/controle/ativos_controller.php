<?php

ini_set('display_errors', 0);
error_reporting(E_ERROR);

include_once('../modelo/conexao.php');
include_once('controle_session.php');

$ativos = $_POST['ativo'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];
$observacao = $_POST['observacao'];
$acao = $_POST['acao'];
$idAtivo = $_POST['idAtivo'];
$statusAtivo = $_POST['status'];

$user = $_SESSION['id_user'];

if ($acao == 'inserir') {

    $query = "
    INSERT INTO ativo (
        descricaoAtivo,
        quantidadeAtivo,
        statusAtivo,
        observacaoAtivo,
        idMarca,
        idTipo,
        dataCadastro,
        idUsuario
    ) 
    VALUES (
        '" . $ativos . "',
        '" . $quantidade . "',
        'S',
        '" . $observacao . "',
        '" . $marca . "',
        '" . $tipo . "',
        NOW(),
        '" . $user . "'
    )
    ";

    $result_insert = mysqli_query($conexao, $query);

    if ($result_insert) {
        echo 'Ativo cadastrado com sucesso!';
    } else {
        echo 'Erro ao cadastrar ativo!';
    }
}

if ($acao == 'alterar_status') {
    $sql = "
        UPDATE ativo SET statusAtivo ='$statusAtivo' WHERE idAtivo=$idAtivo
    ";

    $result_status = mysqli_query($conexao, $sql);

    if ($result_status) {
        echo 'Status Alterado!';
    } else {
        echo 'Status Não Alterado!';
    }
}

if ($acao == "get_info") {
    $sql = "
        SELECT
            descricaoAtivo,
            quantidadeAtivo,
            observacaoAtivo,
            idMarca,
            idTipo
        FROM
            ativo
        WHERE
            idAtivo = $idAtivo
    ";

    $result = mysqli_query($conexao, $sql) or die(false);
    $ativo = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($ativo);
    exit();
}

if ($acao == 'update') {
    $sql = "
        UPDATE ativo SET
            descricaoAtivo = '$ativos',
            quantidadeAtivo = '$quantidade',
            observacaoAtivo = '$observacao',
            idMarca = '$marca',
            idTipo = '$tipo'
        WHERE idAtivo = $idAtivo
    ";

    $result = mysqli_query($conexao, $sql);

    if ($result) {
        echo 'Informações Alteradas!';
    } else {
        echo 'Informações não Alteradas!';
    }
}

?>
