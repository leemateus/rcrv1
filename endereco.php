<?php
  
class Endereco{
    private $logradouro;
    private $bairro;
    private $cidade;
    private $CEP;
    private $numero;
    private $complemento;
    
    

    function set_logradouro($logradouro) {
        $this->logradouro = $logradouro;
    }

    function set_bairro($bairro) {
        $this->bairro = $bairro;
    }

    function set_cidade($cidade) {
        $this->cidade = $cidade;
    }

    function set_CEP($CEP) {
        $this->CEP = $CEP;
    }

    function set_numero($numero) {
        $this->numero = $numero;
    }

    function set_complemento($complemento) {
        $this->complemento = $complemento;
    }

    function get_logradouro() {
        return $this->logradouro;
    }

    function get_bairro() {
        return $this->bairro;
    }

    function get_cidade() {
        return $this->cidade;
    }

    function get_CEP() {
        return $this->CEP;
    }

    function get_numero() {
        return $this->numero;
    }

    function get_complemento() {
        return $this->complemento;
    }
    
}