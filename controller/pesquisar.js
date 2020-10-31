 // INICIANDO FUNÇÃO PARA FAZER A PESQUISA DIRETO NO JSON, PASSANDO id COMO PARÂMETRO
function pesquisarId(id) {
    var itens = '';
    var url = 'json/dados.php';
    var achou = false;
    // verifica se o  campo está vazio,  se for verdadeiro retorna ao usuario uma mensagem
    if (id == 0) {
        itens = "<p style='font-size: 20px; text-align=center;'>Por favor digite um id válido</p>";
        $(".resultadoBusca").html(itens);
    } else {
        $.ajax({
            url: url,
            data: {id: id},
            cache: false,
            dataType: "json",
            method: "GET",
            error: erro,
            success: exibeDados,
        });
        function erro(err) {
            let texto = err.status == 404 ?
                "<p style='font-size: 20px;'>Não existe nenhum registro com esse id</p>" :
                "Há algum erro";
            $(".resultadoBusca").html(texto);
        }
        // função para buscar no json o objeto com o id que o usuario deseja encontrar
        function exibeDados(dados) {
            let html = `<form id="update-cafe">
                <input type='hidden' value='${dados.id}' name='id'>
                <input style='font-size: 34px;text-shadow: 3px 3px 2px #ccc;'
                    type='text' name='nome' value='${dados.nome}'>
                <textarea style='text-align: justify;'
                name='descricao'>${dados.descricao}
                </textarea>
                <input type='submit' value='Atualizar'>
            </form>`;
            $(".resultadoBusca").html(html);
            $("#update-cafe").submit(function (e) {
                e.preventDefault();
                $.ajax({
                    url: "controller/atualizar.php",
                    data: $(this).serialize(),
                    cache: false,
                    //dataType: "json",
                    type: "POST",
                    error: erro,
                    success: function () {
                        alert('Sucesso');
                    },
                });
            });
        }
    }
}
