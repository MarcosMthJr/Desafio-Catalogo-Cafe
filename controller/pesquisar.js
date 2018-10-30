 // INICIANDO FUNÇÃO PARA FAZER A PESQUISA DIRETO NO JSON, PASSANDO id COMO PARÂMETRO
 function pesquisarId(id){
        var itens = '';
        var url = 'json/dados.php';
        var achou = false;
        // verifica se o  campo está vazio,  se for verdadeiro retorna ao usuario uma mensagem 
        if (id == 0) {
            itens = "<p style='font-size: 20px; text-align=center;'>Por favor digite um id válido</p>";
            $(".resultadoBusca").html(itens);
        }else{
        $.ajax({
          id: id,
          url: url,
          cache: false,
          dataType: "json",
          method: "GET",
          error: erro,
          success: buscarDados,
        })
  function erro(){
      $("h3").html("Há algum erro");
    
  }
  // função para buscar no json o objeto com o id que o usuario deseja encontrar
  function buscarDados(dados){
    
    if(dados[0].erro){
      $("h3").html(dados[0].erro);
    }else{
      // pecorre o json atras do objeto desejado
      for(var i = 0; i < dados.length; i++){
        if (dados[i].id == id) {
          // se achou ele monta a mensagem a ser mostrada, com nome e descrição, e a variável achou recebe o valor TRUE para que o else não venha ser executado
            itens +="<p style='font-size: 34px; text-shadow: 3px 3px 2px #ccc; '>" + dados[i].nome;+"</p>"; 
            itens +="<p style='text-align: justify;'>" + dados[i].descricao;+"</p>";   
            achou = true;
        }
      }if (achou == false) {
          itens = "<p style='font-size: 20px;'>Não existe nenhum registro com esse id</p>";
        // se caso não encontrar o objeto, ou seja, a variável achou for false, ele retorna ao usuario que não achou
      }
      // escreve dentro do modal as infromações armazenadas na variavel itens
      $(".resultadoBusca").html(itens);
    }
  }

}
}