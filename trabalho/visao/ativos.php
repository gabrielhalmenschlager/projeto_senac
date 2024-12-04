<?php

include_once('../controle/controle_session.php');
$title = "Ativos";
include_once('cabecalho.php');
include_once('menu_superior.php');

?>

<script src="../js/ativos.js"></script>

<div class="container mt-5">
    <h2 class="form-title">Cadastrar Ativos</h2>

    <div class="d-flex justify-content-center">
        <button type="button" class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Abrir Modal</button>
    </div>
</div>

<?php 

include_once('listar_ativos.php');
include_once('modal_ativo.php');

?>