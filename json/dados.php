<?php
//header('Content-Type: application/json; charset=utf-8');
require __DIR__ . '/../model/Cafe.php';
$cafes = new Cafe();
//$cafes->where('id', '54');
$cafes->where('nome', 'Cappuccino');
$cafes->where('id', 43);
var_dump($cafes->get());
//echo json_encode($cafes->where('id', '54')->where('nome', 'Cappuccino')->get(), true);
