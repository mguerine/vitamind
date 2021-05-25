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
									<?php } else { echo ("Login"); } ?></a></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <header class="row tm-welcome-section">
            <h2 class="col-12 text-center tm-section-title">Compras Realizadas</h2>

            </header>
            
            <div class="row tm-gallery">
                <?php
               
                $id = $_SESSION['id_usuario'];
                $coleta = "select * from vw_vendasgeral where id_usuario = '$id' ";
                $result = mysqli_query($conexao, $coleta);
                $exibe = mysqli_fetch_assoc($result);
                $total_comprado = 0;           
                while ($exibe = mysqli_fetch_assoc($result)) {
                echo "<article class='col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item border'>";
                echo        "<figure>";
                echo            "<img src= '" . $exibe['capa_suplemento'] . "' alt='Image' class='img-fluid tm-gallery-img'/>";
                echo        "<figcaption>";
                echo                "<h4 class='tm-gallery-title'>" . mb_strimwidth($exibe['nome'], 0, 23, '...') . "</h4>";
                echo                "<p class='tm-gallery-description'>Comprador: " . $exibe['Apelido'] . "</p>";
                echo                "<p class='tm-gallery-description'>Preço Unit: R$ " . number_format($exibe['preco'], 2, ',', '.') . "</p>";
                echo                "<p class='tm-gallery-description'>Ticket Gerado: " . $exibe['ticket_num'] . "</p>";
                echo                "<p class='tm-gallery-description'>Quantidade Comprada: " . $exibe['qt_prod'] . "</p>";
                echo                "<p class='tm-gallery-description'>Valor Total: " . $exibe['valor_total'] . "</p>";
                echo                "<p class='tm-gallery-description'>Entregar em: " . $exibe['endereco'] . " - " .$exibe['estado'] . "</p>";
                echo            "</figcaption>";
                echo        "</figure>";
                echo   "</article>";
                $total_comprado += $exibe['valor_total'];
            }
            ?>
            </div>
            <div class=" text-center" style="margin-top: 15px;">
                    <h1>Total em compras: R$ <?php echo number_format($total_comprado,2,',','.'); ?></h1>
                    
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