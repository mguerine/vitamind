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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>


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
								<li class="tm-nav-li"><a href="login.php" class="tm-nav-link active">Voltar</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<main>
			<header class="row tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Registrar</h2>
				<?php
				if (isset($_SESSION['Usuário_existente'])) {
				?>

				<div class="text-center avisoborder">
					<p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
				</div>

				<?php
				}
				unset($_SESSION['Usuário_existente']);
				?>


				<?php
				if (isset($_SESSION['status_cadastro'])) {
				?>
				<div class="text-center avisoborder2">
					<p>Cadastro efetuado!</p>
					<p>Faça login informando o seu Email e senha <a href="login.php">aqui</a></p>
				</div>
				<?php
				}
				unset($_SESSION['status_cadastro']);
				?>

			</header>






			<div class="form-register">
				<form method="POST" action="cadastrar.php">
					<label style="padding-left: 10px;">Email:</label>
					<input name="email" type="email" placeholder="Insira seu e-mail" required>
					<label style="padding-left: 10px;">Apelido:</label>
					<input name="Apelido" type="text" placeholder="Apelido2021" required>
					<label style="padding-left: 10px;">Senha: </label>
					<input name="senha" type="password" placeholder="Insira sua senha" minlength="6" maxlength="12" onKeyUp="verificaForcaSenha();" id="password" required>
					<span id="password-status"></span><br>
					<label style="padding-left: 10px;">Número de telefone:</label>
					<input type="text" name="telefone_cliente" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{5}-[0-9]{4}" placeholder="Insira seu número de celular" required>
					<script type="text/javascript">
						$("#telefone").mask("(00) 90000-0000");
					</script>
					<label style="padding-left: 10px;">Data de nascimento:</label>
					<input name="data_nascimento" type="date" required>
					<label style="padding-left: 10px;">Endereço:</label>
					<input name="endereco" type="text" placeholder="Avenida Nevada, n° 53, ap. 203" required>
					<label style="padding-left: 10px;">Estado:</label>
					<select name="estado" required>

						<option selected>Estado...</option>
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
					<input id="s1" type="submit" value="Registrar">

				</form>
			</div>


	</div>
	</main>
	<footer class="tm-footer text-center">

	</footer>


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


	<script>
		function verificaForcaSenha() {
			var numeros = /([0-9])/;
			var alfabeto = /([a-zA-Z])/;
			var chEspeciais = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;

			if ($('#password').val().length < 6) {
				$('#password-status').html("<span style='color:red'>Fraco, insira no mínimo 6 caracteres</span>");
			} else {
				if ($('#password').val().match(numeros) && $('#password').val().match(alfabeto) && $('#password').val().match(chEspeciais)) {
					$('#password-status').html("<span style='color:green'><b>Forte</b></span>");
				} else {
					$('#password-status').html("<span style='color:orange'>Médio, insira um caracter especial</span>");
				}
			}
		}
	</script>


</body>

</html>