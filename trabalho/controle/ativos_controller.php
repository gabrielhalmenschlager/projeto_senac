<?php

ini_set('display_errors',0);
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

if ($acao == 'inserir'){

    $query = "
    insert into ativo (
        descricaoAtivo,
        quantidadeAtivo,
        statusAtivo,
        observacaoAtivo,
        idMarca,
        idTipo,
        dataCadastro,
        idUsuario
    ) 
    values (
        '".$ativos."',
        '".$quantidade."',
        'S',
        '".$observacao."',
        '".$marca."',
        '".$tipo."',
        NOW(),
        '".$user."'
    )
";   

}

$user = $_SESSION['id_user'];

$ativos = mysqli_query($conexao,$query)or die(false);

if ($ativos) {
    echo 'Ativo cadastrado com sucesso!';

} else {
    echo 'Erro ao cadastrar ativo!';
}

if ($acao == 'alterar_status'){
    $sql = "
        Update ativo set statusAtivo ='$statusAtivo' where idAtivo=$idAtivo
    ";

$result = mysqli_query($conexao,$sql)or die(false);

if ($result) {
    echo 'Status Alterado!';

} else {
    echo 'Status Não Alterado!';
}
}

?>