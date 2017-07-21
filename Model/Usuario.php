<?php

/**
* Tang model
*/
class Usuario{

private $cod;
private $nome;
private $cpf;
private $usuario;
private $senha;
private $nascimento;
private $sexo;
private $status;
private $permissao;
private $ip;

public function getCod()
{
    return $this->cod;
}

public function setCod($cod)
{
    return $this->cod = $cod;
}

public function getNome]()
{
    return $this->nome;
}

public function setNome]($nome)
{
    return $this->nome = $nome;
}

public function getCpf()
{
    return $this->cpf;
}

public function setCpf($cpf)
{
    return $this->cpf = $cpf;
}

public function getUsuario()
{
    return $this->usuario;
}

public function setUsuario($usuario)
{
    return $this->usuario = $usuario;
}

public function getSenha()
{
    return $this->senha;
}

public function setSenha($senha)
{
    return $this->senha = $senha;
}

public function getNascimento()
{
    return $this->nascimento;
}

public function setNascimento($nascimento)
{
    return $this->nascimento = $nascimento;
}

public function getSexo()
{
    return $this->sexo;
}

public function setSexo($sexo)
{
    return $this->sexo = $sexo;
}

public function getStatus()
{
    return $this->status;
}

public function setStatus($status)
{
    return $this->status = $status;
}

public function getPermissao()
{
    return $this->permissao;
}

public function setPermissao($permissao)
{
    return $this->permissao = $permissao;
}

public function getIp()
{
    return $this->ip;
}

public function setIp($ip)
{
    return $this->ip = $ip;
}