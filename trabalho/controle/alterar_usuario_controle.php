<?php

include_once('controle_session.php');
include_once('../modelo/conexao.php');

$nome = $_POST['nome'];
$turma = $_POST['turma'];
$id = $_POST['id'];

$query = "
        UPDATE    
            usuario 
        SET 
            nomeUsuario = '".$nome."',
            TurmaUsuario = '".$turma."'
        WHERE
            idUsuario = '".$id."'
";

$result = mysqli_query($conexao, $query);

if ($result) {
    echo "<script> 
            alert('Usuário Alterado');
            window.location.href = '../visao/listar_usuario.php'; 
          </script>";
} else {
    echo "<script> 
            alert('Falha na alteração');
            window.location.href = '../visao/alterar_usuario.php?id_usuario=$id'; 
          </script>";
}

?>