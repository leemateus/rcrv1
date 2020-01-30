<?php

  include_once "conect.php";
  $bd=conecta();



  // Recupera o login
$login = isset($_POST["login"]) ? $_POST["login"] : FALSE;
// Recupera a senha, a criptografando em MD5
$senha = isset($_POST["senha"]) ? $_POST["senha"] : FALSE;

// Usuário não forneceu a senha ou o login
if(!$login || !$senha){
echo "Você deve digitar seu Login e Senha!";

exit;

}
else{
  $sql="select * from profissional where profissional.login='$login' and profissional.senha='$senha'
   and profissional.status=1";

  $bd->query($sql);
  $nun_linhas=$bd->affected_rows;

  $sql2="select * from profissional where profissional.login='$login' and profissional.senha='$senha'
  and profissional.cod_especialidade=2";

  $bd->query($sql2);
  $nun_linhas2=$bd->affected_rows;

  function usuario($nun_linhas2){

    if($nun_linhas2>0 && $nun_linhas2<2){
      $teste_log=1;// se for assistente
      return $teste_log;
    }else{
      $teste_log=0;// se não for assistente
      return $teste_log;
    }

  }


    if($nun_linhas>0 && $nun_linhas<2){
      session_start();
      $_SESSION["login"] = $login;
  	  $_SESSION["senha"] = $senha;
      session_cache_expire(1);
      $cache_expire = session_cache_expire();

      $teste=usuario($nun_linhas2);
      if($teste==1){
        header("location: index.php");
      }elseif($teste==0){
        header("location: home.php");
      }



    }
    else{

      //unset ($_SESSION['login']);
  	  //unset ($_SESSION['senha']);
      //echo "Login não autorizado.";
      header("location: index.php");
    }

}
