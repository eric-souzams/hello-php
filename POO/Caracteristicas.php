<?php

abstract class Caracteristicas
{
    public $corCabelo;
    public $altura;
    public $corDosOlhos;
    private $peso;
    public $sexo;
    // protected $sexo;
    
    public function getPeso()
    {
        return $this->peso;
    }

    public function setPeso($peso): void
    {
        $this->peso = $peso;
    } 

}

class Pessoa extends Caracteristicas
{
    public $name;
    public $age;
    public $job;
    public $birthDate;
    private $cpf;

    public function __construct(string $name, int $age, string $job, string $birthDate) 
    {
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
        $this->birthDate = $birthDate;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    private function setCpf(string $cpf)
    {
         $this->cpf = $cpf;
    }

    public function changeCpf(string $fullName, string $birthDate, string $cpf)
    {
        if ($this->name == $fullName && $this->birthDate == $birthDate) {
            $this->setCpf($cpf);
        } else {
            throw new Exception('Cara, você não é você. Seus dados estão incorretos.');
        }
    }

    public static function say(string $message)
    {
        echo $message;
    }

}

$pessoa = new Pessoa('Eric', 20, 'Vagabundo', '08/03/1999');

$pessoa->corCabelo = 'Preto';
$pessoa->corDosOlhos = 'Azul';
$pessoa->sexo = 'M';
$pessoa->setPeso(68);
$pessoa->altura = 173;

var_dump($pessoa);

Pessoa::say('Salve meu povo');