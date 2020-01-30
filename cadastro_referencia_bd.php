<?php


  include_once "referencia.php";
  include_once "especialidade.php";
  include_once "instituicao.php";
  include_once "conect.php";

  session_start();
  $bd=conecta();

  if ( !isset($_SESSION["login"]) and !isset($_SESSION["senha"]) ) {
	//Destrói
	session_destroy();

	//Limpa
	unset ($_SESSION['login']);
	unset ($_SESSION['senha']);

	//Redireciona para a página de autenticação
	//header('location:login.php');
  echo "Logar novamente.";
}
else{

  //receber dados do form

  $descricao_caso=$_POST["descricao_caso"];
  $especialidade_referenciada=$_POST["especialidade_referenciada"];
  $instituicao=$_POST["instituicao"];
  $nun_sus=$_POST["nun_sus"];

  //inicializando costrutor
  $refe = new Referencia($descricao_caso,$especialidade_referenciada);

  //pega dados da sessão do usuário
  $login=$_SESSION["login"];
  $senha=$_SESSION["senha"];

  // sql para pegar número do conselho do profisisonal que irá realizar a referência
  $sql="select profissional.nun_conselho from profissional where profissional.login='$login'
  and profissional.senha='$senha'";
  //recebe o numero do conselho do profissional logado
  $nun_conselho= $bd->query($sql);
  $conselho=$nun_conselho->fetch_object();
  $numero_conselho=$conselho->nun_conselho;//numero do conselho

  //pesquisa código da instituicao e se a instituição está cadastrada
  $sql="select instituicao.cod_instituicao from instituicao where instituicao.nome='$instituicao'";
  $instituicao=$bd->query($sql);
  $insti=$instituicao->fetch_object();
  $instituicao=$insti->cod_instituicao;//codigo da instituicao

  //peqsuisa especialidade e se a especilaidade está cadastrada
  $sql="select especialidade.cod_especialidade from especialidade where especialidade.nome='$especialidade_referenciada'";
  $especialidade=$bd->query($sql);
  $esp=$especialidade->fetch_object();
  $especialidade=$esp->cod_especialidade;//codigo da especialidade


  //pega dados da referencia
  $descricao_caso=$refe->get_descricao_caso();
  //precisa rever como pegar o numero do sus do paciente a ser referenciado
  $sql="insert into referencia values(default,current_date(),
  default,'$descricao_caso','$numero_conselho','$nun_sus','$instituicao','$especialidade')";


try {

    $bd->query($sql);
    echo "Enviado com sucesso. <a href='usuarios.php'>Confirmar</a>";
    //header("location: ../html/visualiza_paciente.html");


} catch (Exception $exc) {
    echo $exc->getTraceAsString();
}

}

desconecta($bd);
