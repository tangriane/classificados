<?php 
require_onde("Usuario.php");
require_onde("Categoria.php");
/**
* 
*/
class Classificado
{
	private $cod;
	private $nome;
	private $descricao;
	private $tipo;
	private $valor;
	private $status;
	private $perfil;
	private $categoria;
	private $usuario;

	public function __contruct(){

    $this->usuario = new Usuario();
    $this->categoria = new Categoria();
}



	public function getCod()
	{
	    return $this->cod;
	}
	
	public function setCod($cod)
	{
	    return $this->cod = $cod;
	}

	public function getNome()
	{
	    return $this->nome;
	} 
	
	public function setNome($nome)
	{
	    return $this->nome = $nome;
	}
	public function getDescricao()
	{
	    return $this->descricao;
	}
	
	public function setDescricao($descricao)
	{
	    return $this->descricao = $descricao;
	}

	public function getTipo()
	{
	    return $this->tipo;
	}
	
	public function setTipo($tipo)
	{
	    return $this->tipo = $tipo;
	}

	public function getValo()
	{
	    return $this->valor;
	}
	
	public function setValo($valor)
	{
	    return $this->valor = $valor;
	}
	public function getSt()
	{
	    return $this->status;
	}
	
	public function setSt($status)
	{
	    return $this->status = $status;
	}
	public function getPerf()
	{
	    return $this->perfil;
	}
	
	public function setPerf($perfil)
	{
	    return $this->perfil = $perfil;
	}
	public function getCategoria()
	{
	    return $this->categoria;
	}
	
	public function setCategoria($categoria)
	{
	    return $this->categoria = $categoria;
	}
	public function getUsua()
	{
	    return $this->usuario;
	}
	
	public function setUsua($usuario)
	{
	    return $this->usuario = $usuario;
	}

}
 ?>