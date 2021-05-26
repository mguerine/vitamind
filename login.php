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


	<style>
		#s1 {
			justify-content: center;
			text-decoration: none;
			background-color: transparent;
			border: none;
			cursor: pointer;
			background-color: #2F956D;
			color: white;
		}

		#s1:hover {
			box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
		}
		
	</style>
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
								<?php if (1 == 1) { ?><a href="login.php" class="tm-nav-link active"> <?php echo ("Login");
																									} ?></a>
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

				<h2 class="col-12 text-center tm-section-title">Entrar</h2>

				<?php
				if (isset($_SESSION['nao_autenticado'])) {
				?>
					<div class="text-center avisoborder">
						<p>Usuário ou senha inválidos.</p>
					</div>
				<?php
				}
				unset($_SESSION['nao_autenticado']);
				?>
				<div class="form-login">
					<form method="POST" action="loginII.php">
						<input name="usuario" type="email" placeholder="Usuário">
						<input name="senha" type="password" placeholder="Senha">
						<input id="s1" type="submit" value="Logar">
						<a id="a1" href="register.php">Não tem uma conta? <strong>Registre-se</strong></a>
					</form>
				</div>
			</div>
		</main>
		<?php ?>

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