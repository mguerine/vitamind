<?php 
                session_start();             
                if(!isset($_SESSION['usuario'])){
                    header('location:login.php');
                
                }
                include('conexao.php');?>
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
            <h2 class="col-12 text-center tm-section-title">Carrinho de compras</h2>

            </header>
          
            <div class="tm-container-inner-2 tm-contact-section">
            <div class="row tm-gallery">
                <?php
                $cod = 1;
                if (!empty($_GET['cd'])) {
                    $cod_prod = $_GET['cd'];


                    if (!isset($_SESSION['carrinho'])) {
                        $_SESSION['carrinho'] = array();
                    }

                    if (!isset($_SESSION['carrinho'][$cod_prod])) {
                        $_SESSION['carrinho'][$cod_prod] = 1;
                    } else {
                        $_SESSION['carrinho'][$cod_prod] += 1;
                    }
                    include ('mostracarrinho.php');

                } else {
                    include ('mostracarrinho.php');
                }
                ?>
            </div> 

                <div class=" text-center" style="margin-top: 15px;">
                    <h1>Total: R$ <?php echo number_format($total,2,',','.'); ?></h1>
                    
                </div>

                <div>

                    <?php if(isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0) {?>

                        
                    <button onclick="window.location.href = 'index.php' " class="button1" style="margin-bottom: 5px; margin-top:10px;">CONTINUAR COMPRANDO</button>
                    
                    
                    <?php } if(!isset($_SESSION['carrinho']) || count($_SESSION['carrinho']) == 0) { ?>
                        
                    <button onclick="window.location.href = 'index.php' " class="button1" style="margin-bottom: 5px; margin-top:10px;">IR ÀS COMPRAS</button> 
                    
                    <?php }?>
                  
                    <?php if(isset($_SESSION['carrinho'])){if(count($_SESSION['carrinho']) > 0){ ?>
                   
                    <button onclick="window.location.href = 'FinalizandoCompra.php' " class="button1" style="margin-bottom: 5px; margin-top:10px;" >FINALIZAR COMPRA</button>
                    
                    <?php }} ?>

                </div>
            </div>

        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
    <script>
    function cadastro(){
       alert('Efetuando Compra');
    }
</script>



</body>

</html>