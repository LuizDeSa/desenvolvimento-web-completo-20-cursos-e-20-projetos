// Elementos select
let tipoDespesa = Array()
tipoDespesa[1] = 'Alimentação'
tipoDespesa[2] = 'Educação'
tipoDespesa[3] = 'Lazer'
tipoDespesa[4] = 'Saúde'
tipoDespesa[5] = 'Transporte'

class Despesa{
    constructor(ano, mes, dia, tipo, descricao, valor){
        this.ano = ano,
        this.mes = mes,
        this.dia = dia,
        this.tipo = tipo,
        this.descricao = descricao,
        this.valor = valor
    }

    validarDados(){
        for(let i in this){
            // console.log(i, this[i])
            if(this[i]==undefined || this[i]=='' || this[i]==null){
                return false
            }
        }
        return true
    }
}

class Bd{

    constructor(){
        let id = localStorage.getItem('id')
        if(id===null){
            localStorage.setItem('id', 0)
        }
    }

    getProximoId(){
        let proximoId = localStorage.getItem('id')
        return (parseInt(proximoId) + 1)
    }

    gravar(d){
        let id = this.getProximoId()
        
        localStorage.setItem(id, JSON.stringify(d))

        localStorage.setItem('id', id)
    }

    recuperarTodosResgistros(){
        let despesas = Array()
        let id = localStorage.getItem('id')      
        for(let i = 1; i <= id; i++){
            let despesa = JSON.parse(localStorage.getItem(i))
            if(despesa===null){
                continue
            }

            // Cirando o atributo id
            despesa.id = i
            despesas.push(despesa)
        }
        return despesas
    }

    pesquisar(despesa){
        let despesasFiltradas = this.recuperarTodosResgistros() 
        // Ano
        if(despesa.ano!=''){
            despesasFiltradas = despesasFiltradas.filter(d => d.ano==despesa.ano)
        }
        // Mes
        if(despesa.mes!=''){
            despesasFiltradas = despesasFiltradas.filter(d => d.mes==despesa.mes)
        }
        // dia
        if(despesa.dia!=''){
            despesasFiltradas = despesasFiltradas.filter(d => d.dia==despesa.dia)
        }
        //tipo 
        if(despesa.tipo!=''){
            despesasFiltradas = despesasFiltradas.filter(d => d.tipo==despesa.tipo)
        }
        // Descrição
        if(despesa.descricao!=''){
            despesasFiltradas = despesasFiltradas.filter(d => d.descricao==despesa.descricao)
        }
         // valor
         if(despesa.valor!=''){
            despesasFiltradas = despesasFiltradas.filter(d => d.valor==despesa.valor)
        }

        
        return despesasFiltradas       
    }

    remover(id){
        localStorage.removeItem(id)
    }
}

let bd = new Bd()

function cadastarDespesa(){
    let data = document.getElementById('data')
    let ano = undefined
    let mes = undefined
    let dia = undefined
    if(data.value!=null && data.value!=undefined && data.value!=''){
        ano = data.value.split('-')[0]
        mes = data.value.split('-')[1]
        dia = data.value.split('-')[2]
    }
    let tipo = document.getElementById('tipo')
    let descricao = document.getElementById('descricao')
    let valor = document.getElementById('valor')

    let despesa = new Despesa(ano, mes, dia, tipo.value, descricao.value, valor.value)
    // console.log(despesa)

    if(despesa.validarDados()){
        bd.gravar(despesa)

        document.getElementById('div-modal-titulo').className = 'modal-header text-success'
        document.getElementById('modal-titulo').innerHTML = 'Registro inserido com sucesso'
        document.getElementById('modal-conteudo').innerHTML = 'Despesa foi cadastrada com sucesso'
        document.getElementById('modal-btn').innerHTML = 'Voltar!'
        document.getElementById('modal-btn').className = 'btn btn-success'

        let modalGravacao = new bootstrap.Modal('#modalRegistaDespesa')
        modalGravacao.show()
        
        ano = ''
        mes = ''
        dia = ''
        data = ''
        tipo.value = ''
        descricao.value = ''
        valor.value = ''

    }else{
        // console.log('Dados invalidos')
        document.getElementById('div-modal-titulo').className = 'modal-header text-danger'
        document.getElementById('modal-titulo').innerHTML = 'Erro na inclusao do registro'
        document.getElementById('modal-conteudo').innerHTML = 'Erro na gravação'
        document.getElementById('modal-btn').innerHTML = 'Voltar e Corrigir!'
        document.getElementById('modal-btn').className = 'btn btn-danger'

        let modalErro = new bootstrap.Modal('#modalRegistaDespesa')
        modalErro.show()
    }
}

function carregarListaDespesa(despesas = Array(), filtro = false){
    if(despesas.length==0 && filtro==false){
        despesas = bd.recuperarTodosResgistros()
    } 
    let listaDespesas = document.getElementById('listaDespesas')
    listaDespesas.innerHTML = ''

    despesas.forEach(function(d){
        let linha = listaDespesas.insertRow()
        linha.insertCell(0).innerHTML = `${d.dia}/${d.mes}/${d.ano}`
        linha.insertCell(1).innerHTML = tipoDespesa[d.tipo]
        linha.insertCell(2).innerHTML = d.descricao
        linha.insertCell(3).innerHTML = d.valor

        let btn = document.createElement("button")
        btn.className = 'btn btn-danger fs-5'
        btn.innerHTML = '<i class="bi bi-trash"></i>'
        btn.id = `excluir-despesa-${d.id}`
        btn.onclick = function(){
            let id = this.id.replace('excluir-despesa-', '')
            // removerDespesa(id)        
            // window.location.reload()
            
            document.getElementById('confirmar-exclusao').onclick = function(){
                removerDespesa(id)
            }
            
            let modalApagarDespesa = new bootstrap.Modal('#modalApagarDespesa')
            modalApagarDespesa.show()
        }
        linha.insertCell(4).append(btn)

        console.log(d)

    })
}

function pesquisarDespesa(){
    let ano = document.getElementById('ano').value
    let mes = document.getElementById('mes').value
    let dia = document.getElementById('dia').value
    let tipo = document.getElementById('tipo').value
    let descricao = document.getElementById('descricao').value
    let valor = document.getElementById('valor').value
    
    let despesa = new Despesa(ano, mes, dia, tipo, descricao, valor)

    let despesas = bd.pesquisar(despesa)

    console.log(despesas)

    carregarListaDespesa(despesas, true)
    
}

function removerDespesa(id){
    console.log(id)
    if(id!=undefined || id!=null){
        bd.remover(id)
    }
}

function atualizarTipo(){
    let tipoElement = document.getElementById('tipo')

    tipoDespesa.forEach(function(v, i){
        let tipo = new Option(v, i) 
        tipoElement.add(tipo)
    })
}
// Criar uma página de indicadores
// Criar um filtro por periodo