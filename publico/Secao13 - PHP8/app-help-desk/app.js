let categoriaChamado = Array()
categoriaChamado['Criação Usuário'] = 'Criação Usuário'
categoriaChamado['Impressora'] = 'Impressora'
categoriaChamado['Hardware'] = 'Hardware'
categoriaChamado['Software'] = 'Software'
categoriaChamado['Rede'] = 'Rede'

function carregarCategoria(){
    let categoriaChamadoElement = document.getElementById('categoria-chamado')

    for(var x in categoriaChamado){
        let categoria = new Option(categoriaChamado[x], x) 
        categoriaChamadoElement.add(categoria)
    }
}
