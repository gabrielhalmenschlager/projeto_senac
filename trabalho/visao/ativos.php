<?php

include_once('../controle/controle_session.php');
$title = "Ativos";
include_once('cabecalho.php');
include_once('menu_superior.php');

?>

<script src="../js/ativos.js"></script>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Abrir Modal</button>

<?php 

include_once('modal_ativo.php');

?>
