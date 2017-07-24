<?php 
require_once("Classificado.php");
require_once("Usuario.php");
/**
* 
*/
class Comentario
{
	
	private $cod;
	private $mensagem; 
	private $data;
	private $status;
	private $classificado; 
	private $usuario; 
	
	public function __construct(){
		$this->classificado = new Classificado();
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

	public function getMensagem()
	{
	    return $this->mensagem;
	}
	
	public function setMensagem($mensagem)
	{
	    return $this->mensagem = $mensagem;
	}

	public function getData()
	{
	    return $this->data;
	}
	
	public function setData($data)
	{
	    return $this->data = $data;
	}
	public function getStatus()
	{
	    return $this->status;
	}
	
	public function setStatus($status)
	{
	    return $this->status = $status;
	}
	public function getClassificado()
	{
	    return $this->classificado;
	}
	
	public function setClassificado($classificado)
	{
	    return $this->classificado = $classificado;
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