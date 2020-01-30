<?php

  class Referencia{


    private $descricao_caso;
    private $especialidade_referenciada;

    function __construct($descricao_caso,$especialidade_referenciada){
      $this->descricao_caso=$descricao_caso;
      $this->especialidade_referenciada=$especialidade_referenciada;
    }


    function set_descricao_caso($descricao_caso) {
        $this->descricao_caso = $descricao_caso;
    }


    function set_especialidade_referenciada($especialidade_referenciada){
      $this->especialidade_referenciada=$especialidade_referenciada;
    }

    
    function get_especialidade_referenciada(){
      return $this->especialidade_referenciada;
    }



    function get_descricao_caso() {
        return $this->descricao_caso;
    }




  }
