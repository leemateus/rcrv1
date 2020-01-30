<?php

  class Instituicao{

    protected $nome;

    function __construct($nome){
      $this->nome=$nome;
    }

    function set_nome($nome){
      $this->nome=$nome;
    }

    function get_nome(){
      return $this->nome;
    }
  }
