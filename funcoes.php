<?php
//Curso da Alura - Avançando com PHP
// Funções
function msg(string $conta, string $valor): void
    // Função para exibir mensagens.
{
    echo "Operação na conta: {$conta} : Valor {$valor}" . PHP_EOL;
}

// Função deposita
function deposita(array $conta, float $valor): array
{
    $conta['saldo'] += $valor;
    msg($conta['nome'], $valor);
    return $conta;

}

// Função para saque
function sacar(array $conta, float $valor): array
{
    $conta['saldo'] -= $valor;
    msg($conta['nome'], $valor);
    return $conta;
}

// Função para transferência

function tranfere(array $conta, float $valor, array &$contaDestino): array
{
    if ($conta['saldo'] >= $valor) {
        $conta['saldo'] -= $valor;
        $contaDestino['saldo'] += $valor;
        msg($conta['nome'], $valor);
        return $conta;
    } else {
        echo "Saldo Insuficiente.";
        return $conta;
    }
}

// Função para exibir o Array $minhasContas no formato HTML.
function exibeContas(array $conta)
{
    echo "<li><h3>Nome do Titular:</h3> {$conta['nome']}   <h4>Saldo:</h4> {$conta['saldo']} </li>";
    echo "<hr>";
}



