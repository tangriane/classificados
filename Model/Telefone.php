<?php 

/**
* 
*/
class Telefone {
	
	private $cod;
	private $tipo;
	private $usuario;


	public function __contruct(){

    $this->usuario = new Usuario();
}


	public function getCod()
	{
	    return $this->cod;
	}
	
	public function setCod($cod)
	{
	    return $this->cod = $cod;
	}

	public function getTipo()
	{
	    return $this->tipo;
	}
	
	public function setTipo($tipo)
	{
	    return $this->tipo = $tipo;
	}

	public function getUsuario()
	{
	    return $this->usuario;
	}
	
	public function setUsuario($usuario)
	{
	    return $this->usuario = $usuario;
	}
}

 ?>