$(document).ready(function () {
    $("#salvar_info").click(function () {

        let ativo = $("#ativo").val();
        let marca = $("#marca").val();
        let tipo = $("#tipo").val();
        let quantidade = $("#quantidade").val();
        let observacao = $("#observacao").val();
        let idAtivo = $("#idAtivo").val();

        if (idAtivo == "") {
            acao = 'inserir';
        } else {
            acao = 'update';
        }

        $.ajax({
            type: 'POST',
            url: "../controle/ativos_controller.php",
            data: {
                acao: acao,
                ativo: ativo,
                marca: marca,
                tipo: tipo,
                quantidade: quantidade,
                observacao: observacao,
                idAtivo: idAtivo

            },

            success: function (result) {
                alert(result);
                location.reload();
            }
        });
    });
});

function muda_status(status, idAtivo) {

    $.ajax({
        type: 'POST',
        url: "../controle/ativos_controller.php",
        data: {
            acao: 'alterar_status',
            status: status,
            idAtivo: idAtivo
        },

        success: function (result) {
            alert(result);
            location.reload();
        }
    });

}

function editar(idAtivo) {

    $('#idAtivo').val(idAtivo);

    $.ajax({
        type: 'POST',
        url: "../controle/ativos_controller.php",
        data: {
            acao: 'get_info',
            idAtivo: idAtivo
        },

        success: function (result) {

            retorno = JSON.parse(result)

            $('#btn_modal').click();
            $("#ativo").val(retorno[0]['descricaoAtivo']);
            $("#marca").val(retorno[0]['idMarca']);
            $("#tipo").val(retorno[0]['idTipo']);
            $("#quantidade").val(retorno[0]['quantidadeAtivo']);
            $("#observacao").val(retorno[0]['observacaoAtivo']);

            console.log(retorno)
        }
    });

}

function limpar_modal() {

    $("#ativo").val('');
    $("#marca").val('');
    $("#tipo").val('');
    $("#quantidade").val('');
    $("#observacao").val('');
    $("#idAtivo").val('');

}
