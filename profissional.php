<?php

  include_once "pessoa.php";
  class Profissional extends Pessoa{


    private $nun_conselho;
    private $login;
    private $senha;
    private $email;


    function __construct($nome,$nun_conselho,$login,$senha,$email){
      $this->nome=$nome;
      $this->nun_conselho=$nun_conselho;

      $this->login=$login;
      $this->senha=$senha;
      $this->email=$email;

    }




    function set_nun_conselho($nun_conselho){
      $this->nun_conselho=$nun_conselho;
    }

    function set_login($login) {
        $this->login = $login;
    }

    function set_senha($senha) {
        $this->senha = $senha;
    }

    function set_email($email) {
        $this->email = $email;
    }



    


    function get_nun_conselho() {
        return $this->nun_conselho;
    }

    function get_login() {
        return $this->login;
    }

    function get_senha() {
        return $this->senha;
    }

    function get_email() {
        return $this->email;
    }




  }
