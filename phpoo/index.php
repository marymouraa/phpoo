<?php
require ("Pessoa.php");
require ("Retangulo.php")
class Fruta{
    // atributos
     public $nome;
     public $cor;


    // Métodos 
    function __construct($nome, $cor){
        $this -> nome = $nome;
        $this -> cor = $cor; 
    }

    function set_name($name){
        $this-> nome = $name;
    }
    function set_cor($nome){
        $this -> cor = $cor;
    }

    function get_cor(){
        return $this -> cor;
    }
    function get_name(){
        return $this -> nome;

    }
}
// criando objeto
$maca = new Fruta("maca_ifsp_turmaB", "vermelha");
$banana = new Fruta("banana_ifsp_turmaB", "amarela");

/*$maca-> set_name("maca_ifsp_turmaB");
/*$banana -> set_name("banana_ifsp_turmaB");*/


echo $maca-> get_name();
echo "<br>". $banana-> get_name ();

$aluno1 = new Pessoa ("Henrique", 18, "Namorado da Mari");

echo $aluno1->apresentar();
$retangulo = new Retangulo(2,4);
echo "<br>Area do retangulo ". $retangulo-> calcular_area();

?>

