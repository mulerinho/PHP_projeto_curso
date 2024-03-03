<?php
require 'funcoes.php';
// criando arrays compostos de contas

$minhasContas = [

    '01' => [
        'nome' => 'Alan',
        'saldo' => 102.5
    ],
    '02' => [
        'nome' => 'Ana',
        'saldo' => 200.6
    ],
    '03' => [
        'nome' => 'Didi',
        'saldo' => 150.3
    ],
    '04' => [
        'nome' => 'Pituca',
        'saldo' => 10.3
    ],
    '05' => [
        'nome' => 'Matilda',
        'saldo' => 300.8
    ]
];


foreach ($minhasContas as $conta) {
    ['nome' => $titular, 'saldo' => $saldo] = $conta;
}
?>
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso PHP</title>
</head>
<body>
    <h1>Curso:  Avançando com PHP na Alura. </h1>
    <h2>Projeto final do curso</h2>
    <hr>
    <?php
    foreach ($minhasContas as $conta) {
        ['nome' => $titular, 'saldo' => $saldo] = $conta;
        exibeContas($conta);
    }

    ?>
</body>
</html>
