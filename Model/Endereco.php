<<?php 


/**
* 
*/
class Endereco{
	
private $cod;
private $rua;
private $numero;
private $bairro;
private $cidade;
private $estado;
private $complemento;
private $cep;
private $usuario;

public function getCod()
{
    return $this->cod;
}

public function setCod($cod)
{
    return $this->cod = $cod;
}

public function getRua()
{
    return $this->rua;
}

public function setRua($rua)
{
    return $this->rua = $rua;
}
public function getBairro()
{
    return $this->bairro;
}

public function setBairro($bairro)
{
    return $this->bairro = $bairro;
}

public function getCidade()
{
    return $this->cidade;
}

public function setCidade($cidade)
{
    return $this->cidade = $cidade;
}
public function getEstado()
{
    return $this->estado;
}

public function setEstado($estado)
{
    return $this->estado = $estado;
}

public function getComplemento()
{
    return $this->complemento;
}

public function setComplemento($complemento)
{
    return $this->complemento = $complemento;
}

public function getCep()
{
    return $this->cep;
}

public function setCep($cep)
{
    return $this->cep = $cep;
}




}






 ?>