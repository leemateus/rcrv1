<?php

  class Contra_referencia{
      private $diagnostico;
      private $conduta_adotada;

      function __construct($diagnostico,$conduta_adotada){
        $this->diagnostico=$diagnostico;
        $this->conduta_adotada=$conduta_adotada;
      }

      function set_diagnostico($diagnostico) {
          $this->diagnostico = $diagnostico;
      }

      function set_conduta_adotada($conduta_adotada) {
          $this->conduta_adotada = $conduta_adotada;
      }

      function get_diagnostico() {
          return $this->diagnostico;
      }

      function get_conduta_adotada() {
          return $this->conduta_adotada;
      }



  }
