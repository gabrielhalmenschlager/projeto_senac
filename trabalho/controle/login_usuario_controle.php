<?php

session_start();

include_once('../modelo/conexao.php');
include_once('../controle/funcoes.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$senhaCrip = base64_encode($senha);

$sql = "Select 
            count(*) as quantidade 
        from 
            usuario
        where
        usuario='$usuario'
        and senhaUsuario='$senhaCrip'";

        $result = mysqli_query($conexao,$sql) or die (false);
        $dados = $result->fetch_assoc();

if ($dados['quantidade'] > 0) {
    $_SESSION['login_ok']=true;
    $_SESSION['controle_login']=true;
    header('location: ../visao/listar_usuario.php');
} else {
    $_SESSION['login_ok']=false;
    unset($_SESSION['controle_login']);
    header('location: ../visao/login.php?error_auten=s');
}
?>
