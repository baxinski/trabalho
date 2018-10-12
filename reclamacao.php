<!DOCTYPE html>
<html class="no-js">
	<head>
	  <meta charset="utf-8">
	  <title>Trabalho</title>
	  <link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />
	  <link rel="stylesheet" href="css/bootstrap.css">
	  <link rel="stylesheet" href="css/bootstrap-theme.css">
	  <link rel="stylesheet" href="css/style.css">
	</head>

  <body>
  <section id="header" class="appear"></section>
  <div class="navbar navbar-fixed-top" role="navigation" data-0="line-height:100px; height:100px; background-color:rgba(0,0,0,0.3);" data-300="line-height:60px; height:60px;">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			<span class="fa fa-bars color-white"></span>
		</button>
        <h1><a class="navbar-brand" href="index.html" data-0="line-height:90px;" data-300="line-height:50px;" style="margin-left:15px;">ReclamePOA</a></h1>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav" data-0="margin-top:20px;" data-300="margin-top:5px;">
          <li class="active"><a href="index.html">Principal</a></li>
          <li><a href="reclamacao.html">Reclamações</a></li>
		  <li><a href="duvidas.html">Dúvidas</a></li>
        </ul>
      </div>
    </div>
  </div>

  <section class="featured">
    <div class="container">
      <div class="row mar-bot40">
        <div class="col-md-6 col-md-offset-3">

          <div class="align-center">
            <i class="fa fa-exclamation-triangle" style="font-size:48px;color:white"></i>
            <h2 class="slogan">ReclamePOA</h2>
            <p>
              A plataforma tem como intuito receber as reclamações da população visando realizar melhorias nos locais destacados que apresentam irregularidades. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  		<div class="container">
			<h2 style="margin-top:20px;">Reclamação recebida!</h2>
				<p>Abaixo estão os dados que você informou.</p>
		
						<label>Nome:</label> 
							<?php
								echo $_POST["nome"];
							?><br>
							
						<label>Endereço:</label> 
							<?php
								echo $_POST["endereco"];
							?><br>

						<label>Bairro:</label> 
							<?php
								echo $_POST["bairro"];
							?><br>	
			
						<label>Tipo de reclamação:</label>
						<?php
							echo $_POST["tipoReclamacao"];
						?><br>
						
						<label>Descrição:</label>
						<?php
							echo $_POST["descricao"];
						?><br>
			</div>

  <script src="js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  <script src="js/jquery.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/jquery.nicescroll.min.js"></script>
  <script src="js/fancybox/jquery.fancybox.pack.js"></script>
  <script src="js/skrollr.min.js"></script>
  <script src="js/jquery.scrollTo.js"></script>
  <script src="js/jquery.localScroll.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/main.js"></script>
</body>

</html>