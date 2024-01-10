<?php
include_once 'Tigger.php';
// Uso del Singleton
$tigger1 = Tigger::getInstancia();
$tigger2 = Tigger::getInstancia();

/*Llamamos al método roar unas cuantas veces*/
$tigger1->roar();
$tigger1->roar();
$tigger1->roar();
$tigger1->roar();
$tigger1->roar();
$tigger2->roar();
$tigger2->roar();

// Obtener el número de rugidos
echo "Número de rugidos: " . $tigger1->getRoarContador() . PHP_EOL;
?>