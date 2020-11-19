<?php

//include 'funcoes.php'; //GERA UM WARNING CASO NÃO ENCONTRE O ARQUIVO E O PROGRAMA EXECUTA 
//require 'funcoes.php'; //SE NÂO ENCONTRAR O ARQUIVO NÂO EXECUTA O PROGRAMA. GERA UM ERRO
require_once 'funcoes.php'; //VERIFICA SE O  ARQUIVO NÃO FOI IMPORTADO ANTERIORMENTE


$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.456.689-11' => [
        'titular' => 'Alberto',
        'saldo' => 300
    ],
    '123.256.789-12' => [
        'titular' => 'Vinicius',
        'saldo' => 100
    ]
];

$contasCorrentes['123.456.789-10'] = sacar(
    $contasCorrentes['123.456.789-10'],
    500.0
);

$contasCorrentes['123.456.689-11'] = sacar(
    $contasCorrentes['123.456.689-11'],
    200.0
);

$contasCorrentes['123.256.789-12'] = depositar(
    $contasCorrentes['123.256.789-12'],
    900.0
);

unset($contasCorrentes['123.456.689-11']); //Exclui Alberto da lista
titularComLetrasMaiusculas($contasCorrentes['123.256.789-12']);

foreach ($contasCorrentes as $cpf => $conta) {

    exibeMensagem($cpf . " " . $conta['titular'] . ' ' . $conta['saldo']);

    //PHP 7
    // list('titular' => $titular, 'saldo' => $saldo) = $conta;
    // exibeMensagem("$cpf $titular $saldo");
}




