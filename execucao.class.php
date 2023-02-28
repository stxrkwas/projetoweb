<?php 
//Importação
require_once("pessoa.class.php");

//Nome da classe
class Teste{
    //Objeto pessoa com visibilidade privada
    private $pessoa;

    public function __construct(){
        //Objeto chamado pessoa que recebe a classe Pessoa()
        $pessoa = new Pessoa();
        //Passar um valor para o método setNome
        $pessoa->setNome("Maria Luiza");
        //Imprimir o valor do método getNome
        echo $pessoa->getNome();

    }
    /*Instância*/
}new Teste();

?>