<!DOCTYPE html>
<html>
	<head>
		 <title>RCR Online</title> 
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/bootstrap.css">

	  </head>
  	<body>

    <?php 
      $cabecalho_title = "RCR Online"; 
      include("header.php");
    ?>

		<section class="container-fluid" id="home-quote">
			<div class="row bg-dark text-white justify-content-center">
				 <div class="col-lg-8 col-md-10 p-4 align-self-center">
          <p class="lead" id="bv">Seja bem-vindo ao</p>
          <h1 class="display-4">Sistema de Referencia e Contra referencia Online</h1>
          <p class="lead">Aqui você pode <strong>acompanhar</strong>, <strong>pesquisar</strong> e <strong>compartilhar</strong> seus atendimentos de forma tranquila</p>
        </div>
			</div>
		</section>

		<section class="py-5 bg-light text-center">
      
      <div class="my-5">
          <span class="h6 d-block">NOVAS OPÇÕES PARA VOCÊ</span>
          <h2 class="display-4 text-primary">Algumas Vantagens</h2>
      </div>

      <div class="container">
            <h3 class="title-options">Contrarreferência</h3>
            <p class="lead">Acompanhe todos os casos que você foi referenciado. Dê a contrarreferência de seus usuários para a continuidade do serviço. Isso faz parte de um processo importante na atenção básica de saúde.</p>
            <a href="visualiza_paciente_contra_referencia.php" class="btn btn-outline-primary mb-4">Visualizar Caso</a>        
      </div>

    </section>
      <?php include("footer.php")?>
	  </body>
</html>