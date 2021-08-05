<?php

class Pessoa
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

}

$eric = new Pessoa('Eric', 20, 'Vagabundo', '08/03/1999');

try {
    $eric->changeCpf('Eric1', '08/03/1999', '012.345.678-90');
} catch (Exception $ex) {
    echo $ex->getMessage() . PHP_EOL;
}

var_dump($eric->getCpf());
//var_dump($eric);