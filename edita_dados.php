<?php session_start() ?>

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
                                <li class="tm-nav-li"><a href="login.php" class="tm-nav-link"><?php if (isset($_SESSION['usuario'])) { ?><a href="mostradados.php" class="tm-nav-link"><?php echo ("Minha Conta"); ?></a> <?php } else {
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

            </header>
            <h2 class="col-12 text-center tm-section-title">Alterar Dados</h2>

          


            <?php if (isset( $_SESSION['status_edicao'])){ ?>
            <div class="text-center">
                <p>Dados alterados com sucesso! Relogue para concluír as alterações</p>
            </div>
            <?php } unset ( $_SESSION['status_edicao']) ?>

           


            <div class="form-register">
                <form method="POST" action="editando_dados.php">

                    <label>Apelido:</label>
                    <input name="Apelido" type="text" value="<?php echo $_SESSION['Apelido']; ?>">
                    <label>Número de telefone:</label>
                    <input name="telefone_cliente" type="number" max="999999999999" value="<?php echo $_SESSION['telefone_cliente']; ?>">
                    <label>Endereço:</label>
                    <input name="endereco" type="text" value="<?php echo $_SESSION['endereco']; ?>">
                    <label>Estado:</label>
                    <select name="estado">
                        <option selected><?php echo $_SESSION['estado']; ?></option>
                        <option>AC</option>
                        <option>AL</option>
                        <option>AP</option>
                        <option>AM</option>
                        <option>BA</option>
                        <option>CE</option>
                        <option>ES</option>
                        <option>GO</option>
                        <option>MA</option>
                        <option>MT</option>
                        <option>MS</option>
                        <option>MG</option>
                        <option>PA</option>
                        <option>PB</option>
                        <option>PR</option>
                        <option>PE</option>
                        <option>PI</option>
                        <option>RJ</option>
                        <option>RN</option>
                        <option>RS</option>
                        <option>RO</option>
                        <option>RR</option>
                        <option>SC</option>
                        <option>SP</option>
                        <option>SE</option>
                        <option>TO</option>
                        <option>DF</option>
                    </select>
                    <input id="s1" type="submit" value="Salvar">

                </form>
            </div>

        </main>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/parallax.min.js"></script>
</body>

</html>