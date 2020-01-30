<?php
include_once "conect.php";
session_start();
$bd=conecta();
 ?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    	<link rel="stylesheet" href="css/style.css">
    	<link rel="stylesheet" href="css/bootstrap.css">

	</head>
	<body>

        <?php $header_title = "Visualizar usuario"; include("header.php");?>

        <section class="container">

            <div class="mt-3">
                <h2 class="title-pag text-primary">Visualize usuarios cadastrados a partir do Número do SUS</h2>
            </div>

            <div class='row bg-light text-dark p-2 justify-content-between'>
                <h5>Usuarios</h5>
                <form class='form-inline' action='#' method='post'>
                    <input class='form-control mr-sm-2' type='search' placeholder='Nº SUS' aria-label='Pesquisar' name="nun_sus">
                    <button class='btn btn-outline-primary my-2 my-sm-0' type='submit'>Pesquisar</button>
                </form>
            </div>

            <?php
                if(count($_POST) > 0){
				//pega numero do sus do form
				$nun_sus=$_POST["nun_sus"];
				//seleciona os campos do paciente
				$sql="select * from paciente where paciente.nun_sus like '$nun_sus%'";
					if($result= mysqli_query($bd,$sql)){
					while($obj=$result->fetch_object()){
				echo "
				<section class='container my-4'>

	                <div class='mt-3 p-3 bg-white rounded box-shadow'>
	                    <form action='cadastro_referencia_interface.php' method='post'>
							<div class='form-row'>
								<div class='form-group col-md-2'>
									<label class='text-primary' for='inputNcartao'>Nº cartão do SUS:</label>
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
	                                <label class='text-primary' for='inputDataNascimento'>Data de nascimento:</label>
									<p>$obj->data_nascimento</p>
								</div>
								<div class='form-group col-md-2'>
									<label class='text-primary' for='inlineFormCustomSelect'>Sexo:</label>
									<p>$obj->sexo</p>
								</div>
							</div>
	                        <button type='submit' class='btn btn-primary'>Referenciar </button>
	                    </form>
	                </div>
	            </section>



			";}
    }
  }
			?>
      </section>
      <div class="div">
        <?php include("footer.php");?>
      </div>
	</body>
</html>
