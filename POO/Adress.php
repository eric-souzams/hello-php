<?php

class Adress {

private $street;
private $number;
private $cep;
private $complement;

public function __construct(string $street, int $number, int $cep, string $complement)
{
    $this->street = $street;
    $this->number = $number;
    $this->cep = $cep;
    $this->complement = $complement;
}

public function getStreet(): string
{
    return $this->street;
}

public function setStreet(string $street): void
{
    $this->street = $street;
}

public function getNumber(): int
{
    return $this->number;
}

public function setNumber(int $number): void
{
    $this->number = $number;
}

public function getCep(): int
{
    return $this->cep;
}

public function setCep(int $cep): void
{
    $this->cep = $cep;
}

public function getComplement(): string
{
    return $this->complement;
}

public function setComplement(string $complement): void
{
    $this->complement = $complement;
}

}