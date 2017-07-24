<?php 
	require_once("Classificado.php");

	/**
	* 
	*/
	class Imagem
	{
		private $cod;
		private $imagem;
		private $classificado;

		public function __construct(){

			$this->classificado = new Classificado();
		}

		public function getCod()
		{
		    return $this->cod;
		}
		
		public function setCod($cod)
		{
		    return $this->cod = $cod;
		}
		
		public function getImagem()
		{
		    return $this->imagem;
		}
		
		public function setImagem($imagem)
		{
		    return $this->imagem = $imagem;
		}

		public function getCla()
		{
		    return $this->classificado;
		}
		
		public function setCla($classificado)
		{
		    return $this->classificado = $classificado;
		}


	}

 ?>