<?php
// configurações para acessar ao banco 
$host='localhost:3306';
$user='root';
$pass='';
$dataBase='cafe_catalogo';

//fazendo conexão
$conexao=new mysqli($host,$user,$pass,$dataBase);
// se falhar retorna ao usuario que falhou 
if(!$conexao){
	echo"conexão com o banco dados falhou";
	exit;
};


?>