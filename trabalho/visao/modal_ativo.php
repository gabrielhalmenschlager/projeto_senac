<?php
include_once('cabecalho.php');
?>

<style>
  .modal-content {
    border-radius: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  }

  .modal-header {
    background-color: #003B5C;
    color: white;
  }

  .modal-footer {
    background-color: #f8f9fa;
  }

  .modal-footer .btn-secondary {
    background-color: #e0e0e0;
    border-color: #ccc;
  }

  .modal-footer .btn-primary {
    background-color: #003B5C;
    border-color: #003B5C;
  }

  .modal-footer .btn-primary:hover {
    background-color: #002A42;
    border-color: #002A42;
  }

  .modal-title {
    font-size: 1.5rem;
    font-weight: bold;
  }

  .form-control,
  .form-select {
    border-radius: 10px;
    padding: 10px;
  }

  .form-label {
    font-weight: bold;
  }
</style>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content rounded-4 shadow-lg">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar Ativo</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="ativo" class="form-label">Descrição do Ativo</label>
            <input type="text" class="form-control" id="ativo" placeholder="Digite a descrição do ativo" required>
          </div>
          <div class="mb-3">
            <label for="marca" class="form-label">Marca</label>
            <select class="form-select" id="marca" required>
              <option selected disabled>Selecione a Marca</option>
              <option value="Lenovo">Lenovo</option>
              <option value="Dell">Dell</option>
              <option value="Positivo">Positivo</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="tipo" class="form-label">Tipo</label>
            <select class="form-select" id="tipo" required>
              <option selected disabled>Selecione o Tipo</option>
              <option value="Ferramentas">Ferramentas</option>
              <option value="Hardware">Hardware</option>
              <option value="Periféricos">Periféricos</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" placeholder="Quantidade do ativo" required>
          </div>
          <div class="mb-3">
            <label for="observacao" class="form-label">Observação</label>
            <input type="text" class="form-control" id="observacao" placeholder="Observações adicionais">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-secondary">Limpar</button>
        <button type="button" class="btn btn-primary" id="salvar_info">Salvar</button>
      </div>
    </div>
  </div>
</div>