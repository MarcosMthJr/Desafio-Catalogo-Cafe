<?php
// classe Cadastrar 
Class Cadastrar{
// função para realizar cadastro	
	function realizarCadastro($nome, $descricao){
		require_once "../conexao/conexao.php";
		require_once "Class-Cafe.php";
	// criando objeto do tipo Café
		$novoCafe = new Cafe();
		$novoCafe->setNome($nome);
		$novoCafe->setDescricao($descricao);

		// verifica se já existe esse café no banco de dados
		$existente = Cadastrar::procurarPorNome($novoCafe->getNome());
		// e mostra o café existente 	
		$mostrar = Cadastrar::mostrar($existente);

		// se não já não existir ele realiza o cadastro
		if(!$existente){

		// se for false (disponível) ele cadastra
		$inserir = "INSERT INTO catalogo VALUES ('','{$novoCafe->getNome()}','{$novoCafe->getDescricao()}')";
		$resultado= $conexao -> query($inserir);
			if($resultado){
				
				header('Location: ../index.html');
			}else{
				echo"n foi possivel cadastrar usuario";
			}	
		}// se for true(já existe), ele retorna ao usuário que esse café já existe no banco de dados.
		else{
		echo"esse cara ja esta cadastrado";

	}


}
//LISTA TODOS OS NOMES DE CAFÉ EXISTENTES NO BANCO DE DADOS E VAERIFICA SE EXISTE ALGUM CAFÉ IGUAL 
		static function procurarPorNome($nome){
		require "../conexao/conexao.php";
		$sql = "SELECT * FROM catalogo where nome ='$nome'";
		$resultado=$conexao -> query($sql);
		if($resultado){
			if($linha=$resultado -> fetch_assoc()){
				return $linha;	
			}else{
				return false;
			exit;
			}
		}
	}

// MOSTRA O NOME DO ELEMENTO QUE JA EXISTE NO BANCO DE DADOS
	static function mostrar($linha){
		
			echo"
				<p id={$linha['id']}'><label>{$linha['nome']}</label><br><label>{$linha['descricao']}</label><br><br>
				<br>";	
		}
}
?>