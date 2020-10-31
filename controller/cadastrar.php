<?php

require __DIR__ . "/../model/Cafe.php";

$data = filter_input_array(INPUT_POST);

try {
    $cafe = new Cafe();
    if($cafe->cadastrar($data)){
        header('Location: ../index.html');
        exit;
    }else{
        echo("Falha ao inserir Café,favor verificar os dados enviados.");
    }
}catch (\Exception $e){
    echo($e->getMessage());
}
