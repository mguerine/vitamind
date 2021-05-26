<?php
session_start();
include('conexao.php'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Vitamind</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
    <link href="css/all.min.css" rel="stylesheet" />
    <link href="css/templatemo-style.css" rel="stylesheet" />
    <link rel="shortcut icon" href="img/favicon.jpg" />

</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->

<body>

    <div class="container">
        <!-- Top box -->
        <!-- Logo & Site Name -->
        <div class="placeholder">
            <div class="parallax-window" data-parallax="scroll" data-image-src="img/logocentral1.jpg">
                <div class="tm-header">
                    <div class="row tm-header-inner">
                        <div class="col-md-6 col-12">
                            <img src="img/logo.jpg" alt="Logo" class="tm-site-logo" />
                            <div class="tm-site-text-box">
                                <h1 class="tm-site-title">Vitamind</h1>
                                <h6 class="tm-site-description">Central de suplementos</h6>
                            </div>
                        </div>
                        <nav class="col-md-6 col-12 tm-nav">
                            <ul class="tm-nav-ul">
                                <li class="tm-nav-li"><a href="index.php" class="tm-nav-link">Produtos</a></li>
                                <li class="tm-nav-li"><a href="about.php" class="tm-nav-link">Sobre Nós</a></li>
                                <?php if (isset($_SESSION['usuario'])) { ?><li class="tm-nav-li "><a href="#" class="tm-nav-link">Minha Conta</a>
                                        <ul>
                                            <li class="tm-nav-li"><a href="mostradados.php" class="tm-nav-link ">Dados</a></li>
                                            <li class="tm-nav-li"><a href="carrinho.php" class="tm-nav-link ">Carrinho</a></li>
                                            <li class="tm-nav-li"><a href="mostracompras.php" class="tm-nav-link">Compras</a></li>
                                            <li class="tm-nav-li"><a href="saindo.php" class="tm-nav-link ">sair</a></li>
                                        </ul>
                                    </li>
                                <?php } else {
                                    echo ("Login");
                                } ?></a></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <header class="row tm-welcome-section">
                <h2 class="col-12 text-center tm-section-title">Resultado da busca</h2>
                <form class="search-container" action="pesquisa.php" method="POST">
                <input name="suplemento" type="text" id="search-bar" placeholder="Busca">
                <input type="submit" value="PESQUISAR" class="input1">
                <!-- <a href="pesquisa.php"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a> -->
            </form>

            </header>

           
            <div class="row tm-gallery">
                <?php
                $pesquisando = $_POST['suplemento'];
                $query = "select * from produtos where nome like '%$pesquisando%'";
                $result = mysqli_query($conexao, $query);
            
                while ($exibe = mysqli_fetch_assoc($result)) {
                    echo "<article class='col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item border '>";
                    echo        "<figure>";
                    echo            "<img src= '" . $exibe['capa_suplemento'] . "' alt='Image' class='img-fluid tm-gallery-img'/>";
                    echo        "<figcaption>";
                    echo				"<h4 class='tm-gallery-title'>" .  substr($exibe['nome'], 0,20) . "</h4>";
                    echo                "<p class='tm-gallery-description'>Conteúdo: " . $exibe['peso'] . "</p>";
                    echo                "<p class='tm-gallery-price'>R$ " . number_format($exibe['preco'], 2, ',', '.') . "</p>";

                    if ($exibe['qtd_estoque'] > 0) {
                        echo "<a href='carrinho.php?cd=" . $exibe['produto_id'] . "'>";
                        echo "<button class='button1' >COMPRAR</button>";
                        echo "</a>";
                    } else {
                        echo  "<button class='button2' >INDISPONÍVEL</button>";
                    }

                    echo            "</figcaption>";
                    echo        "</figure>";
                    echo   "</article>";
                }
                ?>
            </div>

        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
        function cadastro() {
            alert('Efetuando Compra');
        }
    </script>



</body>

</html>