<?php
include_once "conect.php";
session_start();
$bd=conecta();
//pega dados da sessão do usuário
$login=$_SESSION["login"];
$senha=$_SESSION["senha"];

//recebe dados da referencia
$cod_referencia=$_POST["cod_referencia"];

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

        <?php $header_title = "Cadastro usuario"; include("header.php");?>

        <section class="container">
            <div class="">
                <h2 class="title-pag text-primary">Contra Referência</h2>
            </div>

            <div class="mt-3 mb-5 p-3 bg-white rounded box-shadow">

                <div>
									<?php
										$sql="select descricao_caso from referencia where cod_referencia='$cod_referencia'";
										$descricao_caso= $bd->query($sql);
									  $desc=$descricao_caso->fetch_object();
									  $descricao_caso=$desc->descricao_caso;//recebe descricao do caso


										echo "
										<form action='cadastro_contra_referencia_bd.php' method='post'>
										<input type='hidden' value='$cod_referencia' name='cod_referencia'>
										<fieldset disabled>
                            <div class='form-group'>
                                <label for='inputDescricaoCaso'>Descrição do caso:</label>
                                <textarea class='form-control' id='inputDescricaoCaso' rows='4'>$descricao_caso</textarea>
                        </div>
                    </fieldset>
                </div>
                <p class='lead text-center bg-dark text-white'>Realizar contra referência:</p>
                <form>
                    <div class='form-group text-right'>
                        <label for='inputDiagnostico'>Diagnostico:</label>
                        <input type='text' class='form-control text-right' id='inputDiagnostico' name='diagnostico'>
                    </div>
                    <div class='form-group text-right'>
                        <label for='inputConduta'>Conduta adotada:</label>
                        <textarea class='form-control text-right' id='inputConduta' rows='4' name='conduta_adotada'></textarea>
                    </div>
                
                <div class='text-right'>
                    <button class='btn btn-outline-primary my-2 my-sm-0' type='submit'>Enviar</button>
                </div>
            </div>
        </section>
				</form>
				";
				?>

        <?php include("footer.php");?>

	</body>
</html>
