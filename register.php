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
								<li class="tm-nav-li"><a href="login.php" class="tm-nav-link active">Voltar</a></li>
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
				<h2 class="col-12 text-center tm-section-title">Registrar</h2>
				<?php 
					if (isset($_SESSION ['Usuário_existente'])){ 
				?>

				<div class="text-center">
                        <p>O usuário escolhido já existe. Informe outro e tente novamente.</p>
                </div>

				<?php 
					} 
					unset ($_SESSION ['Usuário_existente']);
				 ?>


				<?php 
					if (isset($_SESSION['status_cadastro'])) {
				?>
				<div class="text-center">
                      <p>Cadastro efetuado!</p>
                      <p>Faça login informando o seu usuário e senha <a href="login.php">aqui</a></p>
                </div>
				<?php 
					} 
					unset ($_SESSION['status_cadastro']);
				?>


				<div class="form-register">
                    <form method="POST" action="cadastrar.php">
                        <label>Email:</label>
                        <input name="email"  type="email" placeholder="Insira seu e-mail">
						<label>Apelido:</label>
                        <input name="Apelido"  type="text" placeholder="Apelido2021">
                        <label>Senha: </label>
                        <input name="senha" type="password" placeholder="Insira sua senha" >
                        <label>Número de telefone:</label>
                        <input name = "telefone_cliente"type="number" max="999999999999" placeholder="Insira seu telefone com DD">
                        <label>Data de nascimento:</label>
                        <input name="data_nascimento" type="date">
                        <label>Endereço:</label>
                        <input name="endereco" type="text" placeholder="Avenida Nevada, n° 53, ap. 203">
                        <label>Estado:</label>
                        <select name="estado">
							
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
		<?php ?>

	</div>

	
	<script src="js/jquery.min.js"></script>
	<script src="js/parallax.min.js"></script>
	<script>
		$(document).ready(function(){
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