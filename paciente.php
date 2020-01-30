<?php

  include_once "pessoa.php";
  include_once "contato.php";
  include_once "endereco.php";
  class Paciente extends Pessoa{

    private $nun_sus;
    private $nome_mae;
    private $data_nascimento;
    private $sexo;


    function __construct($nun_sus, $nome_mae, $data_nascimento, $sexo,$nome) {
        $this->nun_sus = $nun_sus;
        $this->nome_mae = $nome_mae;
        $this->data_nascimento = $data_nascimento;
        $this->sexo = $sexo;
        $this->nome=$nome;
    }

    function set_nun_sus($nun_sus){
      $this->nun_sus=$nun_sus;
    }

    function set_nome_mae($nome_mae){
      $this->nome_mae=$nome_mae;
    }

    function set_data_nascimento($data_nascimento){
      $this->data_nascimento=$data_nascimento;
    }

    function set_sexo($sexo){
      $htis->sexo=$sexo;
    }

    function get_nun_sus(){
      return $this->nun_sus;
    }

    function get_nome_mae(){
      return $this->nome_mae;
    }

    function get_data_nascimento(){
      return $this->data_nascimento;
    }

    function get_sexo(){
      return $this->sexo;
    }
  }
