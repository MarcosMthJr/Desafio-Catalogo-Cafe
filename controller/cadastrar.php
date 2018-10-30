<?php
//importa a classe de cadastro
	require_once"../model/Class-Cadastrar.php";
	
// recebendo os valores do formulário	
	$nome = ($_POST['nome']);
	$descricao = ($_POST['descricao']);
//verificando se os campos do formulários não estão vazios 
	if (empty($nome) && empty($descricao)){
    	echo "Volte e preencha todos os campos";
    	exit;
	}
//  criando um obj e chamando a função para realizar o cadastro passando o nome e a descrição como parâmetros	
	$cadastrar = new Cadastrar();
	$cadastrar -> realizarCadastro($nome, $descricao);
?>
