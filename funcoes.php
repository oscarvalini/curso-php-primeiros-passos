<?php

//EM PHP 5.6 NÂO É POSSÍVEL ESPECIFICAR TIPOS DE ARGUMENTOS E RETORNO
function sacar($conta, $valorASacar)
{
    if ($valorASacar > $conta['saldo']) {
        exibeMensagem("Você não tem saldo suficiente");
    } else {
        $conta['saldo'] -= $valorASacar;
    }

    return $conta;
}

function exibeMensagem($mensagem)
{
    echo $mensagem . PHP_EOL;
}

function depositar($conta, $valorADepositar)
{
    if ($valorADepositar > 0) {
        $conta['saldo'] += $valorADepositar;
    } else {
        exibeMensagem("Depositos precisam ser positivos");
    }
    return $conta;
}

function titularComLetrasMaiusculas(array &$conta) {
    $conta['titular'] = strtoupper($conta['titular']);
}