<?php
	$nun_sus=$_POST["nun_sus"];
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

        <?php $header_title = "Referenciar usuario"; include("header.php");?>

        <section class="container">
            <div>
                <h2 class="title-pag text-primary">Referência</h2>
            </div>

            <div class="mt-3 mb-5 p-3 bg-white rounded box-shadow">

                <form action="cadastro_referencia_bd.php" method="post">
                    <div class="form-group">
											<div class="form-group col-md-4">
	                            <input type="hidden" class="form-control" id="inputNcartao" value="<?php echo "$nun_sus"; ?>" name="nun_sus">
	                        </div>
													<div class="form-group">
		                        <label for="inputIntituicaoRefe">Instituição Referenciada:</label>
														<select class="form-control" name="instituicao">
															<option value="">Selecione</option>
															<option value="CAPS II">CAPS II</option>
															<option value="CREAS">CREAS-Centro de referência especializada de Assistência Social</option>
														</select>
		                    </div>
		                    <div class="form-group">
		                        <label for="inputEspecRefe">Especialidade Referenciada:</label>
														<select class="form-control" name="especialidade_referenciada">
															<option value="">Selecione</option>
															<option value="PSIQUIATRA">PSIQUIATRA</option>
															<option value="ENFERMEIRO">ENFERMEIRO</option>
															<option value="medico">MÉDICO</option>
															<option value="assistente social">ASSISTENTE SOCIAL</option>
														</select>
		                    </div>
                    <div class="form-group">
                        <label for="inputDescricaoCaso">Descrição do caso:</label>
                        <textarea class="form-control" id="inputDescricaoCaso" rows="4" name="descricao_caso"></textarea>
                    </div>
										  <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Enviar</button>
                </form>


            </div>
        </section>

        <?php include("footer.php");?>

	</body>
</html>
