<?php

  abstract class Pessoa{
    protected $nome;

    function set_nome($nome){
      $this->nome=$nome;
    }

    function get_nome(){
      return $this->nome;
    }
  }
