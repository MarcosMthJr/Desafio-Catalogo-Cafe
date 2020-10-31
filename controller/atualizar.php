<?php

require __DIR__ . "/../model/Cafe.php";

$data = filter_input_array(INPUT_POST);

try {
    $cafe = new Cafe();
    if(!$cafe->atualizar($data)){
        throw new \Exception("Falha ao inserir Café, favor verificar os dados enviados.");
    }
}catch (\Exception $e){
    http_response_code('500');
    echo($e->getMessage());
}
