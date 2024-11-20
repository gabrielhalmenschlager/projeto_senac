<?php
$title = "Tela de Login";
include_once('cabecalho.php');

session_start();

if (isset($_GET['erro']) && $_GET['erro'] == 'sem_acesso') {
    echo "<script>alert('Usuario não identificado');</script>";
}
if (isset($_GET['error_auten']) && $_GET['error_auten'] == 's') {
    echo "<script>alert('Senha ou Usuario Invalido!');</script>";
}
?>  

<body>

    <div class="login-background">
        <div class="form-container">
            <img src="https://www.senacrs.com.br/assets/layout/images/logo_senac.png" alt="Logo Senac" class="logo">
            <h2 class="form-title">Login</h2>

            <form action="../controle/login_usuario_controle.php" method="POST">
                <div class="form-group">
                    <label for="usuario" class="form-label">Usuário</label>
                    <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Digite seu usuário" required>
                </div>

                <div class="form-group">
                    <label for="senha" class="form-label">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha" required>
                </div>

                <button type="submit" class="btn btn-outline-primary">Entrar</button>
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