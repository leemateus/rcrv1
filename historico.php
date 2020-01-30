<?php
include_once "conect.php";
session_start();
$bd=conecta();
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
                <h2 class="title-pag text-primary">Busque pelo Historico dos Usuarios Cadastrados</h2>
            </div>

            <section class="container my-4">
                <div class="row bg-dark text-white p-2 justify-content-between">
                    <h5>Usuarios</h5>
                    <form class="form-inline" action="#" method="post">
                        <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar" name="nun_sus">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Pesquisar</button>
                    </form>
                </div>
                <div>
									<?php
                  if(count($_POST) > 0){
									//pega numero do sus do form
									$nun_sus=$_POST["nun_sus"];
									//seleciona os campos do paciente
									$sql="select * from paciente where paciente.nun_sus like '$nun_sus%'";

									 if($result= mysqli_query($bd,$sql)){
											while($obj=$result->fetch_object()){
												echo "<div class='mt-3 mb-5 p-3 bg-white rounded box-shadow'>
														<form action='cadastro_referencia_interface.php' method='post'>
																<div class='form-row'>
																	<div class='form-group col-md-4'>
																					<label for='inputNcartao'>Nº cartão do SUS</label>
																					<input type='text' class='form-control' id='inputNcartao' value='$obj->nun_sus' name='nun_sus'>
																		</div>
																		<div class='form-group col-md-12'>
																				<label for='inputaNome'>Nome:</label>
																				<p>$obj->nome</p>
																		</div>
																		<div class='form-group col-md-12'>
																				<label for='inputNomeMae'>Nome da mãe:</label>
																				<p>$obj->nome_mae</p>
																		</div>
																</div>
																<div class='form-row'>

																		<div class='form-group col-md-4'>
																				<label for='inputDataNascimento'>Data de nascimento</label>
																				<input type='text' class='form-control' id='inputDataNascimento' value='$obj->data_nascimento' name='data_nascimento'>
																		</div>
																		<div class='form-group col-md-4'>
																				<label class='mr-sm-2' for='inlineFormCustomSelect'>Sexo</label>
																				<input type='text' class='form-control' id='inputDataNascimento' value='$obj->sexo' name='sexo'>
																		</div>
																			<div class='form-group col-md-4'>
																			<button type='submit' class='btn btn-primary'>Referenciar </button>
																			<button  class='btn btn-primary'>Editar </button>
																			</div>
																</div>
                                </form>";

														}
													}
                        }
													?>
                </div>
            </section>

        </section>

        <?php include("footer.php");?>

	</body>
</html>
