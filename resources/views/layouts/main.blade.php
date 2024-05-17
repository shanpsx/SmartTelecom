<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/styles.css">
        <link rel="stylesheet" href="/js/scripts.js">
        <title>@yield('title')</title>

        <!-- Fonte do google -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu+Condensed&display=swap">
        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384">
        <!-- CSS -->

        <!--Icones redes sociais-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    </head>
    <body>
    
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color: #1d6bd0;">
                <div class="container-fluid">
                    <a class="navbar-brand">
                        <img src="/img/TeleConect.png" alt="Logo" width="50" height="50" class="d-inline-block align-text-center">
                        TeleConect
                    </a>
                </div>
                <div class="container-fluid">
                    <a class="navbar-brand" href="#home">Home</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Serviços</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#sobre">Sobre</a>
                            </li>
                        </ul>
                        <nav class="navbar bg-body-tertiary">
                            <form class="container-fluid justify-content-end">
                                <button type="button" class="btn btn-primary custom-button">
                                    <a href="{{ route('login') }}" class="custom-link">Login</a>
                                </button>
                                <button type="button" class="btn btn-primary custom-button">
                                    <a href="{{ route('register') }}" class="custom-link">Cadastrar</a>
                                </button>
                            </form>
                        </nav>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <section id="home">
                <div id="cta">
                    <h1 class="title">
                        <span>TeleConect</span> Consultoria em Telecomunicações
                    </h1>

                    <p class="description">
                        Conectando Possibilidades, Impulsionando <span>Resultados.</span>
                    </p>

                    <div id="cta_button">
                        <a href="#" class="btn-register">Cadastrar</a>
                    </div>
                </div>
                <div class="banner">
                <img width="500" height="500" src="/img/TeleConect2.png">
                </div>
                
                
            </section>
</main>

        <div id="services" class="services">
            <h1>Serviços</h1>
        </div>

        <div class="container">
            <div class="card-content">
                <div class="img-box">
                    <img src="/img/consultoria.png">
                </div>
                <div class="content-card">
                    <h2>Consultoria Estratégica em Telecomunicações</h2>
                    <p>Desenvolvimento e implementação de estratégias abrangentes para ajudar os clientes a otimizarem suas infraestruturas de telecomunicações, alinhadas com seus objetivos de negócio.</p>
                </div>
            </div>
            <div class="card-content">
                <div class="img-box">
                    <img src="/img/custos.png">
                </div>
                <div class="content-card">
                    <h2>Gestão e Otimização de Custos</h2>
                    <p>Análise detalhada das despesas com telecomunicações, identificação de oportunidades de redução de custos e implementação de medidas para otimizar os gastos sem comprometer a qualidade.</p>
                </div>
            </div>
            <div class="card-content">
                <div class="img-box">
                    <img src="/img/redes.png">
                </div>
                <div class="content-card">
                    <h2>Projeto e Implantação de Redes</h2>
                    <p>Planejamento e execução de projetos de redes de comunicação, incluindo redes sem fio, cabeadas e de fibra óptica, garantindo desempenho confiável e escalabilidade.</p>
                </div>
            </div>
            <div class="card-content">
                <div class="img-box">
                    <img src="/img/segurança.png">
                </div>
                <div class="content-card">
                    <h2>Segurança e Conformidade</h2>
                    <p>Avaliação e fortalecimento da segurança cibernética das redes de comunicação, assegurando a conformidade com regulamentações do setor e protegendo os dados sensíveis dos clientes.</p>
                </div>
            </div>
            <div class="card-content">
                <div class="img-box">
                    <img src="/img/suporte.png">
                </div>
                <div class="content-card">
                    <h2>Suporte Técnico e Treinamento</h2>
                    <p>Oferta de suporte técnico especializado e programas de treinamento para capacitar os colaboradores das empresas clientes a operarem eficientemente suas infraestruturas de telecomunicações.</p>
                </div>
            </div>
        </div>

        <div id="sobre" class="sobre">
            <div class="item1">
                <h1>Missão</h1>
                <p>Capacitar organizações a maximizarem seu potencial através de serviços de consultoria especializada em telecomunicações, oferecendo suporte abrangente e soluções personalizadas para atender às suas necessidades específicas.</p>
            </div>
            <div class="item1">
                <h1>Visão</h1>
                <p>Ser a principal consultoria em telecomunicações, proporcionando soluções inovadoras e estratégicas que impulsionam o sucesso dos clientes em um mundo cada vez mais conectado.</p>
            </div>
        </div>
      
        <div class="card-valores" style="width: 18rem;">
            <div class="card-body">
                <h5>Excelência</h5>
                <p>Compromisso com a excelência em tudo o que fazemos, buscando constantemente aprimorar nossos serviços e superar as expectativas dos clientes.</p>
            </div>
            <div class="card-body">
                <h5>Inovação</h5>
                <p>Adoção de soluções e tecnologias inovadoras para oferecer aos clientes as melhores práticas e abordagens em consultoria em telecomunicações.</p>
            </div>
            <div class="card-body">
                <h5>Parceria com o Cliente</h5>
                <p>Estabelecimento de relacionamentos de longo prazo com os clientes, baseados na confiança, colaboração e compreensão de suas necessidades únicas.</p>
            </div>
            <div class="card-body">
                <h5>Integridade</h5>
                <p>Atuação com ética e transparência em todas as nossas operações, mantendo a confidencialidade e respeitando os valores morais.</p>
            </div>
        </div>

       


        <footer id="footer" class="footer">
        <div class="footer-content">
            <div class="contact">
                <h1>TeleConect</h1>
                <p>Rua Tal, 52, Bairro tal, Pacajus, CE</p>
                <p><span>Telefone: </span>+55 (85) 99999-9999</p>
                <p><span>E-mail: </span>teleconect@gmail.com</p>
            </div>
            <div class="links">
                <h1>Links</h1>
                <a href="#home">Home</a>
                <a href="#services">Serviços</a>
            </div>
            <div class="redes">
                <h1>Nossas redes sociais</h1>
                <a href="https://www.whatsapp.com/?lang=pt_BR"><i class="fab fa-whatsapp"></i></a>
                <a href="https://www.facebook.com"><i class="fab fa-facebook"></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy;Copyright 2024 | <strong>TeleConect.</strong> All Rights Reserved</p>
        </div>
    </body>
</html>
