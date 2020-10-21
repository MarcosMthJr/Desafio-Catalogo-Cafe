<?php
header('Content-Type: text/html; charset=utf-8');

require __DIR__ . "/../model/Cafe.php";
echo json_encode((new Cafe())->listar(),true);