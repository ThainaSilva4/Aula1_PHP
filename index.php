<?php

/*class Pessoa{
    public $nome = "Renatinho Tura Games";
    public $endereco = "Rua Anajazeira, 223";
    public $telefone = "11982539660";
}

$temp = new Pessoa();
echo "Nome: " . $temp->nome . "<br>";
echo "Endereço: " . $temp->endereco . "<br>";
echo "Telefone: " . $temp->telefone . "<br>";*/


class Pessoa{
    private $nome;
    private $endereço;
    private $bairro;
    private $cep;

public function setNome($nome){
    $this->nome = $nome;
}

public function getNome(){
    return $this-> nome;
}
public function setEndereco($endereco){
    $this->endereco = $endereco;
}

public function getEndereco(){
    return $this-> endereco;
}
public function setBairro($bairro){
    $this->bairro = $bairro;
}

public function getBairro(){
    return $this-> bairro;
}
public function setCep($cep){
    $this->cep = $cep;
}

public function getCep(){
    return $this-> cep;
}



}

$temp = new Pessoa();
$temp->setNome("<h3> Nome: Thainá Ferreira da Silva <br>");
echo $temp->getNome();
$temp->setEndereco("Endereço: Rua Japichaua, 450 <br>");
echo $temp->getEndereco();
$temp->setBairro("Bairro: Jardim Matarazzo <br>");
echo $temp->getBairro();
$temp->setCep("CEP: 03813310 <br>");
echo $temp->getCep();

?>