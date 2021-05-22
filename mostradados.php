<?php
session_start();
include('verifica_login.php');
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
								<li class="tm-nav-li"><a href="login.php" class="tm-nav-link"><?php if (isset($_SESSION['usuario'])) { ?><a href="mostradados.php" class="tm-nav-link active"><?php  echo("Minha Conta"); ?></a> <?php } else {
																																																							echo ("login");
																																																						} ?></a></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">

			</header>

			<div class="tm-container-inner-2 tm-contact-section">
				<h2 class="col-12 text-center tm-section-title">Bem-Vindo!</h2>
				<h3>Email: <?php echo $_SESSION['usuario']; ?></h3>
				<hr>
				<h3>Apelido: <?php echo $_SESSION['Apelido']; ?> Id: <?php echo $_SESSION['id_usuario']; ?></h3>
				<hr>
				<h3>Número de telefone: <?php echo $_SESSION['telefone_cliente']; ?></h3>
				<hr>
				<h3>Data de nascimento: <?php echo $_SESSION['data_nascimento']; ?></h3>
				<hr>
				<h3>Endereço: <?php echo $_SESSION['endereco']; ?></h3>
				<hr>
				<h3>Estado: <?php echo $_SESSION['estado']; ?></h3>
				<button onclick="window.location.href = 'saindo.php' " class="button1">SAIR</button>
				<button onclick="window.location.href = 'edita_dados.php' " class="button1">EDITAR DADOS</button>



			</div>


	</div>
	</main>

	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function() {
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function() {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.maxHeight) {
						panel.style.maxHeight = null;
					} else {
						panel.style.maxHeight = panel.scrollHeight + "px";
					}
				});
			}
		});
	</script>
</body>

</html>