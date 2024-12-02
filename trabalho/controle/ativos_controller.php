<?php 

include_once('../modelo/conexao.php');
include_once('controle_session.php');

$ativos = $_POST['ativo'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];
$observacao = $_POST['observacao'];

$user = $_SESSION['id_user'];

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


$ativos = mysqli_query($conexao,$query)or die(false);

if ($ativos) {
    echo 'Ativo cadastrado com sucesso!';

} else {
    echo 'Erro ao cadastrar ativo!';
}

?>