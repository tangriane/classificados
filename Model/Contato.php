<?php

/**
 * 
 */
 class Contato
 {
 	
 	private $cod;
 	private $nome;
 	private $email;
 	private $assunto;
 	private $mensagem;
 	private $data;
 	private $ip;

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

 	public function getNo()
 	{
 	    return $this->nome;
 	}
 	
 	public function setNo($nome)
 	{
 	    return $this->nome = $nome;
 	}
 	public function getEmail()
 	{
 	    return $this->email;
 	}
 	
 	public function setEmail($email)
 	{
 	    return $this->email = $email;
 	}

 	public function getAssunto()
 	{
 	    return $this->assunto;
 	}
 	
 	public function setAssunto($assunto)
 	{
 	    return $this->assunto = $assunto;
 	}
 
 	public function getMe()
 	{
 	    return $this->mensagem;
 	}
 	
 	public function setMe($mensagem)
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

 	public function getIp()
 	{
 	    return $this->ip;
 	}
 	
 	public function setIp($ip)
 	{
 	    return $this->ip = $ip;
 	}
 } 

 ?>