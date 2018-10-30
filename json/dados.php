<?php
require_once("../conexao/conexao.php");
header('Content-type:' . "text/plain");
$select = "SELECT * FROM catalogo";
$conexao -> query($select);
$resultado = mysqli_query($conexao, $select);
$json_array = array();

while ($linha = mysqli_fetch_assoc($resultado)) {
	$json_array[] = $linha;
}
 echo json_encode($json_array, JSON_PRETTY_PRINT);
?>