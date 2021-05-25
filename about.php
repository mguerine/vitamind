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
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link">Produtos</a></li>
								<li class="tm-nav-li"><a href="about.php" class="tm-nav-link active">Sobre Nós</a></li>
								<?php if (isset($_SESSION['usuario'])) { ?><li class="tm-nav-li "><a href="#" class="tm-nav-link">Minha Conta</a>
										<ul>
											<li class="tm-nav-li"><a href="mostradados.php" class="tm-nav-link ">Dados</a></li>
											<li class="tm-nav-li"><a href="carrinho.php" class="tm-nav-link ">Carrinho</a></li>
											<li class="tm-nav-li"><a href="mostracompras.php" class="tm-nav-link">Compras</a></li>									
											<li class="tm-nav-li"><a href="saindo.php" class="tm-nav-link ">sair</a></li>
										</ul>
									</li> 
									<?php } else {?><a href="login.php" class="tm-nav-link"><?php echo ("Login");  } ?></a>
							</ul>
						</nav>	
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Nossas Marcas</h2>
				<p class="col-12 text-center">No Vitamind, nós separamos as melhores marcas de suplementos alimentares do mercado.
					Confira abaixo informações sobre as marcas.
                </p>
			</header>

			<div class="tm-container-inner tm-persons">
				<div class="row">
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="img/growth.png" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Growth Supplements</h4>
								<p class="tm-person-title">2016</p>
								<p class="tm-person-about">A Growth Supplements é uma empresa voltada à fabricação e ao fornecimento de produtos suplementares. Com ansiedade de superar obstáculos e limites, a Growth Supplements foi criada com o objetivo de ser a melhor na fabricação e venda de suplementos alimentares. Desde a escolha da matéria-prima até o fornecimento dos produtos, a qualidade se sobrepõe em todos os momentos.</p>
								<div>
									<a href="https://www.facebook.com/growthsupplements" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a href="https://www.instagram.com/growthsupplements/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
									<a href="https://www.youtube.com/channel/UCGfrC6R2PSMeXv4hdhONB6Q" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="img/blackskull.png" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Black Skull</h4>
								<p class="tm-person-title">2015</p>
								<p class="tm-person-about">Em 2015, com o objetivo de trazer ao público Brasileiro uma marca Hardcore, com foco principal em oferecer suplementos alimentares que auxiliem na construção de um corpo forte, definido e saudável de forma efetiva, através da GDS – Grow Dietary Supplements Labs USA, e de sua subsidiária no Brasil, lança no mercado a marca Black Skull, que em menos de 5 anos já está entre as 3 maiores marcas de suplementos alimentares no Brasil.</p>
								<div>
									<a href="https://www.facebook.com/blackskullusa/" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a href="https://www.instagram.com/blackskullusa/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
									<a href="https://www.youtube.com/channel/UC-WqGTrds1YxnN4SwXwO8Wg" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
								</div>

							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="img/Atlhetica.png" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Atlhetica</h4>
								<p class="tm-person-title">2001</p>
								<p class="tm-person-about">A ATLHETICA NUTRITION® é a marca de suplementos alimentares desenvolvida com tecnologia de ponta pela equipe multidisciplinar de profissionais da conceituada empresa ADS Laboratório Nutricional Ltda, uma das maiores empresas do setor, com 75.000m2 de área e a primeira construída nos padrões farmacêuticos.

									Há 20 anos no mercado, conquistou reconhecimento com produtos excelentes e inovadores, fabricados de acordo com as normas da ANVISA (Agência Nacional de Vigilância Sanitária) e pelas Boas Práticas de Fabricação (BPF), proporcionando a qualidade, bem estar e a eficácia que os consumidores tanto desejam.</p>
								<div>
									<a href="https://www.facebook.com/AtlheticaNutrition/" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									<a href="https://www.instagram.com/atlheticanutrition/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
									<a href="https://www.youtube.com/channel/UC3no9n3e4OBi-Jh8Iytg-2g" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
					<article class="col-lg-6">
						<figure class="tm-person">
							<img src="img/integralmedica.png" alt="Image" class="img-fluid tm-person-img" />
							<figcaption class="tm-person-description">
								<h4 class="tm-person-name">Integral Medica</h4>
								<p class="tm-person-title">1983</p>
								<p class="tm-person-about">Com mais de 30 anos de história, a Integralmédica foi a pioneira em suplementação esportiva no Brasil e, desde o primeiro momento, imprimiu uma marca de inovação e excelência em produção e pesquisa. Seus produtos de qualidade premium carregam, além da mais alta tecnologia, o DNA de uma empresa altamente comprometida com desempenho, saúde e bem-estar. Patrocinando atletas, entidades e eventos de grande prestígio (Arnold Classis, Mr. Olympia Brazil, Brasil Trade Fitness Fair, Muscle Contest, NPC, entre outros), ao longo dos anos, conquistou o respeito e a admiração de milhares de consumidores e fãs, tornando-se a empresa mais premiada e a líder absoluta do mercado nacional.</p>
								<div>
									<a href="https://www.facebook.com/integralmedica" class="tm-social-link"><i class="fab fa-facebook tm-social-icon"></i></a>
									
									<a href="https://www.instagram.com/integralmedica/" class="tm-social-link"><i class="fab fa-instagram tm-social-icon"></i></a>
									<a href="https://www.youtube.com/user/integralmedica" class="tm-social-link"><i class="fab fa-youtube tm-social-icon"></i></a>
								</div>
							</figcaption>
						</figure>
					</article>
				</div>
			</div>
			<div class="tm-container-inner tm-featured-image">
				<div class="row">
					<div class="col-12">
						<div class="placeholder-2">
							<div class="parallax-window-2" data-parallax="scroll" data-image-src="img/logoiagb.jpg"></div>		
						</div>
					</div>
				</div>
			</div>
			
			<div class="tm-container-inner tm-history">
				<div class="row">
					<div class="col-12">
						<div class="tm-history-inner">
							<img src="img/sobre06.jpg" alt="Image" class="img-fluid tm-history-img" />
							<div class="tm-history-text"> 
								<h4 class="tm-history-title">História Sobre a Vitamind</h4>
								<p class="tm-mb-p">Ideia criada por um grupo de alunos prestes a se formar em tecnologia da informação no instituto federal campus arraial do cabo
									<br>Vamos ilustrar uma loja de suplementos fictícia onde procuramos reunir preços e marcas de variados suplementos  em um só lugar para facilitar a vida do usuário
								</p>
							</div>
						</div>	
					</div>
				</div>
			</div>
		</main>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
</body>
</html>