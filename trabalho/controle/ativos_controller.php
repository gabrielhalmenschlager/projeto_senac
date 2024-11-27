<?php 

include_once('../controle/controle_session.php');
include_once('../modelo/conexao.php');

$ativo = $_POST['ativo'];
$marca = $_POST['marca'];
$tipo = $_POST['tipo'];
$quantidade = $_POST['quantidade'];
$observacao = $_POST['observacao'];

$user = $_SESSION['id_user'];

echo $ativo;
echo $marca;
echo $tipo;
echo $quantidade;
echo $observacao;

$query = "
    INSERT INTO ativos (
        descricaoAtivo,
        quantidadeAtivo,
        statusAtivo,
        observacaoAtivo,
        idMarca,
        idTipo,
        dataCadastro,
        usuarioCadastro
    ) 
    VALUES (
        '".$ativo."',
        '".$quantidade."',
        'S',
        '".$observacao."',
        '".$marca."',
        '".$tipo."',
        NOW(),
        '".$user."'
    )
";

$result = mysqli_query($conexao,$query)or die(false);

if ($result) {
    echo "<script>
        alert('Ativo cadastrado com sucesso!');
        window.location.href = '../visao/listar_ativos.php';
    </script>";
} else {
    echo "<script>
        alert('Erro ao cadastrar ativo!');
        window.location.href = '../visao/cadastro_ativo.php';
    </script>";
}

?>