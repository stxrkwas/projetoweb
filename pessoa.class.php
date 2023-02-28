<?php 
/*Classe com o nome pessoa*/
class Pessoa{
    /*Objetos com visibilidade privada*/
    private $nome; 
    private $endereco; 
    private $bairro; 
    private $cep; 
    private $cidade; 
    private $estado; 
    
    /*Método de captura de objeto*/
    public function getNome(){
        return $this->nome;
    }

    /*Método de alteração de valor de objeto*/
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEndereco(){
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;
    }
   
    /*Criar os respectivos métodos GETs e SETs*/

    public function getBairro(){
        return $this->bairro;
    }

    public function setBairro($bairro){
        $this->bairro = $bairro;
    }

    public function getCEP(){
        return $this->cep;
    }

    public function setCEP($cep){
        $this->cep = $cep;
    }

    public function getCidade(){
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;
    }

    public function getEstado(){
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;
    }

}

?>