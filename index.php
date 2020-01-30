<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/bootstrap.css">

	  </head>
  	<body>

    <?php $cabecalho_title = "RCR Online"; include("header.php");?>

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

      <div class="container">

        <div class="my-5">
          <span class="h6 d-block">NOVAS OPÇÕES PARA VOCÊ</span>
          <h2 class="display-4 text-primary">Algumas Vantagens</h2>
        </div>

        <div class="row">
          <div class="col-xl-4 col-md-6">
            <h3 class="title-options">Cadastro</h3>
            <p class="lead">Cadastre seus usuarios para poder referencia-lo para outras instituições sempre que necessario. É rapido e fácil. Vamos tentar!</p>
            <a href="cadastro_usuario_interface.php" class="btn btn-outline-primary mb-4">Cadastrar Usuario</a>
          </div>

          <div class="col-xl-4 col-md-6">
            <h3 class="title-options">Visualize</h3>
            <p class="lead">Depois de cadastrado, você pode ver todos os seus usuarios. Saiba quais estão sendo atendidos ou quais precisam ser referenciados.</p>
            <a href="usuarios.php" class="btn btn-outline-primary mb-4">Visualizar Usuários</a>
          </div>

          <div class="col-xl-4 col-md-6">
            <h3 class="title-options">Contrarreferência</h3>
            <p class="lead">Saiba quando seus pacientes foram referenciados e contra referenciados. Busque pelo seus usuarios e saiba o resultados das ultimas RCRs.</p>
            <a href="visualiza_paciente_contra_referencia2.php" class="btn btn-outline-primary mb-4">Ver Contrarreferência</a>
          </div>

        </div>

      </div>

      <div class="container mt-3">
        <h3 class="title-options">Cadastre a sua instituição</h3>
        <p class="lead">Ou equipe para você possa compartilhar seus casos de forma eficiente e pratica.</p>
        <a href="cadastro_profissional.php" class="btn btn-primary btn-lg mt-1">Cadastrar</a>
      </div>

    </section>
      <?php include("footer.php")?>
	  </body>
</html>
