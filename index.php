<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Vitamind</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
	<link href="css/templatemo-style.css" rel="stylesheet" />
	<link rel="shortcut icon" href="img/favicon.jpg" />
	<script src = 'javascripquery.js'></script>
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

								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link active">Produtos</a></li>
								<li class="tm-nav-li"><a href="about.php" class="tm-nav-link">Sobre Nós</a></li>
								<?php if (isset($_SESSION['usuario'])) { ?><li class="tm-nav-li "><a class="tm-nav-link">Minha Conta</a>
										<ul>
											<li class="tm-nav-li"><a href="mostradados.php" class="tm-nav-link ">Dados</a></li>
											<li class="tm-nav-li"><a href="carrinho.php" class="tm-nav-link ">Carrinho</a></li>
											<li class="tm-nav-li"><a href="mostracompras.php" class="tm-nav-link">Compras</a></li>
											<li class="tm-nav-li"><a href="saindo.php" class="tm-nav-link ">sair</a></li>
										</ul>
									</li>
								<?php } else { ?><a href="login.php" class="tm-nav-link"><?php echo ("Login");
																						} ?></a></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Bem-vindo</h2>
				<p class="col-12 text-center">Oferecemos diversos produtos de altíssima qualidade com preços diretamente
					do site das marcas, tudo em um só lugar </p>

				<form class="search-container" action="pesquisa.php" method="POST">
					<input name="suplemento" type="text" id="search-bar" placeholder="Busca">
					<input type="submit" value="PESQUISAR" class="input1">
					<!-- <a href="pesquisa.php"><img class="search-icon" src="http://www.endlessicons.com/wp-content/uploads/2012/12/search-icon.png"></a> -->
				</form>
				
			</header>

			<div class="tm-paging-links">
				<nav>
					<ul>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link active">Growth</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Integral Medica</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Black Skull</a></li>
						<li class="tm-paging-item"><a href="#" class="tm-paging-link">Atlhetica</a></li>

					</ul>
				</nav>
			</div>



			<!-- Gallery -->
			<div class="row tm-gallery">

				<!-- gallery page 1 -->


				<div id="tm-gallery-page-growth" class="tm-gallery-page">
					<?php
					include  "conexao.php";
					$coletadados = "SELECT * FROM produtos where marca = 'growth'";
					$result = mysqli_query($conexao, $coletadados);
					?>
					<?php while ($exibe = mysqli_fetch_assoc($result)) {
						echo "<article class='col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item border '>";
						echo		"<figure>";
						echo			"<img src= '" . $exibe['capa_suplemento'] . "' alt='Image' class='img-fluid tm-gallery-img'/>";
						echo		"<figcaption>";
						echo				"<h4 class='tm-gallery-title'>" .  substr($exibe['nome'], 0,20) . "</h4>";
						echo				"<p class='tm-gallery-description'>Conteúdo: " . $exibe['peso'] . "</p>";
						echo				"<p class='tm-gallery-price'>R$ " . number_format($exibe['preco'], 2, ',', '.') . "</p>";

						if ($exibe['qtd_estoque'] > 0) {
							echo "<a href='carrinho.php?cd=" . $exibe['produto_id'] . "'>";
							echo "<button class='button1' >COMPRAR</button>";
							echo "</a>";
						} else {
							echo  "<button class='button2' >INDISPONÍVEL</button>";
						}

						echo			"</figcaption>";
						echo		"</figure>";
						echo   "</article>";
					}
					?>



				</div>
				<!-- gallery page 1 -->

				<!-- gallery page 2 -->
				<div id="tm-gallery-page-integral-medica" class="tm-gallery-page hidden">
					<?php

					$coletadados = "SELECT * FROM produtos where marca = 'Integral Medica'";
					$result = mysqli_query($conexao, $coletadados);
					?>
					<?php while ($exibe = mysqli_fetch_assoc($result)) {
						
						echo "<article class='col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item border '>";
						echo		"<figure>";
						echo			"<img src= '" . $exibe['capa_suplemento'] . "' alt='Image' class='img-fluid tm-gallery-img'/>";
						echo		"<figcaption>";
						echo				"<h4 class='tm-gallery-title'>" .  substr($exibe['nome'], 0,20) . "</h4>";
						echo				"<p class='tm-gallery-description'>Conteúdo: " . $exibe['peso'] . "</p>";
						echo				"<p class='tm-gallery-price'>R$ " . number_format($exibe['preco'], 2, ',', '.') . "</p>";

						if ($exibe['qtd_estoque'] > 0) {
							echo "<a href='carrinho.php?cd=" . $exibe['produto_id'] . "'>";
							echo "<button class='button1' >COMPRAR</button>";
							echo "</a>";
						} else {


							echo  "<button class='button2' >INDISPONÍVEL</button>";
							
						}



						echo			"</figcaption>";
						echo		"</figure>";
						echo   "</article>";
					}
					?>

				</div>
				<!-- gallery page 2 -->


				<!-- gallery page 3 -->
				<div id="tm-gallery-page-black-skull" class="tm-gallery-page hidden">
					<?php

					$coletadados = "SELECT * FROM produtos where marca = 'BlackSkull'";
					$result = mysqli_query($conexao, $coletadados);
					?>
					<?php while ($exibe = mysqli_fetch_assoc($result)) {
						echo "<article class='col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item border'>";
						echo		"<figure>";
						echo			"<img src= '" . $exibe['capa_suplemento'] . "' alt='Image' class='img-fluid tm-gallery-img'/>";
						echo		"<figcaption>";
						echo				"<h4 class='tm-gallery-title'>" .  substr($exibe['nome'], 0,20) . "</h4>";
						echo				"<p class='tm-gallery-description'>Conteúdo: " . $exibe['peso'] . "</p>";
						echo				"<p class='tm-gallery-price'>R$ " . number_format($exibe['preco'], 2, ',', '.') . "</p>";

						if ($exibe['qtd_estoque'] > 0) {
							echo "<a href='carrinho.php?cd=" . $exibe['produto_id'] . "'>";
							echo "<button class='button1' >COMPRAR</button>";
							echo "</a>";
						} else {
							echo  "<button class='button2' >INDISPONÍVEL</button>";
						}


						echo			"</figcaption>";
						echo		"</figure>";
						echo   "</article>";
					}
					?>

				</div>
				<!-- gallery page 3 -->

				<!-- gallery page 4 -->
				<div id="tm-gallery-page-atlhetica" class="tm-gallery-page hidden">
					<?php

					$coletadados = "SELECT * FROM produtos where marca = 'Atlhetica'";
					$result = mysqli_query($conexao, $coletadados);
					?>
					<?php while ($exibe = mysqli_fetch_assoc($result)) {
						echo "<article class='col-lg-3 col-md-4 col-sm-6 col-12 tm-gallery-item border '>";
						echo		"<figure>";
						echo			"<img src= '" . $exibe['capa_suplemento'] . "' alt='Image' class='img-fluid tm-gallery-img'/>";
						echo		"<figcaption>";
						echo				"<h4 class='tm-gallery-title'>" .  substr($exibe['nome'], 0,20) . "</h4>";
						echo				"<p class='tm-gallery-description'>Conteúdo: " . $exibe['peso'] . "</p>";
						echo				"<p class='tm-gallery-price'>R$ " . number_format($exibe['preco'], 2, ',', '.') . "</p>";

						if ($exibe['qtd_estoque'] > 0) {
							echo "<a href='carrinho.php?cd=" . $exibe['produto_id'] . "'>";
							echo "<button class='button1' >COMPRAR</button>";
							echo "</a>";
						} else {
							echo  "<button class='button2' >INDISPONÍVEL</button>";
						}



						echo			"</figcaption>";
						echo		"</figure>";
						echo   "</article>";
					}
					?>
				</div>
				<!-- gallery page 4 -->

			</div>

		</main>

		<footer class="tm-footer text-center">

		</footer>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function() {
			// Handle click on paging links
			$('.tm-paging-link').click(function(e) {
				e.preventDefault();

				var page = $(this).text().toLowerCase().replace(/\s/g, '-');;
				$('.tm-gallery-page').addClass('hidden');
				$('#tm-gallery-page-' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>



</body>

</html>