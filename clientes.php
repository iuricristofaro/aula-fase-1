<?php 

require_once 'Cliente.php';

$cliente1 = new Cliente();
$cliente1->getNome = "Iuri Cristofaro";
$cliente1->getCpf = "111.111.111-11";
$cliente2 = new Cliente();
$cliente2->getNome = "Maria Cristo";
$cliente2->getCpf = "222.222.222-22";
$cliente3 = new Cliente();
$cliente3->getNome = "José Alves";
$cliente3->getCpf = "333.333.333-33";
$cliente4 = new Cliente();
$cliente4->getNome = "Cláudia Jesus";
$cliente4->getCpf = "444.444.444-44";
$cliente5 = new Cliente();
$cliente5->getNome = "Pedro Fonseca";
$cliente5->getCpf = "555.555.555-55";
$cliente6 = new Cliente();
$cliente6->getNome = "Flávia Lucas";
$cliente6->getCpf = "666.666.666-66";
$cliente7 = new Cliente();
$cliente7->getNome = "Santiago";
$cliente7->getCpf = "777.777.777-77";
$cliente8 = new Cliente();
$cliente8->getNome = "Bárbara Costa";
$cliente8->getCpf = "888.888.888-88";
$cliente9 = new Cliente();
$cliente9->getNome = "Paulo Emílio";
$cliente9->getCpf = "999.999.999-99";
$cliente10 = new Cliente();
$cliente10->getNome = "Dayana Oliveira";
$cliente10->getCpf = "123.456.789-01";

$clientes = [
    $cliente1, $cliente2, $cliente3, $cliente4, $cliente5,
    $cliente6, $cliente7, $cliente8, $cliente9, $cliente10,
];

?>