<?php
include_once('cabecalho.php');
?>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header" style="background-color: #003B5C; color: white;">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Ativo</h1>
        <button type="button" onclick="limpar_modal()" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="ativo" class="form-label">Descrição do Ativo</label>
            <input type="text" class="form-control shadow-sm border-light" id="ativo" name="ativo" placeholder="Digite a descrição do ativo" required>
          </div>
          <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <select class="form-select shadow-sm border-light" id="marca" name="marca" required>
              <option selected value="">Selecione a Marca</option>
              <?php
              foreach ($marcas as $marca) {
                echo '<option value="' . $marca['idMarca'] . '">' . $marca['descricaoMarca'] . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-select shadow-sm border-light" id="tipo" name="tipo" required>
              <option selected value="">Selecione o Tipo</option>
              <?php
              foreach ($tipos as $tipo) {
                echo '<option value="' . $tipo['idTipo'] . '">' . $tipo['descricaoTipo'] . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control shadow-sm border-light" id="quantidade" name="quantidade" placeholder="Quantidade do ativo" required>
          </div>
          <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <input type="text" class="form-control shadow-sm border-light" id="observacao" name="observacao" placeholder="Observações adicionais">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="reset" onclick="limpar_modal()" class="btn btn-outline-secondary"><i class="bi bi-arrow-clockwise"></i> Limpar</button>
        <button type="button" class="btn" style="background-color: #003B5C; color: white;" id="salvar_info"><i class="bi bi-save"></i> Salvar</button>
      </div>
    </div>
  </div>
</div>

<style>
  .modal-content {
    background-color: #f9f9f9;
    border-radius: 15px;
  }

  .modal-header {
    border-bottom: 2px solid #003B5C;
  }

  .modal-body {
    font-size: 16px;
  }

  .form-control,
  .form-select {
    border-radius: 10px;
    padding: 12px;
    font-size: 15px;
    transition: border-color 0.3s ease;
  }

  .form-control:focus,
  .form-select:focus {
    border-color: #003B5C;
    box-shadow: 0 0 5px rgba(0, 59, 92, 0.5);
  }

  .btn-outline-secondary {
    border-radius: 10px;
    padding: 10px 20px;
  }

  .btn {
    border-radius: 10px;
    padding: 10px 20px;
    font-weight: 600;
  }

  .btn-close {
    background-color: transparent;
    border: none;
  }

  .btn-close:hover {
    background-color: #f0f0f0;
    border-radius: 50%;
  }

  .modal-footer button {
    padding: 12px 25px;
  }

  .modal-title {
    font-size: 1.5rem;
  }

  /* Animations */
  .modal.fade .modal-dialog {
    transform: translate(0, -50px);
    transition: transform 0.3s ease;
  }

  .modal.fade.show .modal-dialog {
    transform: translate(0, 0);
  }

  .modal-content {
    animation: fadeIn 0.5s ease-in-out;
  }

  @keyframes fadeIn {
    from {
      opacity: 0;
    }

    to {
      opacity: 1;
    }
  }
</style>