<?php

include_once('../controle/controle_session.php');
$title = "Página Inicial Senac RS";
include_once('cabecalho.php');
include_once('menu_superior.php');

?>

<body>
    
    <div class="inicio-container">
        <div class="welcome-content text-center">
            <img src="https://www.senacrs.com.br/assets/layout/images/logo_senac.png" alt="Logo Senac" class="logo mb-4">
            <h1 class="welcome-title">Bem-vindo ao Senac RS</h1>
            <p class="welcome-message">A educação que prepara você para o mercado de trabalho. Faça seu cadastro e tenha acesso a nossos cursos e serviços!</p>
            <a href="cadastrar_usuario.php" class="btn-primary">Cadastrar-se</a>
        </div>
    </div>

    <div class="info-container">
        <h3 class="info-title">Senac Santa Cruz do Sul</h3>
        
        <div class="contact-info">
            <div class="contact-item">
                <i class="fas fa-phone-alt"></i>
                <div>
                    <p><strong>Telefone:</strong> (51) 3715-9335</p>
                </div>
            </div>

            <div class="contact-item">
                <i class="fas fa-phone-square-alt"></i>
                <div>
                    <p><strong>Mais Contatos:</strong></p>
                    <ul>
                        <li>(51) 3711-6460 - Telefone Comercial</li>
                        <li>(51) 3711-6460 - Informações de Curso</li>
                    </ul>
                </div>
            </div>

            <div class="contact-item">
                <i class="fas fa-map-marker-alt"></i>
                <div>
                    <p><strong>Endereço:</strong> Venâncio Aires, 300 - CENTRO - SANTA CRUZ DO SUL - RS</p>
                    <p><strong>CEP:</strong> 96.810-204</p>
                    <a href="https://www.google.com/maps?q=Venâncio+Aires,+300,+CENTRO,+SANTA+CRUZ+DO+SUL+-+RS&hl=pt" target="_blank" class="btn-google-maps">
                        <i class="fab fa-google"></i> Ver no Google Maps
                    </a>
                </div>
            </div>

            <div class="contact-item">
                <i class="fas fa-clock"></i>
                <div>
                    <p><strong>Horário de Funcionamento:</strong></p>
                    <ul>
                        <li>Segunda a sexta-feira: 07:00 às 22:00</li>
                        <li>Sábado: 09:00 às 12:00</li>
                    </ul>
                </div>
            </div>

            <div class="contact-item">
                <i class="fas fa-share-alt"></i>
                <div>
                    <p><strong>Redes Sociais:</strong></p>
                    <ul>
                        <li><strong>Instagram:</strong> <a href="https://www.instagram.com/senacsantacruz" target="_blank">senacsantacruz</a></li>
                        <li><strong>Facebook:</strong> <a href="https://www.facebook.com/senacsantacruz" target="_blank">senacsantacruz</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer mt-5 py-3">
        <div class="container text-center">
            <span class="text-muted">2024 Senac | Todos os direitos reservados</span>
        </div>
    </footer>

</body>
</html>