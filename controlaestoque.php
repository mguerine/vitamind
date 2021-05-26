<?php
session_start();
include  "conexao.php";

if (!isset($_SESSION['usuario'])) {
    header('location: https://www.youtube.com/watch?v=UcRtFYAz2Yo');
}


if ((isset($_SESSION['usuario'])) && ($_SESSION['adm_status'] == 0)) {
    header('location: https://www.youtube.com/watch?v=rRPQs_kM_nw&t=35291s');
}


?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>

</head>

<style>
    #s1 {
        justify-content: center;
        text-decoration: none;
        background-color: transparent;
        border: none;
        cursor: pointer;
        background-color: #2F956D;
        color: white;
        margin-top: 10px;
    }

    #s1:hover {
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    .avisoborder {
			border: solid;
			border-radius: 10px;
			background-color: #f54b59;
			border-width: 1px;
			width: 400px;
			display: block;
			margin-bottom: 10px;
			margin-left: 127px;
			font-size: 13px;
			color: white;

		}

		.avisoborder2 {
			border: solid;
			border-radius: 10px;
			background-color: #8dae4f;
			border-width: 1px;
			width: 400px;
			display: block;
			margin-bottom: 10px;
			margin-left: 127px;
			font-size: 13px;
			color: white;

		}
</style>
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
                                <li class="tm-nav-li"><a href="login.php" class="tm-nav-link"><?php if (isset($_SESSION['usuario'])) { ?><a href="mostradados.php" class="tm-nav-link"><?php echo ("Voltar"); ?></a> <?php } else {
                                                                                                                                                                                                                        echo ("login");
                                                                                                                                                                                                                    } ?></a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <main>
            <header class="row tm-welcome-section">
                <h2 class="col-12 text-center tm-section-title">Atualizar Produtos</h2>

            </header>

            <?php if (isset($_SESSION['status_Update'])) { ?>
                <div class="text-center  avisoborder">
                    <p>Quantia inserida</p>
                </div>
            <?php }
            unset($_SESSION['status_Update']) ?>

            <?php if (isset($_SESSION['ERRO'])) { ?>
                <div class="text-center">
                    <p>Dados não atualizados</p>
                </div>
            <?php }
            unset($_SESSION['ERRO']) ?>




            <div class="form-register">
                <form method="POST" action="atualiza.php">
                    <label style="padding-left: 13px;">ID do produto</label>
                    <input name="produto_id" type="number">
                    <label style="padding-left: 13px;">Adicionar Estoque</label>
                    <input name="qtd_estoque" type="number">

                    <input id="s1" type="submit" value="Renovar Estoque">
                </form>
            </div>

        </main>
        <footer class="tm-footer text-center">

        </footer>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
</body>

</html>