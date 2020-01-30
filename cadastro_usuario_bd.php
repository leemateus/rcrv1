<?php
  session_start();

  include_once "paciente.php";
  include_once "conect.php";
  include_once "pessoa.php";
  include_once "profissional.php";

  $bd = conecta();


  if ( !isset($_SESSION["login"]) and !isset($_SESSION["senha"]) ) {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);

	//Redireciona para a página de autenticação
	//header("location: ../html/index.html");
}else{

  //recebe dados pessoais do form paciente
  $nun_sus=$_POST["nun_sus"];
  $nome=$_POST["nome"];
  $nome_mae=$_POST["nome_mae"];
  $data_nascimento=$_POST["data_nascimento"];
  $sexo=$_POST["sexo"];


  //recebe dados pessoais do form endereço
  $logradouro=$_POST["logradouro"];
  $numero=$_POST["numero"];
  $complemento=$_POST["complemento"];
  $CEP=$_POST["CEP"];
  $cidade=$_POST["cidade"];
  $bairro=$_POST["bairro"];

  //recebe dadso do form contato
  $telefone=$_POST["telefone"];

  $pac=new Paciente($nun_sus,$nome_mae,$data_nascimento,$sexo,$nome);
  $nun_sus=$pac->get_nun_sus();
  $nome=$pac->get_nome();
  $data_nascimento=$pac->get_data_nascimento();
  $sexo=$pac->get_sexo();
  $nome_mae=$pac->get_nome_mae();
  //paciente
  try {
      $result=mysqli_query($bd,"insert into paciente values('$nun_sus','$nome','$nome_mae','$sexo','$data_nascimento')");
  echo "Sucesso!";

  } catch (Exception $exc) {
      echo $exc->getTraceAsString();
      echo "<br>Cliente não cadastrado.";
  }


  //endereco
  if($result==TRUE){
      try {
           $result=mysqli_query($bd,"insert into endereco values('$logradouro','$bairro','$cidade','$CEP','$numero','$complemento','$nun_sus')");


      } catch (Exception $exc) {
          echo $exc->getTraceAsString();
          echo "<br>Erro ao cadastrar endereço.";
      }
    }
  //contato
    if($result==true){
        try {
             mysqli_query($bd,"insert into contato values('$telefone','$nun_sus')");


        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
            echo "<br>Erro ao cadastrar contato.";
        }
     }


}

desconecta($bd);
