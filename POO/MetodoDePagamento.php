<?php

interface PagamentoInterface
{
    public function pay(string $valor): bool;
    public function retornarDadosDePagamento(): array;
}


abstract class MetodoDePagamento implements PagamentoInterface
{
    public $nome;
    public $endPoint;
    private $chaveDeApi;
}


class PaypalService extends MetodoDePagamento
{

    public $nome = 'PayPal';
    public $endPoint = 'http://localhost:8080/api/';

    public function pay(string $valor): bool
    {
        //Requisição baseada no endpoint
        //Usando a chave de API

        return true;
    }

    public function retornarDadosDePagamento(): array
    {
        return [
            'transaction_id' => 123,
            'amount' => 8.98
        ];
    }

}


class PagSeguroService extends MetodoDePagamento
{

    public function pay(string $valor): bool
    {
        //Requisição baseada no endpoint
        //Usando a chave de API

        return true;
    }

    public function retornarDadosDePagamento(): array
    {
        return [
            'transaction_id' => 465,
            'amount' => 2.98
        ];
    }

}