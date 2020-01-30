<?php
include_once "conect.php";
session_start();
$bd=conecta();
//pega dados da sessão do usuário
$login=$_SESSION["login"];
$senha=$_SESSION["senha"];
 ?>

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

        <?php $header_title = "Historico usuario"; include("header.php");?>

        <section class="container">

            <div class="mt-3">
                <h2 class="title-pag text-primary">Lista de pacientes para contrarreferência</h2>
            </div>


									<?php

									//seleciona os campos do paciente
									$sql="select paciente.nun_sus, paciente.nome, paciente.nome_mae, paciente.data_nasciemnto, paciente.sexo,referencia.cod_referencia as referencia
                   from paciente join referencia using(nun_sus)
join instituicao on(referencia.instituicao=instituicao.cod_instituicao) join profissional using(nun_conselho)
where referencia.status=0 and referencia.nun_conselho = profissional.nun_conselho and profissional.login='$login'
and profissional.senha='$senha'";
									 if($result= mysqli_query($bd,$sql)){
											while($obj=$result->fetch_object()){
											 echo "<div class='mt-3 p-3 bg-white rounded box-shadow'>
	<form action='cadastro_contra_referencia_interface.php' method='post'>
        <input type='hidden' class='form-control' value='$obj->referencia' name='cod_referencia'>
			<div class='form-row'>
				<div class='form-group col-md-2'>
					<label class='text-primary' for='inputNcartao'>Nº cartão do SUS</label>
					<input type='text' class='form-control' id='inputNcartao' value='$obj->nun_sus' name='nun_sus'>
				</div>
				<div class='form-group col-md-3'>
					<label class='text-primary' for='inputaNome'>Nome:</label>
					<p>$obj->nome</p>
				</div>
				<div class='form-group col-md-3'>
					<label class='text-primary' for='inputNomeMae'>Nome da mãe:</label>
					<p>$obj->nome_mae</p>
				</div>
				<div class='form-group col-md-2'>
					<label class='text-primary' for='inputDataNascimento'>Data de nascimento</label>
					<p>$obj->data_nascimento</p>
				</div>
				<div class='form-group col-md-2'>
					<label class='text-primary' for='inlineFormCustomSelect'>Sexo</label>
					<p>$obj->sexo</p>
				</div>
				</div>
        <button type='submit' class='btn btn-primary'>Contrarreferenciar</button>
			</div>

    </form>
	</div>";

		}
		}
				?>
                </div>
            </section>

        </section>

        <?php include("footer.php");?>

	</body>
</html>
