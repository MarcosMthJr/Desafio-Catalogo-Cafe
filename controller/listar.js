
// inicia a ação assim que o site carrega
$(document).ready(function(){

// diretório do json	
	var itens = "", url = "json/dados.php";
	$.ajax({
		url: url,
		cache: false,
		dataType: "json",
		method: "POST",
		beforeSend: carregando,
		error: erro,
		success: listar,
	})
	// função que acontece antes da tabela ser carregada .. se caso o carregamento for lento .. ele mostrara a mensagem "carregando" para o usuario
	function carregando(){
			$("h3").html("Carregando...");
		
	}

	// se acontecer algum erro .. ele retorna essa mensagem	
	function erro(){
			$("h3").html("Há algum erro");
		
	}

	// essa função lista todos os dados do json .. direto na tabela 
	function listar(dados){
		

		if(dados[0].erro){
			$("h3").html(dados[0].erro);
		}else{

		// percorrendo o json  e montando o corpo da tabela	
			for(var i = 0; i < dados.length; i++){
				
				itens += "<tr>";
				itens += "<td>" + dados[i].id + "</td>";
				itens += "<td>" + dados[i].nome + "</td></b>";
				itens += "<td>" + dados[i].descricao + "</td>";
				itens += "</tr>";
			}
			// mandando a variavel itens que tem os dados da tabela e inserindo no corpo da tabela 	
			$("#tabelaCatalogo tbody").html(itens);

			// limpando o h3 que tinha a mensagem carregando
			$("h3").html("");	
		}
	}
})

