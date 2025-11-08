<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lanchonete Git</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../CSS/home.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../JS/menu.js"></script>
    
</head>
<body>
    <header>
        <nav id="navbar">
            <i class="fa-solid fa-burger">food</i>
            <ul id="nav_list">
                <li class="nav-item">
                    <a href="#" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Cardápio</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Avaliações</a>
                </li>
                <li class="nav-item">
                    <a href="" class="nav-link">Avaliações</a>
                </li>
                <button class="btn-default">
                    Peça Aqui
                </button>
            </ul>
        </nav> 
        <button class="mobile-btn">
            <i class="fa-solid fa-bars"></i>
        </button> 
        <div class="mobile-menu">
            <ul class="mobile-nav-list">
                <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#cardapio">Cardápio</a></li>
                <li class="nav-item"><a href="#depoimentos">Avaliações</a></li>
            </ul>
        </div>      
    </header>

    <main class="content">
        <section class="home" id="home">
            <div class="cta">
                <h1 class="title">
                    O sabor que vai até <span>você.</span>
                </h1>
                <p class="descricao">
                    Venha experimentar uma viagem gastronômica única, onde cada prato é preparado com ingredientes frescos e de alta qualidade.
                </p>
                <div class="cta-buttons">
                    <a href="" class="btn-default">Ver Cardápio</a>
                    <a href="" class="phone-button">
                        <button class="btn-default">
                            <i class="fa-solid fa-phone"></i>
                        </button>
                        (67) 9666-6666
                    </a>
                </div>

            </div>
            <div class="banner">
                <img src="../imagem/pngwing.com (2).png" alt="Imagem Principal da Loja">
            </div>
        </section>
    </main>
    <section class="cardapio" id="cardapio">
        <h2 class="section-title">Cardápio</h2>
        <h3 class="section-subtitle">Nossos Pratos Especiais</h3>
        <div class="area-cards">
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="../imagem/pngwing.com (1).png" alt="Imagem do Lanche" class="card-imagem">
                <h3 class="card-title">X-ADS</h3>
                <span class="card-descricao">
                    O X-ADS é um lanche audacioso e irresistível, feito para quem busca uma explosão de sabores.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="../imagem/pngwing.com (1).png" alt="Imagem do Lanche" class="card-imagem">
                <h3 class="card-title">X-ADS</h3>
                <span class="card-descricao">
                    O X-ADS é um lanche audacioso e irresistível, feito para quem busca uma explosão de sabores.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="../imagem/pngwing.com (1).png" alt="Imagem do Lanche" class="card-imagem">
                <h3 class="card-title">X-ADS</h3>
                <span class="card-descricao">
                    O X-ADS é um lanche audacioso e irresistível, feito para quem busca uma explosão de sabores.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="../imagem/pngwing.com (1).png" alt="Imagem do Lanche" class="card-imagem">
                <h3 class="card-title">X-ADS</h3>
                <span class="card-descricao">
                    O X-ADS é um lanche audacioso e irresistível, feito para quem busca uma explosão de sabores.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="../imagem/pngwing.com (1).png" alt="Imagem do Lanche" class="card-imagem">
                <h3 class="card-title">X-ADS</h3>
                <span class="card-descricao">
                    O X-ADS é um lanche audacioso e irresistível, feito para quem busca uma explosão de sabores.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="../imagem/pngwing.com (1).png" alt="Imagem do Lanche" class="card-imagem">
                <h3 class="card-title">X-ADS</h3>
                <span class="card-descricao">
                    O X-ADS é um lanche audacioso e irresistível, feito para quem busca uma explosão de sabores.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="../imagem/pngwing.com (1).png" alt="Imagem do Lanche" class="card-imagem">
                <h3 class="card-title">X-ADS</h3>
                <span class="card-descricao">
                    O X-ADS é um lanche audacioso e irresistível, feito para quem busca uma explosão de sabores.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
            <div class="card">
                <div class="card-heart">
                    <i class="fa-solid fa-heart"></i>
                </div>
                <img src="../imagem/pngwing.com (1).png" alt="Imagem do Lanche" class="card-imagem">
                <h3 class="card-title">X-ADS</h3>
                <span class="card-descricao">
                    O X-ADS é um lanche audacioso e irresistível, feito para quem busca uma explosão de sabores.
                </span>
                <div class="card-rate">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-regular fa-star"></i>
                    <span>(500+)</span>
                </div>
                <div class="card-price">
                    <h4>R$40,00</h4>
                    <button class="btn-default">
                        <i class="fa-solid fa-basket-shopping"></i>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="depoimentos" id="depoimentos">
        <img src="../imagem/pngwing.com (6) (1).png" alt="Imagem de uma chefe de cozinha" class="imagem-chef">
        <div class="depoimentos-content">
            <h2 class="section-title">
                Depoimentos
            </h2>
            <h3 class="section-subtitle">
                O que os clientes falam sobre nós.
            </h3>
            <div class="area-feedbacks">
                <div class="feedbacks">
                    <img src="../imagem/pngwing.com (9) (1).png" alt="" class="imagem-avatar">
                    <div class="feedback-content">
                        <p>
                            Rafaela Cristina
                            <span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </p>
                        <p>
                            O X-ADS é um lanche robusto, com hambúrguer artesanal de 180G, filé de aluno sem graça, chedder, dois ovos fritos. Acompanha batatas fritas, garantindo uma explosão de sabores.
                        </p>
                    </div>
                </div>
                <div class="feedbacks">
                    <img src="../imagem/pngwing.com (8) (1).png" alt="" class="imagem-avatar">
                    <div class="feedback-content">
                        <p>
                            Ana Faela
                            <span>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                            </span>
                        </p>
                        <p>
                            O X-ADS é um lanche robusto, com hambúrguer artesanal de 180G, filé de aluno sem graça, chedder, dois ovos fritos. Acompanha batatas fritas, garantindo uma explosão de sabores.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="footer-itens">
            <span class="copyright">
                &copy 2025 Enilda Cáceres
            </span>
            <div class="social-media-buttons">
                <a href=""><i class="fa-brands fa-whatsapp"></i></a>
                <a href="https://www.instagram.com/enildadarosa/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="https://www.linkedin.com/in/enildacaceres/" target="_blank"><i class="fa-brands fa-linkedin"></i></a>
            </div>
        </div>
    </footer>

</body>
</html>