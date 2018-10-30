	// função responsavel por carregar os modais do nosso site, como modal de cadastro e de busca
	function iniciaModal(modalID){
			// define uma constante com o valor passado
				const modal = document.getElementById(modalID);
				// se a pessoa clicar, ele adiciona a classe 'mostrar' no elemento no html .. essa classe 
				// foi programado no css para mostrar nosso modal .. com um display flex.
				if(modal){
				modal.classList.add('mostrar');
				modal.addEventListener('click', (e)=>{
					// aqui diz que se o usuário clicar fora ou no botão fechar X, o elemento no html deve remover a classe 'mostrar' 
					// fazendo nosso modal sumir com o atributo do css display none;
					if(e.target.id == modalID || e.target.className=='fechar'){
						modal.classList.remove('mostrar');
					}
				});
				}
			}
			// nossas constantes responsavél por cada modal carregado, chamando a função de iniciar o modal
			const cadastrar = document.querySelector('.btnCadastrar');
			cadastrar.addEventListener('click', ()=>{iniciaModal('modal-cadastrar')})

			const buscar = document.querySelector('#btnBusca');
			buscar.addEventListener('click', ()=>{iniciaModal('modal-buscar')})