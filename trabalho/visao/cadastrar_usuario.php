<?php

$title = "Formulário de Cadastro de Usuário";
include_once('cabecalho.php');
include_once('menu_superior.php');

?>

<body>

    <div class="login-background">
        <div class="form-container">
            <img src="https://www.senacrs.com.br/assets/layout/images/logo_senac.png" alt="Logo Senac" class="logo">
            <h2 class="form-title">Cadastrar Novo Usuário</h2>

            <form action="../controle/cadastrar_usuario_controle.php" method="POST">

                <div class="form-group">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" name="nome" id="nome" placeholder="Digite seu nome" required>
                </div>

                <div class="form-group">
                    <label for="turma" class="form-label">Turma</label>
                    <input type="text" class="form-control" name="turma" id="turma" placeholder="Informe sua turma" required>
                </div>

                <div class="form-group">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Crie um nome de usuário" required>
                </div>

                <div class="form-group">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Crie uma senha" required>
                </div>

                <button type="submit" class="btn btn-outline-primary">Salvar</button>
            </form>
        </div>
    </div>

    <footer class="footer mt-5 py-3">
        <div class="container text-center">
            <span class="text-muted">2024 Senac | Todos os direitos reservados</span>
        </div>
    </footer>

</body>
</html>
