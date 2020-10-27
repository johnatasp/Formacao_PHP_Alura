<?php

require_once 'src/Conta.php';

$umaConta = new Conta();
// $umaConta->depositar(1200);

$umaConta->setNomeTitular("Johnatas Ferreira");
$umaConta->setCpfTitular("071.988.954-50");
$umaConta->setSaldo(1200);

echo "<p>CONTA 1</p>";
echo "<p>Nome: {$umaConta->getNomeTitular()}</p>";
echo "<p>CPF: {$umaConta->getCpfTitular()}</p>";
echo "<p>Saldo: {$umaConta->getSaldo()}</p>";

$duasConta = new Conta();
$umaConta->transfere(500, $duasConta);

$duasConta->setNomeTitular("Paulo Ricardo");
$duasConta->setCpfTitular("456.123.458-80");

echo "<p>CONTA 2</p>";
echo "<p>Nome: {$duasConta->getNomeTitular()}</p>";
echo "<p>CPF: {$duasConta->getCpfTitular()}</p>";
echo "<p>Saldo: {$duasConta->getSaldo()}</p>";
