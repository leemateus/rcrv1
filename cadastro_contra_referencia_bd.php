<?php
include_once "contra_referencia.php";
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
	header("location: index.php");
}else{
  //recebe dados do form
  $diagnostico=$_POST["diagnostico"];
  $conduta_adotada=$_POST["conduta_adotada"];

  //recebe o codigo da referencia
  $cod_referencia=$_POST["cod_referencia"];

  //rebedados do usuario logado
  $login=$_SESSION["login"];
  $senha=$_SESSION["senha"];

  //valida profissional da contra referencia
  $sql="select profissional.nun_conselho from profissional where profissional.login='$login'
      and profissional.senha='$senha'";
    try {
      $nun_conselho= $bd->query($sql);
      $conselho=$nun_conselho->fetch_object();
      $numero_conselho=$conselho->nun_conselho;//numero do conselho

    } catch (Exception $e) {
      echo $exc->getTraceAsString();
    }

    //inicializa construtor
    $contra = new Contra_referencia($diagnostico,$conduta_adotada);

    //pega os dados da contra referencia
    $diagnostico=$contra->get_diagnostico();
    $conduta_adotada=$contra->get_conduta_adotada();

    //inserir no banco a contra referencia
    $sql="insert into contra_referencia values('$diagnostico','$conduta_adotada','$cod_referencia','$numero_conselho')";
    $bd->query($sql);

    //atualiza o status da referencia
    $sql="update referencia set status=1 where cod_referencia='$cod_referencia'";
    $bd->query($sql);
    header("location: index.php");
}
?>
