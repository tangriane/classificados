<?php 

/**
* 
*/
class Categoria 
{
	public $cod;
	public $nome;
	public $thumb;
	public $descricao;
	public $link; 

	public function getCod()
	{
	    return $this->cod;
	}
	
	public function setCod($cod)
	{
	    return $this->cod = $cod;
	}

	public function get()
	{
	    return $this->nome;
	}
	
	public function set($nome)
	{
	    return $this->nome = $nome;
	}

	public function getTh()
	{
	    return $this->thumb;
	}
	
	public function setTh($thumb)
	{
	    return $this->thumb = $thumb;
	}

	public function getDesc()
	{
	    return $this->descricao;
	}
	
	public function setDesc($descricao)
	{
	    return $this->descricao = $descricao;
	}

	public function getLink()
	{
	    return $this->link;
	}
	
	public function setLink($link)
	{
	    return $this->link = $link;
	}
}

 ?>