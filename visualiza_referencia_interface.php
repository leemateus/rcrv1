<?php
include_once "conect.php";
session_start();
//pega dados da sessão do usuário
$login=$_SESSION["login"];
$senha=$_SESSION["senha"];
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

    <?php// seleciona as referencias para contrarreferenica
      $sql="select paciente.nun_sus, paciente.nome, paciente.data_nascimento,
        referencia.descricao_caso, referencia.data_referencia,
        referencia.cod_referencia from paciente join referencia using(nun_sus)
        join instituicao using(cod_instituicao) join profissional using(nun_conselho)
        where referencia.status=0 and (select especialidade.cod_especialidade from especialidade join
        profissional using (cod_especialidade) where profissional.login='$login'
        and profissional.senha='$senha') = referencia.cod_especialidade";

        if($result= mysqli_query($bd,$sql)){
           while($obj=$result->fetch_object()){
              echo "
                                  <fieldset disabled>
                                      <div class='form-group'>
                                              <label for='inputIntituicaoRefe'>Instituição Referenciada:</label>
                                              <input type='text' class='form-control' id='inputIntituicaoRefe' placeholder='NASF'>
                                          </div>
                                          <div class="form-group">
                                              <label for="inputEspecRefe">Especialidade Referenciada:</label>
                                              <input type="text" class="form-control" id="inputEspecRefe" placeholder="Médico">
                                          </div>
                                          <div class="form-group">
                                              <label for="inputDescricaoCaso">Descrição do caso:</label>
                                              <textarea class="form-control" id="inputDescricaoCaso" rows="4"></textarea>
                                      </div>
                                  </fieldset>";
           }
         }
     ?>

  </body>
</html>
