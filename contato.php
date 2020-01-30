<?php

  class Contato{
    private $telefone;


    function __construct($telefone){
      $this->telefone=$telefone;
    }

    function set_telefone($telefone){
      $this->telefone=$telefone;
    }

    function get_telefone(){
      return $this->telefone;
    }
  }
