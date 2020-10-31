<?php
header('Content-Type: application/json; charset=utf-8');
require __DIR__ . '/../model/Cafe.php';
$cafes = new Cafe();
if (!empty($_GET['id'])) {
    $id = is_numeric($_GET['id']) ? $_GET['id'] : 'aa';
    $cafes->where('id', $id);
}
$todos = $cafes->get();
http_response_code(empty($todos) ? 404 : 200);
echo json_encode($todos, true, JSON_PRETTY_PRINT);
