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
										$sql="select * from referencia join contra_referencia using(cod_referencia)
                    where cod_referencia='$cod_referencia'";

                    if($result= mysqli_query($bd,$sql)){
 											while($obj=$result->fetch_object()){

										echo "

                    <div>
										<fieldset disabled>
                            <div class='form-group'>
                                <label for='inputDescricaoCaso'>Descrição do caso:</label>
                                <textarea class='form-control' id='inputDescricaoCaso' rows='4'>$obj->descricao_caso</textarea>
                        </div>

                </div>
                <p class='lead text-center bg-dark text-white'>Realizar contra referência:</p>

                    <div class='form-group text-right'>
                        <label for='inputDiagnostico'>Diagnostico:</label>
                        <input type='text' class='form-control text-right' id='inputDiagnostico' name='diagnostico' value='$obj->diagnostico'>
                    </div>
                    <div class='form-group text-right'>
                        <label for='inputConduta'>Conduta adotada:</label>
                        <textarea class='form-control text-right' id='inputConduta' rows='4' name='conduta_adotada'>$obj->conduta_adotada</textarea>
                    </div>
                    </fieldset>

                <div class='text-right'>
                    <button class='btn btn-outline-primary my-2 my-sm-0' href='..'>Voltar</button>
                </div>


				";
      }
    }
				?>
      </section>

        <?php include("footer.php");?>

	</body>
</html>
