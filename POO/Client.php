<?php

require('./Adress.php');

class Client {

    private $name;
    private $age;
    private $email;
    private Adress $adress;
    private $amount = 0.0;

    public function __construct(string $name, int $age, string $email, Adress $adress)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
        $this->adress = $adress;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getAdress(): Adress
    {
        return $this->adress;
    }

    public function setAdress(Adress $adress): void
    {
        $this->adress = $adress;
    }

    public function getAmount(): float
    {
        return $this->amount;
    }

    public function deposit(float $amount): void
    {
        $this->amount += $amount;
    }

    public function withdraw(float $amount): void
    {
        if($amount > $this->amount) {
            echo "You hanen't enought money to do this withdraw." . PHP_EOL;
            return;
        }

        $this->amount -= $amount;
    }

}

$adress = new Adress('Rua 25 Casa 07', 02, 71569781, 'São Paulo');
$client = new Client('Eric Magalhaes', 28, 'meuemail@email.com', $adress);

echo $client->getAdress()->getCep() . PHP_EOL;

echo $client->getAmount() . PHP_EOL;
$client->deposit(500);
echo $client->getAmount() . PHP_EOL;

$client->withdraw(200);
echo $client->getAmount() . PHP_EOL;

$client->withdraw(400);

echo $client->getAmount();

var_dump($client);
print_r($client);