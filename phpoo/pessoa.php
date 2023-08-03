<?php
    class Pessoa{
        public $nome;
        public $idade;
        public $profissão;


        // métodos a classe 
        function __construct($nome,$idade,$profissão){
            $this -> nome = $nome;
            $this -> idade =$idade;
            $this -> profissão =$profissão;
        }
        function get_nome(){
            return $this -> nome;
        }
        function get_profissão(){
            return $this-> profissão;
        }
        function get_idade(){
            return $this-> idade;
        }
        function apresentar(){
            return "<br>OLá, meu nome é". $this-> get_nome().",
                tenho".$this-> get_idade()."
                anos e sou" .$this -> get_profissão();
        }

    }


?>
